<?php

namespace App\Controller;

use App\DTO\Fiche\FicheDTO;
use App\Entity\Fiche;
use App\Entity\FicheMotCle;
use App\Entity\Historique;
use App\Entity\Livre;
use App\Entity\SavRequete;
use App\Form\FicheType;
use App\Form\FicheTypeEdit;
use App\Form\RechercheFicheType;
use App\Form\SavRequeteType;
use App\Repository\FicheRepository;
use App\Repository\IndexRepository;
use App\Repository\MotCleRepository;
use App\Repository\LivreRepository;
use App\Repository\FicheMotCleRepository;
use App\Form\SelectLivreType;
use App\Repository\UserRepository;
use App\Service\BreadCrumbService as ServiceBreadCrumbService;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use DateTime;
use Knp\Component\Pager\PaginatorInterface;
use App\Service\PdfService;
use Symfony\Bridge\Doctrine\Attribute\MapEntity;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Service\SearchService;
use App\Service\WordService;
use Symfony\Component\HttpFoundation\StreamedResponse;
use ZipArchive;

class FicheController extends AbstractController
{
    private $logicalParser;
    private $breadcrumbService;
    private $wordExportService;

    public function __construct(
        ServiceBreadCrumbService $breadcrumbService,
        SearchService $logicalParser
    ) {
        $this->logicalParser = $logicalParser;
        $this->breadcrumbService = $breadcrumbService;
    }

    /**
     * @param Request $request
     * @param $motCle
     * @param $fiche
     * @param FicheMotCleRepository $ficheMotCleRepository
     * @param FicheRepository $ficheRepository
     * @param MotCleRepository $motCleRepository
     * @param EntityManagerInterface $entityManager
     * @return Response
     * Permet de supprimer les mots clés liés à une fiche
     */
    #[Route("/fiche-mot-cle/delete/{motCle}/{fiche}", name: "fiche_mot_cle_delete")]
    public function deleteFicheMotCle(Request $request, $motCle, $fiche, FicheMotCleRepository $ficheMotCleRepository, FicheRepository $ficheRepository, MotCleRepository $motCleRepository, EntityManagerInterface $entityManager): Response
    {
        $mot = $motCleRepository->findOneBy(['denomination' => $motCle]);
        $ficheMotCle = $ficheMotCleRepository->findOneBy(['motCle' => $mot, 'fiche' => $fiche]);
        $ficheEntity = $ficheRepository->findOneBy(['id' => $fiche]);
        $ficheEntity->removeFicheMotCle($ficheMotCle);
        $entityManager->remove($ficheMotCle);
        $entityManager->flush();

        return new Response(null, Response::HTTP_NO_CONTENT);
    }

