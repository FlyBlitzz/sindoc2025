<?php

namespace App\Controller;

use App\Entity\Historique;
use App\Entity\Livre;
use App\Entity\LivreAuth;
use DateTime;
use Doctrine\DBAL\Connection;
use App\Form\LivreType;
use App\Repository\LivreRepository;
use App\Repository\LivreAuthRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\Attribute\MapEntity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/livre', name: 'app_livre_')]
class LivreController extends AbstractController
{



    #[Route("/livre/toggle/{id}", name: "toggle_visibility", methods: ["POST"])]
    public function toggleVisibility(Livre $livre, EntityManagerInterface $em): Response
    {
        $livre->setVisible(!$livre->isVisible());
        $em->flush();

        return $this->redirectToRoute('app_livre_app_livre_index');
    }



    #[Route("/livre/{id}/auth", name: "app_livre_auth", methods: ["GET"])]
    public function authPage(Livre $livre, UserRepository $userRepository, LivreAuthRepository $livreAuthRepository): Response
    {
        $users = $userRepository->findAll();
        $auths = [];
        foreach ($users as $user) {
            $auths[$user->getId()] = $livreAuthRepository->findByUserAndLivre($user->getId(), $livre->getIdLivre());
        }
        return $this->render('livre/auth.html.twig', [
            'livre' => $livre,
            'users' => $users,
            'auths' => $auths
        ]);
    }

    #[Route('/livre/{id}/auth/save', name: 'app_livre_auth_save', methods: ['POST'])]
    public function saveAuth(
        Request $request,
        Livre $livre,
        UserRepository $userRepository,
        EntityManagerInterface $entityManager
    ): Response {
        $userIds = json_decode($request->request->get('users', '[]'), true);
        // dd($request);
        if (!is_array($userIds)) {
            throw new \InvalidArgumentException('Invalid users data');
        }

        foreach ($userIds as $userId) {
            $user = $userRepository->find($userId);

            if ($user) {
                $livreAuth = new LivreAuth();
                $livreAuth->setLivre($livre);
                $livreAuth->setUser($user);

                try {
                    $entityManager->persist($livreAuth);
                    $entityManager->flush();
                } catch (\Doctrine\DBAL\Exception\UniqueConstraintViolationException $e) {
                    $this->addFlash('error', 'Un utilisateur dispose déjà d\'une autorisation pour cet livre.');
                    return $this->redirectToRoute('app_livre_app_livre_auth', ['id' => $livre->getIdlivre()]);
                }
            }
        }

        return $this->redirectToRoute('app_livre_app_livre_auth', ['id' => $livre->getIdlivre()]);
    }

    #[Route('/livre/{id}/auth/remove/{userId}', name: 'app_livre_auth_remove', methods: ['GET'])]
    public function removeAuth(Livre $livre, int $userId, LivreAuthRepository $livreAuthRepository, EntityManagerInterface $entityManager): Response
    {

        $livreAuth = $livreAuthRepository->findByUserAndLivre($userId, $livre->getIdLivre());

        if ($livreAuth) {
            $user = $livreAuth->getUser();
            $query = $entityManager->createQuery(
                'DELETE FROM App\Entity\LivreAuth la WHERE la.user = :user AND la.livre = :livre'
            );
            $query->setParameter('user', $user);
            $query->setParameter('livre', $livre);
            $query->execute();
        }

        return $this->redirectToRoute('app_livre_app_livre_auth', ['id' => $livre->getIdLivre()]);
    }

