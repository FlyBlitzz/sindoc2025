<?php

namespace App\Controller;

use App\DTO\Fiche\FicheDTO;
use App\Entity\Fiche;
use App\Entity\SavRequete;
use App\Entity\Statut;
use App\Form\SavreqEdit as FormSavreqEdit;
use App\Form\SavreqRechercheType;
use App\Repository\SavRequeteRepository;
use App\Repository\FicheRepository;
use App\Repository\LivreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\Attribute\MapEntity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\SecurityBundle\Security;
use App\Service\SearchService;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class SavRequeteController extends AbstractController
{
    private $logicalParser;
    public function __construct(SearchService $logicalParser)
    {
        $this->logicalParser = $logicalParser;
    }
    #[Route('/sav/requete/', name: 'savreq_app_sav_requete_index', methods: ['GET'])]
public function index(SavRequeteRepository $savRequeteRepository, Request $request): Response
{
    $user = $this->getUser();

    if ($request->isXmlHttpRequest()) {
        // Get all SAV requests for the current user
        $savRequetes = $savRequeteRepository->findBy(['user' => $user]);

        $data = [];
        foreach ($savRequetes as $savRequete) {
            $data[] = [
                'nomRequete' => $savRequete->getNomRequete(),
                'createDate' => $savRequete->getCreateDate()?->format('Y-m-d') ?? '',
                'heure' => $savRequete->getHeure()?->format('H:i:s') ?? '',
                'actions' => '
                    <div class="d-flex">
                        <a href="' . $this->generateUrl('savreq_app_sav_requete_show', ['id' => $savRequete->getIdSavRequete()]) . '" class="btn btn-outline-primary tooltip-link" data-tooltip="Executer la requête" style="margin-right: 10px;">
                            <i class="bi bi-eye-fill"></i>
                        </a>
                        <a href="' . $this->generateUrl('savreq_app_sav_requete_edit', ['id' => $savRequete->getIdSavRequete()]) . '" class="btn btn-outline-primary tooltip-link" data-tooltip="Modifier la requête" style="margin-right: 10px;">
                            <i class="bi bi-pencil-fill"></i>
                        </a>
                        <form method="post" action="' . $this->generateUrl('savreq_app_sav_requete_delete', ['id' => $savRequete->getIdSavRequete()]) . '" onsubmit="return confirm(\'Êtes-vous sûr de vouloir supprimer cette requête ?\');" class="mb-0">
                            <input type="hidden" name="_token" value="' . $this->container->get('security.csrf.token_manager')->getToken('delete' . $savRequete->getIdSavRequete()) . '">
                            <button class="btn btn-outline-danger flex-fill tooltip-link" data-tooltip="Supprimer la requête">
                                <i class="bi bi-trash-fill"></i>
                            </button>
                        </form>
                    </div>'
            ];
        }

        return $this->json(['data' => $data]); // Return all data in JSON format
    }

    // If not an AJAX request, render the template
    return $this->render('sav_requete/index.html.twig', [
        'user' => $user,
    ]);
}
 
    #[Route("/sav/requete/{id}/show", name: 'savreq_app_sav_requete_show', methods: ['GET'])]
    public function showRequete(
        #[MapEntity(id: 'id')] SavRequete $savRequete,
        EntityManagerInterface $entityManager,
        AuthorizationCheckerInterface $authChecker,
        Request $request
    ) {
       
        // Extract query and parameters
        $session = $request->getSession();
        $session->set('previous_url', $request->getUri());

        $queryString = $savRequete->getRequete();
        $parameters = json_decode($savRequete->getRequeteParams(), true); // Convert JSON to array
       
        $queryString = str_replace("FROM App\Entity\Fiche f", "FROM App\Entity\Fiche f LEFT JOIN f.ficheMotCles mc", $queryString);
        $query = $entityManager->createQuery($queryString);
       
        // Set Parameters Dynamically
        foreach ($parameters as $key => $value) {
            if ($key != "MotCle")
                $query->setParameter($key, $value);
        }
        // Execute Query and Get Results
        $fiches = $query->getResult();


        $session->set('SavSearchResults', $fiches);
        $isAdmin = $authChecker->isGranted('ROLE_ADMIN');
        $requeteMultiCri = $parameters['MotCle'] ?? null;
        $nbrFiches = 0;
        $nbrFicheTotal = 0;
        if (!empty($fiches)) {
            $livreAssocie = $fiches[0]->getLivre();
            $nbrFicheTotal = count($livreAssocie->getFiche());
            $nbrFiches = count($fiches);
            $ficheIds = array_map(fn($fiche) => $fiche->getIdFiche(), $fiches);
            $connection = $entityManager->getConnection();
            $sql = '
            SELECT 
                mc.reference AS reference, 
                mc.denomination AS denomination, 
                COUNT(mc.id) AS count
            FROM fiche AS f
            INNER JOIN fichemotcle AS fmc ON f.id = fmc.fiche
            INNER JOIN mot_cle AS mc ON mc.id = fmc.motcle
            WHERE f.id IN (:ficheIds)
            GROUP BY mc.id, mc.reference, mc.denomination
            ORDER BY mc.reference ASC ,count DESC
        ';
            // Replace the :ficheIds placeholder with a comma-separated list
            $inClause = implode(',', array_map(fn($id) => $connection->quote($id), $ficheIds));
            $sql = str_replace(':ficheIds', $inClause, $sql);
            $statement = $connection->prepare($sql);
            $motCleOccurrences = $statement->executeQuery()->fetchAllAssociative();
        }
        $user = $this->getUser();
        $ficheDTOs = array_map(function ($fiche) use ($isAdmin, $user) {
            $hasAccess = $isAdmin || $fiche->getLivre()->getLivreAuths()->exists(fn($key,$auth) => $auth->getUser() == $user);
            return new FicheDTO(
                $fiche->getIdFiche(),
                $fiche->getRefer(),
                $fiche->getLivre()->getNom(),
                $fiche->getDenomination(),
                $fiche->getStatut()->getDenomination(),
                $fiche->isVisible(),
                $hasAccess,
                $fiche->getEdition() ?? '', // Assuming there is a method to get edition
                $fiche->getTexte() ?? '',   // Assuming there is a method to get texte
                $fiche->getTraduction() ?? '', // Assuming there is a method to get traduction
                $fiche->getNotes() ?? '',   // Assuming there is a method to get notes
                $fiche->getCommentaire() ?? '', // Assuming there is a method to get commentaire
                implode(',', array_map(function ($motCle) {
                    return $motCle->getReference() . ':' . $motCle->getDenomination();
                }, $fiche->getMotCles()))
                
            );
        }, $fiches);
        // dd($ficheDTOs);
        return $this->render('fiche/liste_fichesRech_SavReq.html.twig', [
            'fichesJSON' => json_encode($ficheDTOs),
            'fiches' => $fiches,
            'isAdmin' => $isAdmin,
            'motClesSelect' => $requeteMultiCri,
            'ReqId' => $savRequete->getIdSavRequete(),
            'selectedLivre' => 0,
            'nbrFiches' => $nbrFiches,
            'nbrFicheTotal' => $nbrFicheTotal,
            'motCleOccurrences' => $motCleOccurrences ?? []

        ]);

    }
    #[Route('/sav/requete/{id}/edit', name: 'savreq_app_sav_requete_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, #[MapEntity(id: 'id')] SavRequete $savRequete, ManagerRegistry $doctrine, EntityManagerInterface $entityManager): Response
    {
        $savRequeteEnt = $entityManager->getRepository(SavRequete::class)->find($savRequete->getIdSavRequete());
        if (!$savRequeteEnt) {
            throw $this->createNotFoundException('The requested record does not exist');
        }

        // Decode the JSON stored in the `requete_parameters` field
        $requeteParams = json_decode($savRequeteEnt->getRequeteParams(), true);
        // Retrieve all Statut entities for the drop-down list
        $statuts = $entityManager->getRepository(Statut::class)->findAll();
        $statutId = $requeteParams['statut'] ?? null;
        $numFiche = $requeteParams['ficheId'] ?? null;
        //  dd($requeteParams);
        if ($statutId != null)
            $selectedStatut = $entityManager->getRepository(Statut::class)->find($statutId);
        $form = $this->createForm(FormSavreqEdit::class, $savRequete, [
            'statuts' => $statuts,  // Pass all statuts to the form
            'data' => $requeteParams, // Pass the decoded JSON as additional data if necessary
            'statut' => $selectedStatut ?? null,
            'reqName' => $savRequete->getNomRequete(),
            'num_fiche' => $numFiche

        ]);

        $form->handleRequest($request);
        $repository = $doctrine->getRepository(Fiche::class);
        $queryBuilder = $repository->createQueryBuilder('f');
        if ($form->isSubmitted() && $form->isValid()) {
            $formData = $form->getData();

            // $entityManager->flush();
            $numFiche = $formData['num_fiche'];
            if ($numFiche != null) {
                $queryBuilder->andWhere('f.Id = :ficheId')->setParameter('ficheId', $numFiche);
                $parameters["num_fiche"] = $numFiche;
            }
            $refer = $formData['refer'];
            if ($refer != null) {
                $queryBuilder->andWhere('f.refer = :refer')->setParameter('refer', $refer);
                $parameters["refer"] = $refer;
            }
            $edition = $formData['edition'];
            if ($edition != null) {
                $queryBuilder->andWhere('f.edition = :edition')->setParameter('edition', $edition);
                $parameters['edition'] = $edition;
            }
            $denomination = $formData['denomination'];
            if ($denomination != null) {
                $queryBuilder->andWhere('f.denomination = :denomination')->setParameter('denomination', $denomination);
                $parameters['denomination'] = $denomination;
            }
            $statut = $formData['statut'];
            if ($statut != null) {
                $queryBuilder->andWhere('f.statut = :statut')->setParameter('statut', $statut);
                $parameters['statut'] = $statut->getIdStatut();
            }
            $texte = $formData['texte'];
            if ($texte != null) {
                $queryBuilder->andWhere('f.texte = :texte')->setParameter('texte', $texte);
                $parameters['texte'] = $texte;
            }
            $traduction = $formData['traduction'];
            if ($traduction != null) {
                $queryBuilder->andWhere('f.traduction = :traduction')->setParameter('traduction', $traduction);
                $parameters['traduction'] = $traduction;
            }
            $notes = $formData['notes'];
            if ($notes != null) {
                $queryBuilder->andWhere('f.notes = :notes')->setParameter('notes', $notes);
                $parameters['notes'] = $notes;
            }
            $commentaire = $formData['commentaire'];
            if ($commentaire != null) {
                $queryBuilder->andWhere('f.commentaire = :commentaire')->setParameter('commentaire', $commentaire);
                $parameters['commentaire'] = $commentaire;
            }
            $motClesRechercher = $form->get('motClesRechercher')->getData();
            $livreId = $requeteParams['livreId'];
            $queryBuilder->andWhere('f.livre = :livreId')->setParameter('livre', $livreId);
            $parameters['livreId'] = $livreId;
            if ($motClesRechercher != null) {
                $parameters["MotCle"] = $motClesRechercher;
                // Tokenize and parse the expression
                $tokens = $this->logicalParser->tokenize($motClesRechercher);

                $ast = $this->logicalParser->parse($tokens);

                $this->logicalParser->buildQuery($queryBuilder, $ast);
            }
            $sql = $queryBuilder->getQuery()->getDql();

            // Récupérer la chaîne SQL directement
            //  $sql = "INSERT INTO sav_requete (livre, refer, edition, denomination, statut, texte, traduction, notes, commentaire, user, motClesRechercher) VALUES ( $livre, $refer, $edition, $denomination, $statut, $texte , $traduction, $notes, $commentaire, $user, $motClesRechercher)";

            // Affecter la chaîne SQL à l'objet SavRequete
            $nomRequete = $form->get('nom_requete')->getData();

            // Affecter l'utilisateur à la requête
            $savRequeteEnt->setNomRequete($nomRequete);
            $savRequeteEnt->setRequete($sql);
            $savRequeteEnt->setRequeteParams(json_encode($parameters));
            // Persistez l'entité
            $entityManager->persist($savRequete);
            $entityManager->flush();
            // Add success flash message
            $this->addFlash('success', 'La requête a été modifiée!');
            // dd($savRequeteEnt);
            return $this->redirectToRoute('savreq_app_sav_requete_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('sav_requete/edit.html.twig', [
            'sav_requete' => $savRequete,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/sav/requete/{id}', name: 'savreq_app_sav_requete_delete', methods: ['POST'])]
    public function delete(Request $request, #[MapEntity(id: 'id')] SavRequete $savRequete, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $savRequete->getIdSavRequete(), $request->request->get('_token'))) {
            $entityManager->remove($savRequete);
            $entityManager->flush();
        }

        return $this->redirectToRoute('savreq_app_sav_requete_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/sav/req/results', name: 'savreq_app_recherche_results')]
    public function rechercheResult (Request $request,
    FicheRepository $ficheRepository,
    AuthorizationCheckerInterface $authChecker,
    EntityManagerInterface $entityManager,
    LivreRepository $livreRepository)
    {
            $livres = $livreRepository->findAll();
            $session = $request->getSession();
        $session->set('previous_url', $request->getUri());
            $requeteMultiCri = $session->get('requeteMultiCri');
            if (!empty($requeteMultiCri)) {
                //dd($queries);
                // dd($requeteMultiCri);
                $finalQuery = $this->logicalParser->buildMultiCritSearchQuery($requeteMultiCri);
                // dd($finalQuery);
                $fiches = $ficheRepository->searchMultiCrit($finalQuery);
                // dd($fiches);
                $isAdmin = $authChecker->isGranted('ROLE_ADMIN');
                $ficheIds = array_map(fn($fiche) => $fiche->getIdFiche(), $fiches);
                $connection = $entityManager->getConnection();
                $nbrFiches = 0;
                $nbrFicheTotal = 0;
                if(!empty($fiches)){
                    $livreAssocie = $fiches[0]->getLivre();
                    $nbrFicheTotal = count($fiches);
                    $nbrFiches = count($fiches);
                $sql = '
                    SELECT 
                        mc.reference AS reference, 
                        mc.denomination AS denomination, 
                        COUNT(mc.id) AS count
                    FROM fiche AS f
                    LEFT JOIN fichemotcle AS fmc ON f.id = fmc.fiche
                    INNER JOIN mot_cle AS mc ON mc.id = fmc.motcle
                    WHERE f.id IN (:ficheIds)
                    GROUP BY mc.id, mc.reference, mc.denomination
                    ORDER BY mc.reference ASC ,count DESC
                ';
                // Replace the :ficheIds placeholder with a comma-separated list
                $inClause = implode(',', array_map(fn($id) => $connection->quote($id), $ficheIds));
                $sql = str_replace(':ficheIds', $inClause, $sql);

                $statement = $connection->prepare($sql);
                $motCleOccurrences = $statement->executeQuery()->fetchAllAssociative();
                }
                $user = $this->getUser();
                $isAdmin = $authChecker->isGranted('ROLE_ADMIN');
                $ficheDTOs = array_map(function ($fiche) use($user, $isAdmin) {
                    $hasAccess = $isAdmin || $fiche->getLivre()->getLivreAuths()->exists(fn($key,$auth) => $auth->getUser() == $user);
                    return new FicheDTO(
                        $fiche->getIdFiche(),
                        $fiche->getRefer(),
                        $fiche->getLivre()->getNom(),
                        $fiche->getDenomination(),
                        $fiche->getStatut()->getDenomination(),
                        $fiche->isVisible(),
                        $hasAccess,
                        $fiche->getEdition() ?? '', // Assuming there is a method to get edition
                        $fiche->getTexte() ?? '',   // Assuming there is a method to get texte
                        $fiche->getTraduction() ?? '', // Assuming there is a method to get traduction
                        $fiche->getNotes() ?? '',   // Assuming there is a method to get notes
                        $fiche->getCommentaire() ?? '', // Assuming there is a method to get commentaire
                        implode(',', array_map(function ($motCle) {
                            return $motCle->getReference() . ':' . $motCle->getDenomination();
                        }, $fiche->getMotCles())), // Convert PersistentCollection to string by joining with commas
                        
                    );
                }, $fiches);
                $session = $request->getSession();
                // Retrieve search results and livre ID from session
                $session->set('SavSearchResults', $fiches);
                // dd($fiches);
                return $this->render('fiche/liste_fichesRech_SavReq_combin.html.twig', [
                    'fichesJSON' => json_encode($ficheDTOs),
                    'fiches' => $fiches,
                    'isAdmin' => $isAdmin,
                    'motClesSelect' => $requeteMultiCri,
                    'livres' => $livres,
                    'selectedLivre' => 0,
                    'nbrFiches' => $nbrFiches,
                    'nbrFicheTotal' => $nbrFicheTotal,
                    'motCleOccurrences' => $motCleOccurrences ?? []

                ]);
        }
        else {
           
            return $this->redirectToRoute('savreq_app_recherche');
        }
    }
    #[Route('/sav/req', name: 'savreq_app_recherche')]
    public function recherche(
        Request $request,
        FicheRepository $ficheRepository,
        AuthorizationCheckerInterface $authChecker,
        EntityManagerInterface $entityManager,
        LivreRepository $livreRepository
    ): Response {
        $user = $this->getUser();
        // Créer le formulaire SelectLivreType en passant la liste des livres
        $livreForm = $this->createForm(SavreqRechercheType::class, null, [
            'user' => $user
        ]);
        $livreForm->handleRequest($request);
        $livres = $livreRepository->findAll();
        // Traitement du formulaire SelectLivreType
        if ($livreForm->isSubmitted() && $livreForm->isValid()) {
            $session = $request->getSession();
            $requeteMultiCri = $livreForm->get('requeteRechercher')->getData();
            $session->set('requeteMultiCri', $requeteMultiCri);
            $livreForm->clearErrors();
            return $this->redirectToRoute('savreq_app_recherche_results', [
                'requeteMultiCri' => $requeteMultiCri
            ]);
            
        }
        
        // Affichage du formulaire SelectLivreType
        return $this->render('sav_requete/liste.html.twig', [
            'form' => $livreForm->createView(),
        ]);
    }
}