    #[Route('/fiche/ajout', name: 'add_fiche', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        LivreRepository $livreRepository,
        Security $security,
        AuthorizationCheckerInterface $authChecker,
        EntityManagerInterface $entityManager
    ): Response {
        // Récupérer la liste des livres depuis le repository
        $livres = $livreRepository->findAllVisible();

        $session = $request->getSession();
        $canEdit = $session->get('canEdit', false);
        $listeLivresAutorises = [];
        $user = $this->getUser();
        if ($authChecker->isGranted('ROLE_ADMIN')) {
            $listeLivresAutorises = $livres;
        } else if ($authChecker->isGranted("ROLE_USER") && $canEdit) {
            $query = $entityManager->createQuery(
                'SELECT l 
                 FROM App\Entity\Livre l
                 JOIN l.livreAuths la
                 WHERE la.user = :user'
            )->setParameter('user', $user);

            $livres = $query->getResult();
            $selectedLivreFromHeader = $session->get('livreIdSelectionne');
            // Extract all book IDs into an array
            $livreIds = array_map(fn($livre) => $livre->getIdLivre(), $livres);

            // Check if the selected ID exists in the array
            if (!in_array($selectedLivreFromHeader, $livreIds)) {
                $session->remove('livreIdSelectionne');
                $session->remove('livreName');
            }

            $listeLivresAutorises = $livres;
        }
        // Créer le formulaire SelectLivreType en passant la liste des livres
        $livreForm = $this->createForm(SelectLivreType::class, null, [
            'livres' => $listeLivresAutorises,
        ]);
        $livreForm->handleRequest($request);
        $livreId = $request->getSession()->get('livreIdSelectionne');
        // Traitement du formulaire SelectLivreType
        if ($livreId != null) {
            return $this->redirectToRoute('deuxieme_formulaire_route');
        }
        if (($livreForm->isSubmitted() && $livreForm->isValid())) {
            $livreSelectionne = $livreForm->get('livre')->getData();
            // dd($livreSelectionne);
            // Stocker l'ID du livre en session
            $livreId = $livreSelectionne->getIdLivre();
            $request->getSession()->set('livreIdSelectionne', $livreId);
            $request->getSession()->set('livreName', $livreSelectionne->getNom());
            return $this->redirectToRoute('deuxieme_formulaire_route');
        }

        // Affichage du formulaire SelectLivreType
        return $this->render('fiche/ajout_livre_fiche.html.twig', [
            'form' => $livreForm->createView(),
        ]);
    }

    #[Route('/fiche/ajout/deuxieme', name: 'deuxieme_formulaire_route', methods: ['GET', 'POST'])]
    public function deuxiemeFormulaireAction(
        Request $request,
        ManagerRegistry $doctrine,
        Security $security,
        AuthorizationCheckerInterface $authChecker,
    ): Response {
        // Récupérer la sélection du livre depuis la session
        $livreId = $request->getSession()->get('livreIdSelectionne');
        // Récupérer l'objet Livre à partir de l'ID
        $livreAssocie = $doctrine->getRepository(Livre::class)->find($livreId);
        // Création du formulaire FicheType avec les mots clés filtrés
        $fiche = new Fiche();

        $user = $security->getUser();
        if ($user) {
            // Associer l'utilisateur à la fiche
            $fiche->setUser($user);
        }

        $ficheForm = $this->createForm(FicheType::class, $fiche, [
            'livreAssocie' => $livreAssocie,
        ]);
        $ficheForm->remove('visible');
        $ficheForm->remove('refer_bis');
        $ficheForm->remove('num_fiche');

        $ficheForm->handleRequest($request);

        // Traitement du formulaire FicheType
        if ($ficheForm->isSubmitted() && $ficheForm->isValid()) {
            // Check if a Fiche with the same 'refer' already exists
            $existingFiche = $doctrine->getRepository(Fiche::class)->findOneBy(['refer' => $fiche->getRefer()]);

            if ($existingFiche) {
                // Add a flash message to notify the user
                $this->addFlash('error', 'Une fiche avec la même référence existe déjà.');

                // Redirect back to the form or re-render it
                return $this->render('fiche/ajout_fiche.html.twig', [
                    'form' => $ficheForm->createView(),
                ]);
            }
            $nouvellesFicheMotCle = $ficheForm->get('ficheMotCles')->getData();
            $seenReferences = [];

            foreach ($nouvellesFicheMotCle as $ficheMotCle) {
                // Access the MotCle object and its reference
                $motCle = $ficheMotCle->getMotCle();
                if ($motCle && $motCle->getReference()) {
                    $reference = $motCle->getReference();

                    // Check if the reference has already been seen
                    if (isset($seenReferences[$reference])) {
                        $this->addFlash('error', 'Des mots clés en double ont été détectés dans la fiche que vous voulez insérer.');
                        // Redirect back to the form or re-render it
                        return $this->render('fiche/ajout_fiche.html.twig', [
                            'form' => $ficheForm->createView(),
                        ]);
                    }

                    // Mark the reference as seen
                    $seenReferences[$reference] = true;
                }
            }
            // dd($nouvellesFicheMotCle);
            // Définir le livre associé à la fiche
            $fiche->setLivre($livreAssocie);

            // Enregistrer la fiche en base de données
            $entityManager = $doctrine->getManager();

            $entityManager->persist($fiche);
            $entityManager->flush();

            // Créer et persister l'objet Historique
            $historique = new Historique();
            $historique->setFicheID($fiche->getIdFiche());
            $historique->setUser($user);
            $historique->setData($fiche);
            $historique->setTypeModif('Ajout');
            //Enregistrer la date et l'heure actuelle
            $dateActuelle = new DateTime();
            $heureActuelle = $dateActuelle->format('H:i:s');
            $historique->setCreateDate($dateActuelle);
            $heureObj = DateTime::createFromFormat('H:i:s', $heureActuelle);
            $historique->setHeure($heureObj);

            $entityManager->persist($historique);
            $entityManager->flush();


            // dd($nouvellesFicheMotCle);
            // Now persist the new "FicheMotCle" entries
            foreach ($nouvellesFicheMotCle as $nouveauFicheMotCle) {
                $existingFicheMotCle = $entityManager->getRepository(FicheMotCle::class)->findOneBy([
                    'fiche' => $fiche,
                    'motCle' => $nouveauFicheMotCle->getMotCle(),
                ]);

                if ($existingFicheMotCle) {
                    // Skip persisting this entry if it already exists
                    continue;
                }
                // Create a new FicheMotCle instance and set its values
                $nouveauFicheMotCleEntity = new FicheMotCle();
                $nouveauFicheMotCleEntity->setFiche($fiche);
                $nouveauFicheMotCleEntity->setMotCle($nouveauFicheMotCle->getMotCle());  // assuming MotCle is a property of the new form data
                $nouveauFicheMotCleEntity->setPrecision($nouveauFicheMotCle->getPrecision());  // assuming Precision is a property of the new form data
                // Persist the new "FicheMotCle"
                $entityManager->persist($nouveauFicheMotCleEntity);
            }
            // Enregistrer les modifications liées aux mots-clés
            $entityManager->flush();

            // Rediriger l'utilisateur après le traitement réussi
            if ($authChecker->isGranted('ROLE_USER')) {
                return $this->redirectToRoute('user_auth_fiche_list', ['userId' => $user->getId()]);
            } elseif ($authChecker->isGranted('ROLE_ADMIN')) {
                return $this->redirectToRoute('fiche_list', ['livreId' => $livreId]);
            }
        }

        // Afficher le formulaire FicheType
        return $this->render('fiche/ajout_fiche.html.twig', [
            // 'fiche' => $fiche,
            'form' => $ficheForm->createView(),
        ]);
    }

    /**
     * @param int $ficheID
     * @param FicheRepository $ficheRepository
     * @param Request $request
     * @param EntityManagerInterface $em
     * @param Security $security
     * @return RedirectResponse|Response
     * Permet de dupliquer une fiche
     */
    #[Route('/fiche/dupliquer/{ficheID}', name: 'fiche_dupliquer', methods: ['GET', 'POST'])]
    public function dupliquer(int $ficheID, FicheRepository $ficheRepository, Request $request, EntityManagerInterface $em, Security $security)
    {
        // Récupérer la fiche à dupliquer
        $fiche = $ficheRepository->find($ficheID);

        $ficheRepository->resetAutoIncrement();

        $session = $request->getSession();
        $previousUrl = $session->get('previous_url', $this->generateUrl('app_home'));

        if (!$fiche) {
            throw $this->createNotFoundException('La fiche à dupliquer n\'existe pas.');
        }

        // Créer une nouvelle fiche (vide)
        $nouvelleFiche = new Fiche();
        $nouvelleFiche->setLivre($fiche->getLivre());

        $user = $security->getUser();
        if ($user) {
            // Associer l'utilisateur à la fiche
            $nouvelleFiche->setUser($user);
        }

        // Pré-remplir le formulaire avec les données de la fiche existante
        $nouvelleFiche = clone $fiche;  // Cloner l'ancienne fiche
        $nouvelleFiche->setIdNull();    // Réinitialiser l'ID pour éviter les conflits
        $nouvelleFiche->getFicheMotCles()->clear();
        $nouvelleFiche->getHistoriques()->clear();
        $nouvelleFiche->setMotClesNull();

        $form = $this->createForm(FicheType::class, $nouvelleFiche, [
            'livreAssocie' => $nouvelleFiche->getLivre(),
        ]);// Copie les données de l'objet existant
        $form->remove('refer_bis');
        $form->remove('num_fiche');

        // Traiter le formulaire
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Sauvegarder la nouvelle fiche
            $em->persist($nouvelleFiche);
            $em->flush();

            // Create Historique entry
            $historique = new Historique();
            $historique->setFicheID($nouvelleFiche->getIdFiche());
            $historique->setUser($user);
            $historique->setTypeModif('Duplication');
            $historique->setData($nouvelleFiche, $fiche->getIdFiche());
            $dateActuelle = new DateTime();
            $historique->setCreateDate($dateActuelle);
            $historique->setHeure($dateActuelle);
            $em->persist($historique);
            $em->flush();

            // Redirection après ajout
            return $this->redirect($previousUrl ?: $this->generateUrl('homepage'));
        }

        return $this->render('fiche/dupliquer.html.twig', [
            'form' => $form->createView(),
            'fiche' => $fiche,
        ]);
    }

    #[Route('/fiche/recherche', name: 'fiche_recherche', methods: ['GET', 'POST'])]
    public function recherche(Request $request, LivreRepository $livreRepository): Response
    {
        $this->breadcrumbService->addBreadcrumb('Fiches', '');
        $this->breadcrumbService->addBreadcrumb('Recherche', '');
        // Récupérer la liste des livres depuis le repository
        $livres = $livreRepository->findAllVisible();

        // Créer le formulaire SelectLivreType en passant la liste des livres
        $livreForm = $this->createForm(SelectLivreType::class, null, [
            'livres' => $livres,
        ]);
        $livreForm->handleRequest($request);
        $livreId = $request->getSession()->get('livreIdSelectionne');
        // dd($livreId);
        // Traitement du formulaire SelectLivreType
        if ($livreId != null) {
            return $this->redirectToRoute('deuxieme_fiche_recherche');
        } else if ($livreForm->isSubmitted() && $livreForm->isValid()) {
            // Récupération du livre sélectionné
            $livreSelectionne = $livreForm->get('livre')->getData();
            // dd($livreSelectionne);
            // Stocker l'ID du livre en session
            $livreId = $livreSelectionne->getIdLivre();
            $request->getSession()->set('livreIdSelectionne', $livreId);
            $request->getSession()->set('livreName', $livreSelectionne->getNom());
            // Rediriger vers la page du deuxième formulaire
            return $this->redirectToRoute('deuxieme_fiche_recherche');
        }

        // Affichage du formulaire SelectLivreType
        return $this->render('fiche/recherche_fiche.html.twig', [
            'form' => $livreForm->createView(),
            'breadcrumbs' => $this->breadcrumbService->getBreadcrumbs(),
        ]);
    }

    #[Route('/fiche/recherche/deuxieme', name: 'deuxieme_fiche_recherche')]
    public function rechercheDeuxiemeFormulaireAction(Request $request, FicheRepository $ficheRepository, EntityManagerInterface $entityManager, Security $security): Response
    {
        $user = $this->getUser();
        $listeUsersAutoriser = [];
        // Récupérer la sélection du livre depuis la session
        // $livreId = $request->cookies->get('selectedLivre');
        $livreId = $request->getSession()->get('livreIdSelectionne');
        // Récupérer l'objet Livre à partir de l'ID
        if ($livreId == null) {
            // return $this->render('fiche/recherche_fiche.html.twig');
            return $this->redirectToRoute('app_home');
        }
        $livreAssocie = $entityManager->getRepository(Livre::class)->find($livreId);
        // Créer un formulaire de recherche
        $fiche = new Fiche();
        $form = $this->createForm(RechercheFicheType::class, $fiche, [
            'livreAssocie' => $livreAssocie,
        ]);
        $form->remove('visible');
        $form->remove('refer_bis');
        // $form->remove('num_fiche');
        // Traitement du formulaire de recherche
        $session = $request->getSession();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Récupérer les données du formulaire
            $fiche->setLivre($livreAssocie);
            $ficheId = $form->get('num_fiche')->getData();
            $request->getSession()->set('num_fiche', $ficheId);
            $refer = $form->get('refer')->getData();
            $request->getSession()->set('refer', $refer);
            $edition = $form->get('edition')->getData();
            $request->getSession()->set('edition', $edition);
            $denomination = $form->get('denomination')->getData();
            $request->getSession()->set('denomination', $denomination);
            $statut = $form->get('statut')->getData();
            $request->getSession()->set('statut', $statut);
            $texte = $form->get('texte')->getData();
            $request->getSession()->set('texte', $texte);
            $traduction = $form->get('traduction')->getData();
            $request->getSession()->set('traduction', $traduction);
            $notes = $form->get('notes')->getData();
            $request->getSession()->set('notes', $notes);
            $commentaire = $form->get('commentaire')->getData();
            $request->getSession()->set('commentaire', $commentaire);
            $user = $form->get('user')->getData();
            $request->getSession()->set('user', $user);
            $motClesRechercher = $form->get('motClesRechercher')->getData();
            $request->getSession()->set('motClesRechercher', $motClesRechercher);
            $donnéesRech = [
                'ficheId' => $form->get('num_fiche')->getData(),
                'refer' => $form->get('refer')->getData(),
                'edition' => $form->get('edition')->getData(),
                'denomination' => $form->get('denomination')->getData(),
                'statut' => $form->get('statut')->getData(),
                'texte' => $form->get('texte')->getData(),
                'traduction' => $form->get('traduction')->getData(),
                'notes' => $form->get('notes')->getData(),
                'commentaire' => $form->get('commentaire')->getData(),
                'user' => $form->get('user')->getData(),
                'motClesRechercher' => $form->get('motClesRechercher')->getData(),

            ];
            // dd($donnéesRech);
            $motClesSelect = $form->get('motClesRechercher')->getData();

            $session->set('searchCriteria', $donnéesRech);
            $session->set('motCles', $motClesSelect);

            $listeUsersAutoriser = $livreAssocie->getIdLivreAuto();
            $session->set('listeUsersAutoriser', $listeUsersAutoriser);

            // Redirect to results page
            return $this->redirectToRoute('fiche_recherche_resultat', ['livreId' => $livreId]);
        } else {
            $this->breadcrumbService->addBreadcrumb('Fiches', '');
            $this->breadcrumbService->addBreadcrumb('Recherche', '');
            $this->breadcrumbService->addBreadcrumb($livreAssocie->getNom(), '');
            return $this->render('fiche/recherche_fiche.html.twig', [
                'form' => $form->createView(),
                'breadcrumbs' => $this->breadcrumbService->getBreadcrumbs(),
            ]);
        }
    }

    #[Route('/fiche/{livreId}/recherche/resultats', name: 'fiche_recherche_resultat')]
    public function resultatRecherche(
        int $livreId,
        Request $request,
        FicheRepository $ficheRepository,
        AuthorizationCheckerInterface $authChecker,
        EntityManagerInterface $entityManager
    ): Response {
        $session = $request->getSession();
        $session->set('previous_url', $request->getUri());

        $this->breadcrumbService->addBreadcrumb('Fiches', '');

        $session = $request->getSession();
        $donnéesRech = $session->get('searchCriteria');
        // dd($donnéesRech);
        $listeUsersAutoriser = $session->get('listeUsersAutoriser');
        $motCles = $session->get("motCles");

        // Check admin status
        $isAdmin = $authChecker->isGranted('ROLE_ADMIN');

        $livreId2 = $session->get('livreIdSelectionne');

        if ($livreId2 != null)
            $livreAssocie = $entityManager->getRepository(Livre::class)->find($livreId2);
        else
            $livreAssocie = $entityManager->getRepository(Livre::class)->find($livreId);

        // Retrieve the book object
        // dd($donnéesRech);
        $this->breadcrumbService->addBreadcrumb($livreAssocie->getNom(), '');
        // Fetch the fiches based on search criteria
        $fiches = $ficheRepository->search($donnéesRech, $livreAssocie, $this->getUser(), $isAdmin);
        $session->set('searchResults', $fiches);
        $nbrFicheTotal = $livreAssocie->getFiche();
        $nbrFiches = count($fiches);
        // Extract fiche IDs
        $ficheIds = array_map(fn($fiche) => $fiche->getIdFiche(), $fiches);
        // dd($ficheIds);
        // Use raw SQL query to fetch keyword occurrences
        if (!empty($fiches)) {
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
            AND f.livre_id = :livreId
            GROUP BY mc.id, mc.reference, mc.denomination
            ORDER BY mc.reference ASC ,count DESC
            ';
            // Replace the :ficheIds placeholder with a comma-separated list
            $inClause = implode(',', array_map(fn($id) => $connection->quote($id), $ficheIds));
            $sql = str_replace(':ficheIds', $inClause, $sql);
            $statement = $connection->prepare($sql);
            // $statement->bindValue('ficheIds', $ficheIds);
            $statement->bindValue('livreId', $livreAssocie->getIdLivre());
            $motCleOccurrences = $statement->executeQuery()->fetchAllAssociative();
        }

        $user = $this->getUser();

        $ficheDTOs = array_map(function ($fiche) use ($isAdmin, $user) {
            $hasAccess = $isAdmin || $fiche->getLivre()->getLivreAuths()->exists(fn($key, $auth) => $auth->getUser() == $user);
            return new FicheDTO(
                $fiche->getIdFiche(),
                $fiche->getRefer(),
                $fiche->getLivre()->getNom(),
                $fiche->getDenomination() ?? '',
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
        // Render the response
        return $this->render('fiche/liste_fichesRech.html.twig', [
            'fichesJSON' => json_encode($ficheDTOs),
            'fiches' => $fiches,
            'breadcrumbs' => $this->breadcrumbService->getBreadcrumbs(),
            'isAdmin' => $isAdmin,
            'nbrFiches' => $nbrFiches,
            'nbrFicheTotal' => $nbrFicheTotal,
            'livre' => $livreAssocie,
            'motClesSelect' => $motCles,
            'motCleOccurrences' => $motCleOccurrences ?? [],
            'listeUsersAutoriser' => $listeUsersAutoriser
        ]);
    }

    /**
     * @Route("/fiche/export/{id}", name="fiche_export", methods={"POST"})
     */
    #[Route('/fiche/export/{id}', name: 'fiche_export')]
    public function exportFiche(
        Request $request,
        PdfService $pdfService,
        WordService $wordExportService,
        EntityManagerInterface $entityManager,
        int $id
    ): Response {
        $format = $request->request->get('exportFormat');
        // Fetch the fiche entity from the database
        $fiche = $entityManager->getRepository(Fiche::class)->find($id);
        if (!$fiche) {
            throw $this->createNotFoundException('Fiche non trouvée');
        }
        // dd($fiche->getMotCles());
        // Logic to handle exporting based on format (PDF or Word)
        if ($format === 'pdf') {
            // Add your PDF generation logic here
            $html = $this->renderView('export/pdf_fiche_template.html.twig', [
                'fiche' => $fiche,
            ]);
            // $pdfContent = $pdfService->generateBinaryPDF($html1);
            // Generate and return PDF for download
            // $this->addFlash('success', 'Fiche exportée en PDF');
            return $pdfService->generatePdfResponse($html, 'fiche_' . $fiche->getRefer() . '.pdf');

        } else if ($format === 'word') {
            $ficheContent = $wordExportService->generateFicheWordDoc($fiche);
            // $tempDir = sys_get_temp_dir();
            $filename = 'fiche_' . $fiche->getRefer() . '.docx';
            // file_put_contents($fichePath, $ficheContent);
            $response = new Response($ficheContent, 200, [
                'Content-Type' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', // Set the content type to Word
                'Content-Disposition' => 'attachment; filename="' . $filename . '"', // Force download with the filename
                'Cache-Control' => 'no-store, no-cache, must-revalidate', // Prevent caching
                'Pragma' => 'no-cache', // For older HTTP/1.0 caches
                'Expires' => '0', // Ensure the file is not cached
            ]);
            return $response;
        } else {
            $this->addFlash('error', 'Format d\'export invalide');
        }
        $livreId = $request->getSession()->get('livreIdSelectionne');
        return $this->redirectToRoute('fiche_recherche_resultat', ['livreId' => $livreId]);
    }

    #[Route('/fiches/pdf', name: 'fiches_pdf')]
    public function exportPdf(Request $request, PdfService $pdfService): Response
    {
        // Retrieve serialized data from the POST request
        // dd($request);
        $ficheSerialized = $request->request->get('ficheDataPdf');
        // dd($ficheSerialized);
        $exportType = $request->request->get('exportType'); // Default: Reference Only

        if (!$ficheSerialized) {
            throw $this->createNotFoundException('No fiche data found for export.');
        }

        // Deserialize the JSON data into an array
        $fiches = json_decode($ficheSerialized, true);
        if (!$fiches) {
            throw $this->createNotFoundException('Invalid fiche data.');
        }

        // Split fiches into chunks of 50
        $chunkSize = 50;
        $ficheChunks = array_chunk($fiches, $chunkSize);

        // Create ZIP file
        $zipFilePath = sys_get_temp_dir() . '/motCles.zip';
        $zip = new ZipArchive();

        if ($zip->open($zipFilePath, ZipArchive::CREATE) !== true) {
            throw new \RuntimeException('Unable to create ZIP file.');
        }

        // Process each chunk and generate PDFs
        foreach ($ficheChunks as $index => $chunk) {
            // dd($chunk);
            // Generate PDF for Reference Only
            if ($exportType === 'reference_only') {
                $html = $this->renderView('export/pdf_motCle_template.html.twig', [
                    'fiches' => $chunk,
                ]);
                $pdfContent = $pdfService->generateBinaryPDF($html);
                $zip->addFromString("fiches_motCle_partie_{$index}.pdf", $pdfContent);
            }

            // Generate PDF for Reference & Denomination
            if ($exportType === 'reference_denomination') {
                $html = $this->renderView('export/pdf_motCleDenom_template.html.twig', [
                    'fiches' => $chunk,
                ]);
                $pdfContent = $pdfService->generateBinaryPDF($html);
                $zip->addFromString("fiches_motCle_denomination_partie_{$index}.pdf", $pdfContent);
            }
        }

        // Close ZIP
        $zip->close();

        // Return ZIP file as a response
        return new StreamedResponse(function () use ($zipFilePath) {
            readfile($zipFilePath);
            unlink($zipFilePath); // Clean up temporary file
        }, 200, [
            'Content-Type' => 'application/zip',
            'Content-Disposition' => 'attachment; filename="fiches.zip"',
        ]);
    }

    // #[Route('/fiches/word', name: 'fiches_word')]
    // public function exportToZip(Request $request, WordService $wordExportService): Response
    // {
    //     // Retrieve serialized data from the POST request
    //     $ficheSerialized = $request->request->get('ficheDataWord');

    //     if (!$ficheSerialized) {
    //         throw $this->createNotFoundException('No fiche data found for export.');
    //     }

    //     // Deserialize the JSON data into an array or an object
    //     $fiches = json_decode($ficheSerialized, true);

    //     if (!$fiches) {
    //         throw $this->createNotFoundException('Invalid fiche data.');
    //     }

    //     // Retrieve the export type (either 'reference_only' or 'reference_denomination')
    //     $exportType = $request->request->get('exportType');
    //     // dd($request);
    //     // Generate the Word document based on the export type
    //     $content = '';
    //     // dd($exportType);
    //     if ($exportType === 'reference_only') {
    //         $content = $wordExportService->generateWordDocWithOnlyRefContent($fiches);
    //     } elseif ($exportType === 'reference_denomination') {
    //         $content = $wordExportService->generateWordDocWithDenomContent($fiches);
    //     } else {
    //         throw new \InvalidArgumentException('Invalid export type.');
    //     }

    //     // Create a temporary directory to store the files
    //     $tempDir = sys_get_temp_dir();
    //     $wordFile = $tempDir . '/fiches_export_' . $exportType . '.docx';

    //     // Save the content to a temporary Word file
    //     file_put_contents($wordFile, $content);

    //     // Create a ZIP file
    //     $zipPath = $tempDir . '/fiches_export.zip';
    //     $zip = new \ZipArchive();
    //     if ($zip->open($zipPath, \ZipArchive::CREATE | \ZipArchive::OVERWRITE) !== true) {
    //         throw new \Exception('Unable to create ZIP file.');
    //     }

    //     // Add the generated Word file to the ZIP
    //     $zip->addFile($content, 'fiches_export.docx');
    //     $zip->close();

    //     // Read the ZIP file into memory
    //     $zipContent = file_get_contents($zipPath);

    //     // Cleanup temporary files
    //     unlink($content);
    //     unlink($zipPath);

    //     // Return the ZIP file as a response
    //     return new Response(
    //         $zipContent,
    //         200,
    //         [
    //             'Content-Type' => 'application/zip',
    //             'Content-Disposition' => 'attachment; filename="fiches_export.zip"',
    //             'Content-Length' => strlen($zipContent),
    //         ]
    //     );
    // }
    #[Route('/fiches/word', name: 'fiches_word')]
    public function exportToDownload(Request $request, WordService $wordExportService): Response
    {
        // Retrieve serialized data from the POST request
        $ficheSerialized = $request->request->get('ficheDataWord');

        if (!$ficheSerialized) {
            throw $this->createNotFoundException('No fiche data found for export.');
        }

        // Deserialize the JSON data into an array or an object
        $fiches = json_decode($ficheSerialized, true);

        if (!$fiches) {
            throw $this->createNotFoundException('Invalid fiche data.');
        }

        // Retrieve the export type (either 'reference_only' or 'reference_denomination')
        $exportType = $request->request->get('exportType');

        // Generate the Word document based on the export type
        $content = '';
        if ($exportType === 'reference_only') {
            $content = $wordExportService->generateWordDocWithOnlyRefContent($fiches);
        } elseif ($exportType === 'reference_denomination') {
            $content = $wordExportService->generateWordDocWithDenomContent($fiches);
        } else {
            throw new \InvalidArgumentException('Invalid export type.');
        }

        // Ensure that content is not empty
        if (empty($content)) {
            throw new \Exception('The generated document is empty.');
        }

        // Set the filename for the Word document
        $fileName = 'fiches_export_' . $exportType . '.docx';

        // Return the Word document directly for download
        return new Response(
            $content,
            200,
            [
                'Content-Type' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                'Content-Disposition' => 'attachment; filename="' . $fileName . '"',
                'Content-Length' => strlen($content),
            ]
        );
    }



    #[Route('/sav/requete/new', name: 'savreq_app_sav_requete_new', methods: ['GET', 'POST'])]
    public function newRequete(
        Request $request,
        EntityManagerInterface $entityManager,
        ManagerRegistry $doctrine
    ): Response {

        // Récupérer la sélection du livre depuis la session
        $livreId = $request->getSession()->get('livreIdSelectionne');
        // Récupérer l'objet Livre à partir de l'ID
        $livreAssocie = $entityManager->getRepository(Livre::class)->find($livreId);
        // Créer une instance de SavRequete
        $savRequete = new SavRequete();
        //Build the query to Store
        $repository = $doctrine->getRepository(Fiche::class);
        $queryBuilder = $repository->createQueryBuilder('f');
        //Variable pour stocker les parametres de la requete 

        $parameters = array();

        // Créer le formulaire avec l'objet SavRequete
        $formSavReq = $this->createForm(SavRequeteType::class, $savRequete);

        // Gérer la soumission du formulaire
        $formSavReq->handleRequest($request);
        if ($formSavReq->isSubmitted() && $formSavReq->isValid()) {
            $livre = $livreAssocie;
            $nomRequete = $formSavReq->get('nom_requete')->getData();
            $existingRequete = $entityManager->getRepository(SavRequete::class)->findOneBy(['nom_requete' => $nomRequete]);

            if ($existingRequete) {
                // Add a flash error message
                $this->addFlash('error', 'Ce nom de requête existe déjà.');

                return $this->render('sav_requete/new.html.twig', [
                    'form' => $formSavReq->createView(),
                ]);
            }
            $user = $this->getUser();
            $numFiche = $request->getSession()->get('num_fiche');
            if ($numFiche != null) {
                $queryBuilder->andWhere('f.id = :ficheId')->setParameter('ficheId', $numFiche);
                $parameters["ficheId"] = $numFiche;
            }
            $refer = $request->getSession()->get('refer');
            if ($refer != null) {
                $queryBuilder->andWhere('f.refer = :refer')->setParameter('refer', $refer);
                $parameters["refer"] = $refer;
            }
            $edition = $request->getSession()->get('edition');
            if ($edition != null) {
                $queryBuilder->andWhere('f.edition = :edition')->setParameter('edition', $edition);
                $parameters['edition'] = $edition;
            }
            $denomination = $request->getSession()->get('denomination');
            if ($denomination != null) {
                $queryBuilder->andWhere('f.denomination = :denomination')->setParameter('denomination', $denomination);
                $parameters['denomination'] = $denomination;
            }
            $statut = $request->getSession()->get('statut');
            if ($statut != null) {
                $queryBuilder->andWhere('f.statut = :statut')->setParameter('statut', $statut);
                $parameters['statut'] = $statut->getIdStatut();
            }
            $texte = $request->getSession()->get('texte');
            if ($texte != null) {
                $queryBuilder->andWhere('f.texte = :texte')->setParameter('texte', $texte);
                $parameters['texte'] = $texte;
            }
            $traduction = $request->getSession()->get('traduction');
            if ($traduction != null) {
                $queryBuilder->andWhere('f.traduction = :traduction')->setParameter('traduction', $traduction);
                $parameters['traduction'] = $traduction;
            }
            $notes = $request->getSession()->get('notes');
            if ($notes != null) {
                $queryBuilder->andWhere('f.notes = :notes')->setParameter('notes', $notes);
                $parameters['notes'] = $notes;
            }

            $commentaire = $request->getSession()->get('commentaire');
            if ($commentaire != null) {
                $queryBuilder->andWhere('f.commentaire = :commentaire')->setParameter('commentaire', $commentaire);
                $parameters['commentaire'] = $commentaire;
            }
            $motClesRechercher = $request->getSession()->get('motClesRechercher');
            $queryBuilder->andWhere('f.livre = :livreId')->setParameter('livre', $livreId);
            $parameters['livreId'] = $livreId;
            if ($motClesRechercher != null) {
                $parameters["MotCle"] = $motClesRechercher;
                // Tokenize and parse the expression
                $tokens = $this->logicalParser->tokenize($motClesRechercher);

                $ast = $this->logicalParser->parse($tokens);

                $this->logicalParser->buildQuery($queryBuilder, $ast);
            }
            // dd(json_encode($parameters));
            // dd($queryBuilder->getQuery()->getSQL());
            $sql = $queryBuilder->getQuery()->getDql();

            // Récupérer la chaîne SQL directement
            //  $sql = "INSERT INTO sav_requete (livre, refer, edition, denomination, statut, texte, traduction, notes, commentaire, user, motClesRechercher) VALUES ( $livre, $refer, $edition, $denomination, $statut, $texte , $traduction, $notes, $commentaire, $user, $motClesRechercher)";

            // Affecter la chaîne SQL à l'objet SavRequete
            $nomRequete = $formSavReq->get('nom_requete')->getData();

            // Affecter l'utilisateur à la requête
            $savRequete->setUser($user);
            $savRequete->setNomRequete($nomRequete);
            $savRequete->setRequete($sql);
            $savRequete->setRequeteParams(json_encode($parameters));
            //Enregistrer la date et l'heure actuelle
            $dateActuelle = new DateTime();
            $heureActuelle = $dateActuelle->format('H:i:s');
            $savRequete->setCreateDate($dateActuelle);
            $heureObj = DateTime::createFromFormat('H:i:s', $heureActuelle);
            $savRequete->setHeure($heureObj);
            // Persistez l'entité
            $entityManager->persist($savRequete);
            $entityManager->flush();
            // Redirection vers la page d'index après une insertion réussie
            return $this->redirectToRoute('savreq_app_sav_requete_index', [], Response::HTTP_SEE_OTHER);
        }

        // Rendre le formulaire
        return $this->render('sav_requete/new.html.twig', [
            'form' => $formSavReq->createView(),
        ]);
    }

    #[Route('/fiche/list', name: 'fiche_list')]
    public function list(
        Request $request,
        FicheRepository $ficheRepository,
        EntityManagerInterface $entityManager,
        AuthorizationCheckerInterface $authChecker,
        LivreRepository $livreRepository
    ) {
        $session = $request->getSession();
        $session->set('previous_url', $request->getUri());
        $user = $this->getUser();
        $livreID = $request->query->get('livre') == null ? $session->get('livreIdSelectionne') : $request->query->get('livre');
        $isAdmin = $authChecker->isGranted('ROLE_ADMIN');

        $livres = $livreRepository->findAll();



        if ($isAdmin) {
            if ($livreID != 0) {
                $fiches = $ficheRepository->findBy(['livre' => $livreID]);
            } else
                $fiches = $ficheRepository->findAll();
        } else {
            $fiches = $ficheRepository->findBy(['livre' => $livreID]);
        }
        $user = $this->getUser();
        // Map entities to DTOs
        $ficheDTOs = array_map(function ($fiche) use ($isAdmin, $user) {
            $hasAccess = $isAdmin || $fiche->getLivre()->getLivreAuths()->exists(fn($key, $auth) => $auth->getUser() == $user);
            // dd($fiche->getDenomination(), $fiche->getIdFiche());
            return new FicheDTO(
                $fiche->getIdFiche(),
                $fiche->getRefer(),
                $fiche->getLivre()->getNom(),
                $fiche->getDenomination() ?? '',
                $fiche->getStatut()->getDenomination(),
                $fiche->isVisible(),
                $hasAccess,
                '',
                '',
                '',
                '',
                '',
                '',

            );
        }, $fiches);
        return $this->render('fiche/liste_fiches.html.twig', [
            'fiches' => json_encode($ficheDTOs),
            'isAdmin' => $isAdmin,
            'selectedLivre' => $livreID,
            'livres' => $livres,
        ]);
    }

    #[Route('/fiche/user/list/{userId}', name: 'user_auth_fiche_list')]
    public function listUserAuithFiche(
        int $userId,  // Accept userId as a parameter
        Request $request,
        FicheRepository $ficheRepository,
        AuthorizationCheckerInterface $authChecker,
        EntityManagerInterface $entityManager,
        LivreRepository $livreRepository,
        UserRepository $userRepository // Inject UserRepository to fetch the user
    ) {
        $session = $request->getSession();
        $session->set('previous_url', $request->getUri());
        $canEdit = false;

        // Fetch the user by ID instead of using getUser()
        $user = $userRepository->find($userId);
        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }
        $userRoles = $user->getRoles();
        $isAdmin = false;
        if (in_array('ROLE_ADMIN', $userRoles, true)) {
            // User is an admin
            $isAdmin = true;
        }
        $livres = [];

        $livreID = 0;
        // $livreID = $request->query->get('livre') == null ? $session->get('livreIdSelectionne'): $request->query->get('livre');
        // if the user filtred the book

        // dd($isAdmin);
        // dd($livreID);
        $hasFiltered = false;
        if ($isAdmin) {
            $livres = $livreRepository->findBy([], ['nom' => 'ASC']);
            if ($request->query->get('livre') != null) {
                // dd("dddd");
                $hasFiltered = true;
                $livreID = $request->query->get('livre');
            } else
                $livreID = $livres[0]->getIdLivre();
        } else {
            $query = $entityManager->createQuery(
                'SELECT l 
                FROM App\Entity\Livre l
                JOIN l.livreAuths la
                WHERE la.user = :user
                ORDER BY l.nom'
            )->setParameter('user', $user);

            $livres = $query->getResult();
            //check if user has authorized books
            if (!empty($livres)) {
                if ($request->query->get('livre') != null) {
                    $hasFiltered = true;
                    $livreID = $request->query->get('livre');
                } else
                    $livreID = $livres[0]->getIdLivre();
                $canEdit = true;
            } else {
                $canEdit = false;
            }
        }

        if ($isAdmin && !$hasFiltered) {
            $fiches = $ficheRepository->findAll();
        } elseif ($canEdit) {
            $fiches = $ficheRepository->findBy(['livre' => $livreID]);
        } else {
            $fiches = $ficheRepository->findBy(['livre' => $livreID]);
        }



        // Map entities to DTOs
        $ficheDTOs = array_map(function ($fiche) use ($isAdmin, $user) {
            $hasAccess = $isAdmin || $fiche->getLivre()->getLivreAuths()->exists(fn($key, $auth) => $auth->getUser() == $user);

            return new FicheDTO(
                $fiche->getIdFiche(),
                $fiche->getRefer(),
                $fiche->getLivre()->getNom(),
                $fiche->getDenomination() ?? '',
                $fiche->getStatut()->getDenomination(),
                $fiche->isVisible(),
                $hasAccess,
                '',
                '',
                '',
                '',
                '',
                ''

            );
        }, $fiches);
        $fichesCount = count($fiches);
        return $this->render('fiche/user_authorized_fiche.html.twig', [
            'userId' => $user->getId(),
            'canEdit' => $canEdit,
            'fiches' => json_encode($ficheDTOs),
            'isAdmin' => $isAdmin,
            'selectedLivre' => $livreID,
            'livres' => $livres,
        ]);
    }
    /**
     * @param FicheRepository $ficheRepository
     * @param AuthorizationCheckerInterface $authChecker
     * @return Response
     * Permet d'afficher les fiches en doubles
     */
    #[Route('/fiche/list/double', name: 'fiche_list_double')]
    public function listDouble(FicheRepository $ficheRepository, AuthorizationCheckerInterface $authChecker): Response
    {
        $fiches = [];

        // Vérifier le rôle de l'utilisateur
        if ($authChecker->isGranted('ROLE_ADMIN')) {
            // Si c'est un administrateur, récupérer toutes les fiches
            $fiches = $ficheRepository->findAll();
        } else {
            // Si c'est un utilisateur normal, récupérer seulement les fiches visibles
            $fiches = $ficheRepository->findBy(['visible' => true]);
        }

        return $this->render('fiche/Fiche_doublons.html.twig', [
            'fiches' => $fiches,
        ]);
    }

    //Fonction permettant la visualisation des fiches non visibles
    #[Route('/fiche/list/non_visible', name: 'fiche_list_cachee')]
    public function listCachee(FicheRepository $ficheRepository, AuthorizationCheckerInterface $authChecker): Response
    {
        $fiches = [];

        // Vérifier le rôle de l'utilisateur
        if ($authChecker->isGranted('ROLE_ADMIN')) {
            // Si c'est un administrateur, récupérer toutes les fiches non-visibles
            $fiches = $ficheRepository->findBy(['visible' => false]);
        }

        return $this->render('fiche/Fiche_cachee.html.twig', [
            'fiches' => $fiches,
        ]);
    }

    #[Route('/fiche/supprimer/{id}', name: 'delete_fiche')]
    public function deleteFiche(
        #[MapEntity(id: 'id')] Fiche $fiche = null,
        ManagerRegistry $doctrine,
        Request $request,
        EntityManagerInterface $entityManager,
        AuthorizationCheckerInterface $authChecker,
        Security $security,
        FicheRepository $ficheRepository
    ): RedirectResponse {
        // Vérification si la fiche existe
        if ($fiche) {
            // Récupérer l'utilisateur actuellement connecté
            $user = $security->getUser();
            $livreId = $fiche->getLivre();

            $livreAssocie = $doctrine->getRepository(Livre::class)->find($livreId);
            // Vérification si l'utilisateur est le créateur de la fiche ou s'il est administrateur
            if ($user === $fiche->getUser() || $authChecker->isGranted('ROLE_ADMIN')) {
                // Si c'est l'utilisateur qui a ajouté la fiche ou s'il est administrateur, procéder à la suppression ou au masquage de la fiche
                if ($authChecker->isGranted('ROLE_ADMIN')) {
                    $historique = new Historique();
                    $historique->setFicheID($fiche->getIdFiche());
                    $historique->setUser($user);
                    $historique->setTypeModif('Suppression');
                    $historique->setData($fiche);
                    //Enregistrer la date et l'heure actuelle
                    $dateActuelle = new DateTime();
                    $heureActuelle = $dateActuelle->format('H:i:s');
                    $historique->setCreateDate($dateActuelle);
                    $heureObj = DateTime::createFromFormat('H:i:s', $heureActuelle);
                    $historique->setHeure($heureObj);
                    $entityManager->persist($historique);

                    // Now remove the fiche record
                    $entityManager->remove($fiche);
                } else {
                    // Si c'est l'utilisateur qui a ajouté la fiche, masquer la fiche
                    $fiche->setVisible(false);
                    $entityManager->persist($fiche);
                    $historique = new Historique();

                    $historique->setFicheID($fiche->getIdFiche());
                    $historique->setUser($user);
                    $historique->setTypeModif('Masquage');
                    $historique->setData($fiche);
                    //Enregistrer la date et l'heure actuelle
                    $dateActuelle = new DateTime();
                    $heureActuelle = $dateActuelle->format('H:i:s');
                    $historique->setCreateDate($dateActuelle);
                    $heureObj = DateTime::createFromFormat('H:i:s', $heureActuelle);
                    $historique->setHeure($heureObj);
                    $entityManager->persist($historique);
                }

                $entityManager->flush();
                $entityManager->flush();

                $this->addFlash('success', "La fiche a été supprimée ou masquée avec succès");

                $ficheRepository->resetAutoIncrement();

            } else {
                // Si l'utilisateur n'est pas autorisé à supprimer ou masquer la fiche, lancer une exception d'accès refusé
                $this->addFlash('error', "vous avez pas le droit de supprimer cette fiche");
            }
        } else {
            $this->addFlash('error', "La fiche n'existe pas");
        }
        //return $this->redirectToRoute('fiche_recherche_resultat', ['livreId' => $livreAssocie->getIdLivre()]);
        // return $this->redirectToRoute('fiche_list', ['livre' => $livreAssocie]);
        return $this->redirect($request->headers->get('referer'));

    }

    #[Route('/fiche/total/savReq/{id<\d+>}', name: 'detail_fiche_total_sav_req')]
    public function detailFicheTotalSavReq(
        AuthorizationCheckerInterface $authChecker
        ,
        Request $request,
        $id
    ): Response {

        $currentFiche = null;
        $currentIndex = -1;
        $session = $request->getSession();
        // Retrieve search results and livre ID from session
        $fiches = $session->get('SavSearchResults', []);
        $currentFiche = null;
        $currentIndex = -1;
        $total = $request->query->get('total');
        foreach ($fiches as $index => $fiche) {
            if ($fiche->getIdFiche() == $id) {
                $currentFiche = $fiche;
                $currentIndex = $index;
                break;
            }
        }
        // dd($fiches);

        // If the fiche is not found, redirect with an error message
        if (!$currentFiche) {
            $this->addFlash('error', "La fiche n'existe pas");
            return $this->redirectToRoute('fiche_list');
        }

        // Get the previous and next fiches from the search results
        $previousFiche = $currentIndex > 0 ? $fiches[$currentIndex - 1] : null;
        $nextFiche = $currentIndex < count($fiches) - 1 ? $fiches[$currentIndex + 1] : null;
        if (!$currentFiche) {
            $this->addFlash('error', "La fiche n'existe pas");
            return $this->redirectToRoute('fiche_list');
        }

        $index = $request->query->get('index', $currentIndex + 1);
        $total = $request->query->get('total');
        $reqId = $id;
        // dd($request);
        $isAdmin = $authChecker->isGranted('ROLE_ADMIN');
        return $this->render('fiche/detail_fiche_total_sav_req.html.twig', [
            'fiche' => $currentFiche,
            'previous_fiche' => $previousFiche,
            'next_fiche' => $nextFiche,
            'index' => $index,
            'reqId' => $reqId,
            'isAdmin' => $isAdmin,
            'total' => $total,
        ]);

    }

    #[Route('/fiche/total/rech/{id<\d+>}', name: 'detail_fiche_total_rech')]
    public function detailFicheTotalRech(
        ManagerRegistry $doctrine,
        FicheRepository $ficheRepository,
        EntityManagerInterface $entityManager
        ,
        Request $request,
        $id
    ): Response {
        $session = $request->getSession();
        $session->set('previous_url', $request->getUri());
        $donnéesRech = $session->get('searchCriteria', []);
        $fiches = $session->get('searchResults', []);
        $currentFiche = null;
        $currentIndex = -1;
        $total = $request->query->get('total');
        foreach ($fiches as $index => $fiche) {
            if ($fiche->getIdFiche() == $id) {
                $currentFiche = $fiche;
                $currentIndex = $index;
                break;
            }
        }

        // If the fiche is not found, redirect with an error message
        if (!$currentFiche) {
            $this->addFlash('error', "La fiche n'existe pas");
            return $this->redirectToRoute('fiche_list');
        }

        // Get the previous and next fiches from the search results
        $previousFiche = $currentIndex > 0 ? $fiches[$currentIndex - 1] : null;
        $nextFiche = $currentIndex < count($fiches) - 1 ? $fiches[$currentIndex + 1] : null;


        $index = $request->query->get('index', $currentIndex + 1);

        return $this->render('fiche/detail_fiche_total_rech.html.twig', [
            'fiche' => $currentFiche,
            'previous_fiche' => $previousFiche,
            'next_fiche' => $nextFiche,
            'index' => $index,
            'total' => $total,
        ]);
    }

    #[Route('/fiche/total/{id<\d+>}', name: 'detail_fiche_total')]
    public function detailFicheTotal(
        ManagerRegistry $doctrine,
        FicheRepository $ficheRepository,
        EntityManagerInterface $entityManager
        ,
        Request $request,
        $id
    ): Response {
        $session = $request->getSession();
        $session->set('previous_url', $request->getUri());
        $donnéesRech = $session->get('searchCriteria', []);
        $fiches = $session->get('searchResults', []);


        $livreId = $session->get('livreIdSelectionne');
        // Retrieve the book object
        // $livreAssocie = $entityManager->getRepository(Livre::class)->find($livreId);
        $currentFiche = null;
        $currentIndex = -1;
        $total = $request->query->get('total');
        // dd($total); 
        //si on a pas rechercher
        if ($total != 0) {
            $repository = $doctrine->getRepository(Fiche::class);
            $currentFiche = $ficheRepository->find($id);
            // $fiches =  $doctrine->getRepository(Fiche::class)->findAll();
            $previousFiche = $repository->createQueryBuilder('f')
                ->andWhere('f.id < :id')
                ->orderBy('f.id', 'DESC')
                ->setMaxResults(1)
                ->setParameter('id', $id)
                ->getQuery()
                ->getOneOrNullResult();

            // Récupérer la fiche suivante
            $nextFiche = $repository->createQueryBuilder('f')
                ->andWhere('f.id > :id')
                ->orderBy('f.id', 'ASC')
                ->setMaxResults(1)
                ->setParameter('id', $id)
                ->getQuery()
                ->getOneOrNullResult();
            if (!$currentFiche) {
                $this->addFlash('error', "La fiche n'existe pas");
                return $this->redirectToRoute('fiche_list');
            }

            $index = $request->query->get('index', $currentIndex + 1);

            return $this->render('fiche/detail_fiche_total.html.twig', [
                'fiche' => $currentFiche,
                'previous_fiche' => $previousFiche,
                'next_fiche' => $nextFiche,
                'index' => $index,
                'total' => $total,
            ]);
        }

        return $this->redirectToRoute('app_home');
    }

    #[Route('/fiche/{id<\d+>}', name: 'detail_fiche')]
    public function detailFiche(ManagerRegistry $doctrine, Request $request, $id, SessionInterface $session, PaginatorInterface $paginator): Response
    {
        $liste = $request->query->get('liste', null);

        $repository = $doctrine->getRepository(Fiche::class);
        $fiche = $repository->find($id);

        if (!$fiche) {
            $this->addFlash('error', "La fiche n'existe pas");
            return $this->redirectToRoute('fiche_list');
        }
        $fiches = $session->get('fiches');
        //  dd($fiches);
        $pagination = $paginator->paginate(
            $fiches,
            $request->query->getInt('page', 1), // Numéro de page
            1 // Une fiche par page

        );

        return $this->render('fiche/detail_fiche.html.twig', [
            'fiche' => $fiche,
            'pagination' => $pagination,
        ]);
    }

    #[Route('/fiche/total/rech/{id}/edit', name: 'app_fiche_edit_total_rech', methods: ['GET', 'POST'])]
    public function editTotalRech(
        SessionInterface $session,
        PaginatorInterface $paginator,
        FicheMotCleRepository $ficheMotCleRepository,
        Request $request,
        #[MapEntity(id: 'id')] Fiche $fiche,
        EntityManagerInterface $entityManager,
        ManagerRegistry $doctrine,
        $id,
        Security $security
    ): Response {
        $historique = new Historique();
        $user = $security->getUser();
        if ($user) {
            // Associer l'utilisateur à la fiche
            $fiche->setUser($user);
        }

        // dd($request);
        $repository = $doctrine->getRepository(Fiche::class);
        $fiche = $repository->find($id);

        //Cloner l'ancienne fiche pour l'historique
        $ancienneFiche = clone $fiche;
        foreach ($fiche->getMotCles() as $motCle) {
            $ancienneFiche->addMotCle($motCle); // Optionnel : garder les relations ou les recréer
        }

        $historique->setOldData($ancienneFiche);

        $anciensFicheMotCle = $fiche->getFicheMotCles();
        $livreName = $fiche->getLivre();

        $livreAssocie = $doctrine->getRepository(Livre::class)->find($livreName);
        $form = $this->createForm(FicheTypeEdit::class, $fiche, [
            'livreAssocie' => $livreAssocie,

        ]);
        $form->remove('livre');
        $form->remove('refer_bis');
        $form->remove('num_fiche');
        $form->handleRequest($request);
        $fiches = $session->get('fiches');
        if ($form->isSubmitted() && $form->isValid()) {
            // Retrieve the new "FicheMotCle" data from the form

            // $entityManager->flush();
            $nouvellesFicheMotCle = $form->get('ficheMotCles')->getData();
            if (!empty($nouvellesFicheMotCle)) {
                $references = array_map(fn($ficheMotCle) => $ficheMotCle->getMotCle()->getReference(), $nouvellesFicheMotCle->toArray());

                if (count($references) !== count(array_unique($references))) {
                    $this->addFlash('error', 'Deux mots clés ne peuvent pas avoir la même référence.');
                    return $this->redirectToRoute('app_fiche_edit', ['id' => $fiche->getIdFiche()]);
                }

            }
            $entityManager->persist($fiche);
            // Create Historique entry
            $historique->setFicheID($fiche->getIdFiche());
            $historique->setUser($user);
            $historique->setTypeModif('Modification');
            $historique->setData($fiche);
            $dateActuelle = new DateTime();
            $historique->setCreateDate($dateActuelle);
            $historique->setHeure($dateActuelle);
            // dd($historique);
            $entityManager->persist($historique);
            $entityManager->flush();

            $previousFicheId = $request->query->get('previousFicheId');

            $nextFicheId = $request->query->get('nextFicheId');
            $index = $request->query->get('index');
            $total = $request->query->get('total');
            $previousFiche = $previousFicheId ? $repository->find($previousFicheId) : null;
            $nextFiche = $nextFicheId ? $repository->find($nextFicheId) : null;

            return $this->render('fiche/detail_fiche_total_rech.html.twig', [
                'fiche' => $fiche,
                'previous_fiche' => $previousFiche,
                'next_fiche' => $nextFiche,
                'index' => $index,
                'total' => $total,
            ]);
        }


        return $this->render('fiche/edit.html.twig', [
            // 'fiche' => $fiche,
            'form' => $form->createView(),
            // 'pagination' => $pagination,

        ]);
    }

    #[Route('/fiche/total/savReq/{id}/edit', name: 'app_fiche_edit_total_sav_req', methods: ['GET', 'POST'])]
    public function editTotalSavReq(
        SessionInterface $session,
        PaginatorInterface $paginator,
        FicheMotCleRepository $ficheMotCleRepository,
        Request $request,
        #[MapEntity(id: 'id')] Fiche $fiche,
        EntityManagerInterface $entityManager,
        ManagerRegistry $doctrine,
        $id,
        Security $security
    ): Response {
        $historique = new Historique();
        $user = $security->getUser();
        if ($user) {
            // Associer l'utilisateur à la fiche
            $fiche->setUser($user);
        }

        $repository = $doctrine->getRepository(Fiche::class);
        $fiche = $repository->find($id);

        //Cloner l'ancienne fiche pour l'historique
        $ancienneFiche = clone $fiche;
        foreach ($fiche->getMotCles() as $motCle) {
            $ancienneFiche->addMotCle($motCle); // Optionnel : garder les relations ou les recréer
        }
        $historique->setOldData($ancienneFiche);

        $anciensFicheMotCle = $fiche->getFicheMotCles();
        $livreName = $fiche->getLivre();
        $livreAssocie = $doctrine->getRepository(Livre::class)->find($livreName);
        $form = $this->createForm(FicheTypeEdit::class, $fiche, [
            'livreAssocie' => $livreAssocie,

        ]);
        $form->remove('livre');
        $form->remove('refer_bis');
        $form->remove('num_fiche');
        $form->handleRequest($request);
        $fiches = $session->get('fiches');
        if ($form->isSubmitted() && $form->isValid()) {
            // Retrieve the new "FicheMotCle" data from the form
            if (!empty($nouvellesFicheMotCle)) {
                $references = array_map(fn($ficheMotCle) => $ficheMotCle->getMotCle()->getReference(), $nouvellesFicheMotCle->toArray());

                if (count($references) !== count(array_unique($references))) {
                    $this->addFlash('error', 'Deux mots clés ne peuvent pas avoir la même référence.');
                    return $this->redirectToRoute('app_fiche_edit', ['id' => $fiche->getIdFiche()]);
                }

            }
            $entityManager->persist($fiche);

            // Create Historique entry
            $historique->setFicheID($fiche->getIdFiche());
            $historique->setUser($user);
            $historique->setTypeModif('Modification');
            $historique->setData($fiche);
            $dateActuelle = new DateTime();
            $historique->setCreateDate($dateActuelle);
            $historique->setHeure($dateActuelle);

            $entityManager->persist($historique);
            $entityManager->flush();

            $previousFicheId = $request->query->get('previousFicheId');

            $nextFicheId = $request->query->get('nextFicheId');
            $index = $request->query->get('index');
            $reqId = $request->query->get('reqId');
            $total = $request->query->get('total');
            $previousFiche = $previousFicheId ? $repository->find($previousFicheId) : null;
            $nextFiche = $nextFicheId ? $repository->find($nextFicheId) : null;

            return $this->render('fiche/detail_fiche_total_sav_req.html.twig', [
                'fiche' => $fiche,
                'previous_fiche' => $previousFiche,
                'next_fiche' => $nextFiche,
                'index' => $index,
                'reqId' => $reqId,
                'total' => $total,
            ]);
        }


        return $this->render('fiche/edit.html.twig', [
            // 'fiche' => $fiche,
            'form' => $form->createView(),
            // 'pagination' => $pagination,

        ]);
    }
    /*Edit pour la recherche  multicriteres*/
    #[Route('/fiche/recherche-multi/{id}/edit', name: 'app_fiche_rech_savReqCombin_edit', methods: ['GET', 'POST'])]
    public function editFicheRechSavReqCombin(SessionInterface $session, PaginatorInterface $paginator, FicheMotCleRepository $ficheMotCleRepository, Request $request, #[MapEntity(id: 'id')] Fiche $fiche, EntityManagerInterface $entityManager, ManagerRegistry $doctrine, $id, Security $security): Response
    {
        $historique = new Historique();
        $user = $security->getUser();
        if ($user) {
            // Associer l'utilisateur à la fiche
            $fiche->setUser($user);
        }

        $livreId = $request->getSession()->get('livreIdSelectionne');
        $repository = $doctrine->getRepository(Fiche::class);
        $fiche = $repository->find($id);
        // dd($fiche->getMotCles());
        // dd($fiche->getFicheMotCles());
        //Cloner l'ancienne fiche pour l'historique
        $ancienneFiche = clone $fiche;
        foreach ($fiche->getMotCles() as $motCle) {
            $ancienneFiche->addMotCle($motCle); // Optionnel : garder les relations ou les recréer
        }
        $historique->setOldData($ancienneFiche);

        // $anciensFicheMotCle = $fiche->getFicheMotCles();
        $livreName = $fiche->getLivre();
        $livreAssocie = $doctrine->getRepository(Livre::class)->find($livreName);
        $form = $this->createForm(FicheTypeEdit::class, $fiche, [
            'livreAssocie' => $livreAssocie,


        ]);
        $form->remove('livre');
        $form->remove('refer_bis');
        $form->remove('num_fiche');
        $form->handleRequest($request);
        // dd($request);
        $fiches = $session->get('fiches');
        if ($form->isSubmitted() && $form->isValid()) {
            // Retrieve the new "FicheMotCle" data from the form

            $nouvellesFicheMotCle = $form->get('ficheMotCles')->getData();
            if (!empty($nouvellesFicheMotCle)) {
                $references = array_map(fn($ficheMotCle) => $ficheMotCle->getMotCle()->getReference(), $nouvellesFicheMotCle->toArray());

                if (count($references) !== count(array_unique($references))) {
                    $this->addFlash('error', 'Deux mots clés ne peuvent pas avoir la même référence.');
                    return $this->redirectToRoute('app_fiche_edit', ['id' => $fiche->getIdFiche()]);
                }

            }
            $entityManager->persist($fiche); // Persist the parent entity if needed
            // $entityManager->flush();

            // Create Historique entry
            $historique->setFicheID($fiche->getIdFiche());
            $historique->setUser($user);
            $historique->setTypeModif('Modification');
            $historique->setData($fiche);
            $dateActuelle = new DateTime();
            $historique->setCreateDate($dateActuelle);
            $historique->setHeure($dateActuelle);
            $entityManager->persist($historique);
            $entityManager->flush();
            $session->set('savreq_form_data', $request->request->all());
            // Redirect after successful edit
            return $this->redirectToRoute('savreq_app_recherche_results', [], Response::HTTP_SEE_OTHER);

        }

        return $this->render('fiche/edit.html.twig', [
            // 'fiche' => $fiche,
            'form' => $form->createView(),
            // 'pagination' => $pagination,

        ]);
    }
    //*Pour le edit lors de l'execution d'une requete enregistree*/
    #[Route('/fiche/requete/{id}/{reqId}/edit', name: 'app_fiche_requete_edit', methods: ['GET', 'POST'])]
    public function editFicheRechSavReq(
        SessionInterface $session,
        Request $request,
        #[MapEntity(id: 'id')] Fiche $fiche,
        EntityManagerInterface $entityManager,
        ManagerRegistry $doctrine,
        $id,
        $reqId,
        Security $security
    ): Response {
        $historique = new Historique();
        $user = $security->getUser();
        if ($user) {
            // Associer l'utilisateur à la fiche
            $fiche->setUser($user);
        }

        $livreId = $request->getSession()->get('livreIdSelectionne');
        $repository = $doctrine->getRepository(Fiche::class);
        $fiche = $repository->find($id);
        // dd($fiche->getMotCles());
        // dd($fiche->getFicheMotCles());
        //Cloner l'ancienne fiche pour l'historique
        $ancienneFiche = clone $fiche;
        foreach ($fiche->getMotCles() as $motCle) {
            $ancienneFiche->addMotCle($motCle); // Optionnel : garder les relations ou les recréer
        }
        $historique->setOldData($ancienneFiche);

        // $anciensFicheMotCle = $fiche->getFicheMotCles();
        $livreName = $fiche->getLivre();
        $livreAssocie = $doctrine->getRepository(Livre::class)->find($livreName);
        $form = $this->createForm(FicheTypeEdit::class, $fiche, [
            'livreAssocie' => $livreAssocie,


        ]);
        $form->remove('livre');
        $form->remove('refer_bis');
        $form->remove('num_fiche');
        $form->handleRequest($request);
        // dd($request);
        $fiches = $session->get('fiches');
        if ($form->isSubmitted() && $form->isValid()) {
            // Retrieve the new "FicheMotCle" data from the form

            $nouvellesFicheMotCle = $form->get('ficheMotCles')->getData();
            if (!empty($nouvellesFicheMotCle)) {
                $references = array_map(fn($ficheMotCle) => $ficheMotCle->getMotCle()->getReference(), $nouvellesFicheMotCle->toArray());

                if (count($references) !== count(array_unique($references))) {
                    $this->addFlash('error', 'Deux mots clés ne peuvent pas avoir la même référence.');
                    return $this->redirectToRoute('app_fiche_edit', ['id' => $fiche->getIdFiche()]);
                }

            }
            $entityManager->persist($fiche); // Persist the parent entity if needed
            // $entityManager->flush();

            // Create Historique entry
            $historique->setFicheID($fiche->getIdFiche());
            $historique->setUser($user);
            $historique->setTypeModif('Modification');
            $historique->setData($fiche);
            $dateActuelle = new DateTime();
            $historique->setCreateDate($dateActuelle);
            $historique->setHeure($dateActuelle);
            $entityManager->persist($historique);
            $entityManager->flush();

            // Redirect after successful edit
            return $this->redirectToRoute('savreq_app_sav_requete_show', ['id' => $reqId], Response::HTTP_SEE_OTHER);
        }
        return $this->render('fiche/edit.html.twig', [
            // 'fiche' => $fiche,
            'form' => $form->createView(),
            // 'pagination' => $pagination,

        ]);
    }
    /*Edit pour la recherche*/
    #[Route('/fiche/rech/{id}/edit', name: 'app_fiche_rech_edit', methods: ['GET', 'POST'])]
    public function editFicheRech(SessionInterface $session, PaginatorInterface $paginator, FicheMotCleRepository $ficheMotCleRepository, Request $request, #[MapEntity(id: 'id')] Fiche $fiche, EntityManagerInterface $entityManager, ManagerRegistry $doctrine, $id, Security $security): Response
    {
        $historique = new Historique();
        $user = $security->getUser();
        if ($user) {
            // Associer l'utilisateur à la fiche
            $fiche->setUser($user);
        }

        $livreId = $request->getSession()->get('livreIdSelectionne');
        $repository = $doctrine->getRepository(Fiche::class);
        $fiche = $repository->find($id);
        // dd($fiche->getMotCles());
        // dd($fiche->getFicheMotCles());
        //Cloner l'ancienne fiche pour l'historique
        $ancienneFiche = clone $fiche;
        foreach ($fiche->getMotCles() as $motCle) {
            $ancienneFiche->addMotCle($motCle); // Optionnel : garder les relations ou les recréer
        }
        $historique->setOldData($ancienneFiche);

        // $anciensFicheMotCle = $fiche->getFicheMotCles();
        $livreName = $fiche->getLivre();
        $livreAssocie = $doctrine->getRepository(Livre::class)->find($livreName);
        $form = $this->createForm(FicheTypeEdit::class, $fiche, [
            'livreAssocie' => $livreAssocie,


        ]);
        $form->remove('livre');
        $form->remove('refer_bis');
        $form->remove('num_fiche');
        $form->handleRequest($request);
        // dd($request);
        $fiches = $session->get('fiches');
        $donnéesRech = $session->get("searchCriteria");
        // dd($donnéesRech);
        if ($form->isSubmitted() && $form->isValid()) {
            // Retrieve the new "FicheMotCle" data from the form

            $nouvellesFicheMotCle = $form->get('ficheMotCles')->getData();
            if (!empty($nouvellesFicheMotCle)) {
                $references = array_map(fn($ficheMotCle) => $ficheMotCle->getMotCle()->getReference(), $nouvellesFicheMotCle->toArray());

                if (count($references) !== count(array_unique($references))) {
                    $this->addFlash('error', 'Deux mots clés ne peuvent pas avoir la même référence.');
                    return $this->redirectToRoute('app_fiche_edit', ['id' => $fiche->getIdFiche()]);
                }

            }
            $entityManager->persist($fiche); // Persist the parent entity if needed
            // $entityManager->flush();

            // Create Historique entry
            $historique->setFicheID($fiche->getIdFiche());
            $historique->setUser($user);
            $historique->setTypeModif('Modification');
            $historique->setData($fiche);
            $dateActuelle = new DateTime();
            $historique->setCreateDate($dateActuelle);
            $historique->setHeure($dateActuelle);
            $entityManager->persist($historique);
            $entityManager->flush();

            // Redirect after successful edit
            return $this->redirectToRoute('fiche_recherche_resultat', ['livreId' => $livreId]);
            // return $this->redirectToRoute('fiche_list', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('fiche/edit.html.twig', [
            // 'fiche' => $fiche,
            'form' => $form->createView(),
            // 'pagination' => $pagination,

        ]);
    }
    #[Route('/fiche/{id}/edit', name: 'app_fiche_edit', methods: ['GET', 'POST'])]
    public function edit(SessionInterface $session, PaginatorInterface $paginator, FicheMotCleRepository $ficheMotCleRepository, Request $request, #[MapEntity(id: 'id')] Fiche $fiche, EntityManagerInterface $entityManager, ManagerRegistry $doctrine, $id, Security $security): Response
    {
        $historique = new Historique();
        $user = $security->getUser();
        if ($user) {
            // Associer l'utilisateur à la fiche
            $fiche->setUser($user);
        }

        $livreId = $request->getSession()->get('livreIdSelectionne');
        $repository = $doctrine->getRepository(Fiche::class);
        $fiche = $repository->find($id);
        // dd($fiche->getMotCles());
        // dd($fiche->getFicheMotCles());
        //Cloner l'ancienne fiche pour l'historique
        $ancienneFiche = clone $fiche;
        foreach ($fiche->getMotCles() as $motCle) {
            $ancienneFiche->addMotCle($motCle); // Optionnel : garder les relations ou les recréer
        }
        $historique->setOldData($ancienneFiche);

        // $anciensFicheMotCle = $fiche->getFicheMotCles();
        $livreName = $fiche->getLivre();
        $livreAssocie = $doctrine->getRepository(Livre::class)->find($livreName);
        $form = $this->createForm(FicheTypeEdit::class, $fiche, [
            'livreAssocie' => $livreAssocie,


        ]);
        $form->remove('livre');
        $form->remove('refer_bis');
        $form->remove('num_fiche');
        $form->handleRequest($request);
        // dd($request);
        $fiches = $session->get('fiches');
        if ($form->isSubmitted() && $form->isValid()) {
            // Retrieve the new "FicheMotCle" data from the form

            $nouvellesFicheMotCle = $form->get('ficheMotCles')->getData();
            if (!empty($nouvellesFicheMotCle)) {
                $references = array_map(fn($ficheMotCle) => $ficheMotCle->getMotCle()->getReference(), $nouvellesFicheMotCle->toArray());

                if (count($references) !== count(array_unique($references))) {
                    $this->addFlash('error', 'Deux mots clés ne peuvent pas avoir la même référence.');
                    return $this->redirectToRoute('app_fiche_edit', ['id' => $fiche->getIdFiche()]);
                }

            }
            $entityManager->persist($fiche); // Persist the parent entity if needed
            // $entityManager->flush();

            // Create Historique entry
            $historique->setFicheID($fiche->getIdFiche());
            $historique->setUser($user);
            $historique->setTypeModif('Modification');
            $historique->setData($fiche);
            $dateActuelle = new DateTime();
            $historique->setCreateDate($dateActuelle);
            $historique->setHeure($dateActuelle);
            $entityManager->persist($historique);
            $entityManager->flush();

            // Redirect after successful edit
            // return $this->redirectToRoute('fiche_recherche_resultat', ['livreId' => $livreId]);
            return $this->redirectToRoute('fiche_list', [], Response::HTTP_SEE_OTHER);
        }


        return $this->render('fiche/edit.html.twig', [
            // 'fiche' => $fiche,
            'form' => $form->createView(),
            // 'pagination' => $pagination,

        ]);
    }

    #[Route('/fiche/total/{id}/edit', name: 'app_fiche_edit_total', methods: ['GET', 'POST'])]
    public function editFicheTotal(Request $request, FicheMotCleRepository $ficheMotCleRepository, #[MapEntity(id: 'id')] Fiche $fiche, EntityManagerInterface $entityManager, ManagerRegistry $doctrine, $id, Security $security): Response
    {
        $historique = new Historique();
        $user = $security->getUser();
        if ($user) {
            // Associer l'utilisateur à la fiche
            $fiche->setUser($user);
        }


        $repository = $doctrine->getRepository(Fiche::class);

        $fiche = $repository->find($id);

        //Cloner l'ancienne fiche pour l'historique
        $ancienneFiche = clone $fiche;
        foreach ($fiche->getMotCles() as $motCle) {
            $ancienneFiche->addMotCle($motCle); // Optionnel : garder les relations ou les recréer
        }
        $historique->setOldData($ancienneFiche);

        $livreName = $fiche->getLivre();

        $livreAssocie = $doctrine->getRepository(Livre::class)->find($livreName->getIdLivre());
        $form = $this->createForm(FicheTypeEdit::class, $fiche, [
            'livreAssocie' => $livreAssocie,
            // 'fiche' => $fiche

        ]);
        // $form = $this->createForm(FicheTypeEdit::class, [
        //     'livreAssocie' => $livreAssocie

        // ]);
        // dd($form);
        $form->remove('livre');
        $form->remove('refer_bis');
        $form->remove('num_fiche');
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $nouvellesFicheMotCle = $form->get('ficheMotCles')->getData();
            if (!empty($nouvellesFicheMotCle)) {
                $references = array_map(fn($ficheMotCle) => $ficheMotCle->getMotCle()->getReference(), $nouvellesFicheMotCle->toArray());

                if (count($references) !== count(array_unique($references))) {
                    $this->addFlash('error', 'Deux mots clés ne peuvent pas avoir la même référence.');
                    return $this->redirectToRoute('app_fiche_edit', ['id' => $fiche->getIdFiche()]);
                }

            }
            $entityManager->persist($fiche); // Persist the parent entity if needed
            // $entityManager->flush();

            // Create Historique entry
            $historique->setFicheID($fiche->getIdFiche());
            $historique->setUser($user);
            $historique->setTypeModif('Modification');
            $historique->setData($fiche);
            $dateActuelle = new DateTime();
            $historique->setCreateDate($dateActuelle);
            $historique->setHeure($dateActuelle);
            $entityManager->persist($historique);
            $entityManager->flush();
            // Récupérer la fiche précédente
            $previousFiche = $repository->createQueryBuilder('f')
                ->andWhere('f.id < :id')
                ->orderBy('f.id', 'DESC')
                ->setMaxResults(1)
                ->setParameter('id', $id)
                ->getQuery()
                ->getOneOrNullResult();

            // Récupérer la fiche suivante
            $nextFiche = $repository->createQueryBuilder('f')
                ->andWhere('f.id > :id')
                ->orderBy('f.id', 'ASC')
                ->setMaxResults(1)
                ->setParameter('id', $id)
                ->getQuery()
                ->getOneOrNullResult();

            $index = $request->query->get('index');
            // $reqId = $request->query->get('reqId');
            $total = $request->query->get('total');
            return $this->render('fiche/detail_fiche_total.html.twig', [
                'fiche' => $fiche,
                'previous_fiche' => $previousFiche,
                'next_fiche' => $nextFiche,
                'index' => $index,
                'total' => $total,
            ]);
            // return $this->redirectToRoute('fiche_list', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('fiche/edit.html.twig', [
            // 'fiche' => $fiche,
            'form' => $form->createView(),
            // 'pagination' => $pagination,

        ]);

    }


    /**
     * @param Fiche $fiche
     * @param EntityManagerInterface $entityManager
     * @param Security $security
     * @return RedirectResponse
     * Permet de dupliquer une fiche
     */
    #[Route('/fiche/{id}/duplicate', name: 'app_fiche_duplicate', methods: ['GET'])]
    public function duplicate(#[MapEntity(id: 'id')] Fiche $fiche, EntityManagerInterface $entityManager, Security $security): RedirectResponse
    {
        $user = $security->getUser();
        // Dupliquer la fiche
        $newFiche = clone $fiche;
        $historique = new Historique();

        // Persistez la nouvelle fiche
        $entityManager->persist($newFiche);
        $entityManager->flush();
        $historique->setFicheID($newFiche->getIdFiche());
        $historique->setUser($user);
        $historique->setTypeModif('Dupliquer');
        $historique->setData($fiche);
        //Enregistrer la date et l'heure actuelle
        $dateActuelle = new DateTime();
        $heureActuelle = $dateActuelle->format('H:i:s');
        $historique->setCreateDate($dateActuelle);
        $heureObj = DateTime::createFromFormat('H:i:s', $heureActuelle);
        $historique->setHeure($heureObj);
        $entityManager->persist($historique);
        $entityManager->flush();

        // Redirigez vers la nouvelle route affichant la fiche dupliquée
        return $this->redirectToRoute('app_fiche_edit', ['id' => $newFiche->getIdFiche()]);
    }

    /**
     * @param Fiche $fiche
     * @param EntityManagerInterface $entityManager
     * @param Security $security
     * @param ManagerRegistry $doctrine
     * @return RedirectResponse
     * Fonction permettant de cacher une fiche
     */
    #[Route('/fiche/{id}/hide', name: 'app_fiche_hide', methods: ['GET', 'POST'])]
    public function hide(#[MapEntity(id: 'id')] Fiche $fiche, EntityManagerInterface $entityManager, Security $security, ManagerRegistry $doctrine): RedirectResponse
    {
        $user = $security->getUser();
        $historique = new Historique();
        $fiche->setVisible(!$fiche->isVisible());

        $entityManager->flush();
        $entityManager = $doctrine->getManager();
        $entityManager->persist($fiche);
        $entityManager->flush();
        $historique->setFicheID($fiche->getIdFiche());
        $historique->setUser($user);
        $historique->setTypeModif('Masquage');
        $historique->setData($fiche);
        //Enregistrer la date et l'heure actuelle
        $dateActuelle = new DateTime();
        $heureActuelle = $dateActuelle->format('H:i:s');
        $historique->setCreateDate($dateActuelle);
        $heureObj = DateTime::createFromFormat('H:i:s', $heureActuelle);
        $historique->setHeure($heureObj);
        $entityManager->persist($historique);
        $entityManager->flush();
        return $this->redirectToRoute('fiche_list', [], Response::HTTP_SEE_OTHER);
    }
}