    #[Route('/livres/authorized/user-livres', name: 'app_livre_authorized_livres', methods: ['GET'])]
    public function getAuthorizedLivres(EntityManagerInterface $entityManager, Security $security, Request $request): JsonResponse
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->json(['error' => 'User not authenticated'], 401);
        }
        $session = $request->getSession();
        // Fetch livres where the user has authorization
        $query = $entityManager->createQuery(
            'SELECT l 
             FROM App\Entity\Livre l
             JOIN l.livreAuths la
             WHERE la.user = :user
             ORDER BY l.nom'
        )->setParameter('user', $user);

        $livres = $query->getResult();
        if (empty($livres)) {
            return new JsonResponse(null);
        }
        $canEdit = !empty($livres);
        $session->set('canEdit', $canEdit);
        foreach ($livres as $livre) {
            $data[] = [
                'id' => $livre->getIdLivre(),
                'nom' => $livre->getNom(), // Adjust based on your entity field
            ];
        }

        return new JsonResponse($data);
    }
    #[Route('/livres/authorized/{id}', name: 'app_livre_authorized')]
    public function viewAuthorizedLivres(Connection $connection, int $id): Response
    {
        $userId = $id;

        if (!$userId) {
            throw $this->createAccessDeniedException('Vous devez être connecté pour voir cette page.');
        }

        // Get the IDs of the livres authorized for the user
        $livreIds = $connection->executeQuery(
            'SELECT livre_id FROM livre_auth WHERE user_id = :user_id',
            ['user_id' => $userId]
        )->fetchFirstColumn();

        // Fetch only the authorized and visible livres
        $authorizedLivres = empty($livreIds) ? [] : $connection->executeQuery(
            'SELECT id, nom FROM livre WHERE id IN (:livre_ids) AND visible = true',
            ['livre_ids' => $livreIds],
            ['livre_ids' => Connection::PARAM_INT_ARRAY]
        )->fetchAllAssociative();

        return $this->render('profileuser/authorizedlivre.html.twig', [
            'authorizedLivres' => $authorizedLivres,
        ]);
    }


    /**
     * @param LivreRepository $livreRepository
     * @param UserRepository $repository
     * @return Response
     * Permet d'afficher la liste des livres
     */
    #[Route('/', name: 'app_livre_index', methods: ['GET'])]
    public function index(LivreRepository $livreRepository, UserRepository $repository): Response
    {
        return $this->render('livre/index.html.twig', [
            'livres' => $livreRepository->findAll(),
            'users' => $repository->findAll(),
        ]);
    }

    /**
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @param Security $security
     * @return Response
     * Permet de créer un livre
     */
    #[Route('/new', name: 'app_livre_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, Security $security): Response
    {
        $livre = new Livre();
        $form = $this->createForm(LivreType::class, $livre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($livre);
            $entityManager->flush();

            // Créer et persister l'objet Historique
            $user = $security->getUser();
            $historique = new Historique();
            $historique->setLivreID($livre->getIdLivre());
            $historique->setUser($user);
            $historique->setTypeModif("Ajout");
            $historique->setData($livre);
            //Enregistrer la date et l'heure actuelle
            $dateActuelle = new DateTime();
            $heureActuelle = $dateActuelle->format('H:i:s');
            $historique->setCreateDate($dateActuelle);
            $heureObj = DateTime::createFromFormat('H:i:s', $heureActuelle);
            $historique->setHeure($heureObj);
            $entityManager->persist($historique);
            $entityManager->flush();

            return $this->redirectToRoute('app_livre_app_livre_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('livre/new.html.twig', [
            'livre' => $livre,
            'form' => $form,
        ]);
    }

    /**
     * @param Livre $livre
     * @return Response
     * Permet d'afficher les détails d'un livre
     */
    #[Route('/{id}', name: 'app_livre_show', methods: ['GET'])]
    public function show(#[MapEntity(id: 'id')] Livre $livre): Response
    {
        return $this->render('livre/show.html.twig', [
            'livre' => $livre,
        ]);
    }

    /**
     * @param Request $request
     * @param Livre $livre
     * @param EntityManagerInterface $entityManager
     * @param Security $security
     * @return Response
     * Permet de modifier un livre
     */
    #[Route('/{id}/edit', name: 'app_livre_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, #[MapEntity(id: 'id')] Livre $livre, EntityManagerInterface $entityManager, Security $security): Response
    {
        $historique = new Historique();
        $ancienLivre = clone $livre;
        $historique->setOldData($ancienLivre);
        $form = $this->createForm(LivreType::class, $livre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            // Create Historique entry
            $user = $security->getUser();
            $historique->setLivreID($livre->getIdLivre());
            $historique->setUser($user);
            $historique->setData($livre);
            $historique->setTypeModif('Modification');
            $dateActuelle = new DateTime();
            $historique->setCreateDate($dateActuelle);
            $historique->setHeure($dateActuelle);
            $entityManager->persist($historique);
            $entityManager->flush();

            return $this->redirectToRoute('app_livre_app_livre_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('livre/edit.html.twig', [
            'livre' => $livre,
            'form' => $form,
        ]);
    }

    /**
     * @param Request $request
     * @param Livre $livre
     * @param EntityManagerInterface $entityManager
     * @param Security $security
     * @return Response
     * Permet de supprimer un livre
     */
    #[Route('/{id}', name: 'app_livre_delete', methods: ['POST'])]
    public function delete(Request $request, #[MapEntity(id: 'id')] Livre $livre, EntityManagerInterface $entityManager, Security $security): Response
    {
        if (!$livre->getFiche()->isEmpty()) {

            $this->addFlash('error', 'Impossible de supprimer le livre car des fiches sont liées.');
            $fiches = $livre->getFiche();

            return $this->render('fiche/liste_fiches.html.twig', [
                'fiches' => $fiches,
            ]);
        }
        if ($this->isCsrfTokenValid('delete' . $livre->getIdLivre(), $request->request->get('_token'))) {
            // Create Historique entry
            $historique = new Historique();
            $user = $security->getUser();
            $historique->setLivreID($livre->getIdLivre());
            $historique->setUser($user);
            $historique->setData($livre);
            $historique->setTypeModif('Suppression');
            $dateActuelle = new DateTime();
            $historique->setCreateDate($dateActuelle);
            $historique->setHeure($dateActuelle);
            $entityManager->persist($historique);
            $entityManager->flush();

            $entityManager->remove($livre);
            $entityManager->flush();
            $this->addFlash('success', 'Le livre a été supprimé avec succès.');
        } else {
            $this->addFlash('error', 'Erreur lors de la suppression du livre. Veuillez réessayer.');
        }

        return $this->redirectToRoute('app_livre_app_livre_index');
    }
    #[Route('/{id}', name: 'app_livre_delete', methods: ['POST'])]
    public function invisible(Request $request, #[MapEntity(id: 'id')] Livre $livre, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();

        $livre->setVisible(false);
        $entityManager->flush();

        $this->addFlash('success', 'Le livre a été rendu invisible avec succès.');

        return $this->redirectToRoute('app_livre_app_livre_authorized', ['id' => $user->getId()], Response::HTTP_SEE_OTHER);
    }


    #[Route('/dropdown/get-livre', name: 'app_livre_get_livre_dropdown', methods: ['GET'])]
    public function getLivresDropdown(LivreRepository $livreRepository)
    {
        $livres = $livreRepository->findAllVisible();
        foreach ($livres as $livre) {
            $data[] = [
                'id' => $livre->getIdLivre(),
                'nom' => $livre->getNom(), // Adjust based on your entity field
            ];
        }

        return new JsonResponse($data);
    }
    // #[Route('/livres/authorized/user-livres', name: 'app_livre_authorized_livres', methods: ['GET'])]
    // public function getAuthorizedLivres(EntityManagerInterface $entityManager, Security $security): JsonResponse
    // {
    //     $user = $this->getUser();
    //     if (!$user) {
    //         return $this->json(['error' => 'User not authenticated'], 401);
    //     }

    //     // Fetch livres where the user has authorization
    //     $query = $entityManager->createQuery(
    //         'SELECT l 
    //          FROM App\Entity\Livre l
    //          JOIN l.livreAuths la
    //          WHERE la.user = :user'
    //     )->setParameter('user', $user);

    //     $livres = $query->getResult();
    //     dd($livres);
    //     return $this->json($livres, 200, [], ['groups' => 'livre:read']);
    // }

    #[Route('/session/set-livre', name: 'app_livre_set_livre_session', methods: ['POST'])]
    public function setLivreSession(Request $request, SessionInterface $session): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        // dd($data);

        if (!isset($data['livreId']) || empty($data['livreId'])) {
            return new JsonResponse(['success' => false, 'message' => 'Aucun livre sélectionné.'], Response::HTTP_BAD_REQUEST);
        }

        $session->set('livreIdSelectionne', $data['livreId']);
        $session->set('livreName', $data['livreNom']);
        // dd($session); 
        return new JsonResponse(['success' => true, 'message' => 'Livre sélectionné.']);
    }
    #[Route('/livre/{id}/edit', name: 'livre_app_livre_edit', methods: ['GET', 'POST'])]
    public function editAuth(Request $request, #[MapEntity(id: 'id')] Livre $livre, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(livreType::class, $livre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $user = $this->getUser();

            if (in_array('ROLE_ADMIN', $user->getRoles())) {

                return $this->redirectToRoute('livre_app_livre_livre', [], Response::HTTP_SEE_OTHER);
            } else {
                return $this->redirectToRoute('app_livre_app_livre_authorized', ['id' => $user->getId()], Response::HTTP_SEE_OTHER);
            }
        }

        return $this->render('livre/edit.html.twig', [
            'livre' => $livre,
            'form' => $form,
        ]);
    }
}