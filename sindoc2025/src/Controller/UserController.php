<?php

namespace App\Controller;


use App\Entity\User;
use App\Entity\Livre;
use App\Entity\IndexAuth;
use App\Entity\LivreAuth;
use App\Form\UserType;
use App\Form\ResetPassword;
use App\Form\SelectLivreType;
use App\Form\UserTypeEdit;
use App\Repository\UserRepository;
use App\Repository\LivreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bridge\Doctrine\Attribute\MapEntity;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\RequestStack;

class UserController extends AbstractController
{
    /**
     * @param UserRepository $repository
     * @param PaginatorInterface $paginator
     * @param Request $request
     * @return Response
     * Permet d'afficher la liste des utilisateurs
     */
    #[Route('/admin/user', name: 'app_admin_app_users_index', methods: ['GET'])]
    public function index(UserRepository $repository, PaginatorInterface $paginator, Request $request): Response
    {
        $users = $paginator->paginate(
            $repository->findAll(),
            $request->query->getInt('page', 1), /*page number*/
            4 /*limit per page*/
        );

        return $this->render('users/listUser.html.twig', [
            'users' => $repository->createQueryBuilder('u')
                ->leftJoin('u.fiches', 'f') // Assuming 'fiches' is the property in User entity
                ->addSelect('f') // Fetch fiches with users
                ->getQuery()
                ->getResult()
        ]);
    }

    /**
     * @param UserRepository $repository
     * @param PaginatorInterface $paginator
     * @param Request $request
     * @return Response
     * Permet de valider l'inscription d'un utilisateur
     */
    #[Route('/user/valider/inscription', name: 'app_admin_app_users_validerInsc', methods: ['GET'])]
    public function validerInscription(
        UserRepository $repository,
        PaginatorInterface $paginator,
        Request $request,
        Security $security
    ): Response {
        if (!$security->getUser()) {
            return $this->redirectToRoute('app_login');
        }
        $users = $paginator->paginate(
            $repository->findBy(['valide' => false]),
            $request->query->getInt('page', 1), /*page number*/
            4 /*limit per page*/
        );

        return $this->render('users/validerInsc.html.twig', [
            'users' => $repository->findBy(['valide' => false]),
        ]);
    }


    /**
     * @param Request $request
     * @param UserPasswordHasherInterface $userPasswordHasher
     * @param EntityManagerInterface $entityManager
     * @return Response
     * Permet de créer un utilisateur
     */
    #[Route('/user/new', name: 'app_admin_app_users_new', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        UserPasswordHasherInterface $userPasswordHasher,
        EntityManagerInterface $entityManager,
        Security $security
    ): Response {
        if (!$security->getUser()) {
            return $this->redirectToRoute('app_login');
        }
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setValide(false);
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('password')->getData()
                )
            );
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('app_admin_app_users_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('users/new.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    /**
     * @param User $user
     * @return Response
     * Permet de montrer les détails d'un utilisateur
     */
    #[Route('/user/{id}', name: 'app_admin_app_users_show', methods: ['GET'])]
    // #[IsGranted('ROLE_USER')]

    public function show(#[MapEntity(id: 'id')] int $id, ManagerRegistry $doctrine, Security $security): Response
    {
        if (!$security->getUser()) {
            return $this->redirectToRoute('app_login');
        }
        $loggedUser = $security->getUser();
        if ($this->isGranted('ROLE_ADMIN') || $loggedUser->getId() === $id) {
            return $this->render('profileuser/show.html.twig', [
                'user' => $loggedUser,
                'userId' => $loggedUser->getId()
            ]);
        }

        // Otherwise, deny access
        throw $this->createAccessDeniedException("Access denied.");
        // return $this->render('errors/access_denied.html.twig');
    }

    #[Route('/userss/{id}', name: 'app_admin_app_users_show_admin', methods: ['GET'])]
    public function showUsers(#[MapEntity(id: 'id')] User $user, Security $security): Response
    {
        if (!$security->getUser()) {
            return $this->redirectToRoute('app_login');
        }
        return $this->render('users/show.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/visiteur', name: 'visiteur_multi_requetes', methods: ['GET', 'POST'])]
    public function visiteurs(Request $request): Response
    {
        return $this->render('users/visiteur.html.twig', [

        ]);
    }


    /**
     * @param Request $request
     * @param User $user
     * @param UserPasswordHasherInterface $userPasswordHasher
     * @param EntityManagerInterface $entityManager
     * @return Response
     * Permet de modifier les informations d'un utilisateur
     */
    #[Route('/user/{id}/edit', name: 'app_admin_app_users_edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request,
        #[MapEntity(id: 'id')] User $user,
        UserPasswordHasherInterface $userPasswordHasher,
        EntityManagerInterface $entityManager,
        Security $security
    ): Response {
        if (!$security->getUser()) {
            return $this->redirectToRoute('app_login');
        }
        $form = $this->createForm(UserTypeEdit::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setRoles($form->get('roles')->getData());
            $entityManager->flush();
            $this->addFlash('success', 'Utilisateur mis a jour');
            return $this->redirectToRoute('app_admin_app_users_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('users/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    /**
     * @param Request $request
     * @param User $user
     * @param UserPasswordHasherInterface $userPasswordHasher
     * @param EntityManagerInterface $entityManager
     * @return Response
     * Permet de modifier le mot de passe d'un utilisateur
     */
    #[Route('/user/{id}/editUser', name: 'app_admin_app_users_edit_user_password', methods: ['GET', 'POST'])]
    public function editUserPassword(
        Request $request,
        #[MapEntity(id: 'id')] int $id,
        UserPasswordHasherInterface $userPasswordHasher,
        EntityManagerInterface $entityManager,
        TokenStorageInterface $tokenStorage,
        RequestStack $requestStack,
        Security $security
    ): Response {
        if (!$security->getUser()) {
            return $this->redirectToRoute('app_login');
        }
        // Otherwise, deny access
        // throw $this->createAccessDeniedException("Access denied.");
        $userEntity = $entityManager->getRepository(User::class)->find($id);
        if ($userEntity) {
            $form = $this->createForm(ResetPassword::class, $userEntity);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $userEntity->setPassword(
                    $userPasswordHasher->hashPassword(
                        $userEntity,
                        $form->get('password')->getData()
                    )
                );
                $entityManager->flush();
                $session = $request->getSession();
                $tokenStorage->setToken(null);

                // Invalidate session
                $session = $requestStack->getSession();
                $session->invalidate();
                // $session->getFlashBag()->add('success', "Mot de passe réinitialisé, veuillez vous connecter.");
                return $this->redirectToRoute('password_changed');
            }
            return $this->render('users/editPassword.html.twig', [
                'user' => $userEntity,
                'form' => $form,
            ]);
        } else
            $this->addFlash('danger', "Une erreur est survenue");


    }


    /**
     * @param Request $request
     * @param User $user
     * @param EntityManagerInterface $entityManager
     * @return Response
     * Permet de supprimer un utilisateur par un administrateur
     */
    #[Route('/user/{id}', name: 'app_admin_app_users_delete', methods: ['GET', 'POST'])]
    public function delete(
        Request $request,
        #[MapEntity(id: 'id')] User $user,
        EntityManagerInterface $entityManager,
        Security $security
    ): Response {
        if (!$security->getUser()) {
            return $this->redirectToRoute('app_login');
        }
        if ($this->isCsrfTokenValid('delete' . $user->getId(), $request->request->get('_token'))) {
            $entityManager->remove($user);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_admin_app_users_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @param User|null $user
     * @param EntityManagerInterface $entityManager
     * @param AuthorizationCheckerInterface $authChecker
     * @param TokenStorageInterface $tokenStorage
     * @return RedirectResponse
     * Permet de supprimer un utilisateur
     */
    #[Route('/user/desactiver/{id}', name: 'desactiver_user')]
    public function desactiverUser(
        #[MapEntity(id: 'id')] User $user = null,
        EntityManagerInterface $entityManager,
        AuthorizationCheckerInterface $authChecker,
        TokenStorageInterface $tokenStorage,
        Security $security
    ): RedirectResponse {
        if (!$security->getUser()) {
            return $this->redirectToRoute('app_login');
        }
        // Vérification si l'utilisateur existe
        if ($user) {
            // Vérifier les autorisations
            if ($authChecker->isGranted('ROLE_ADMIN')) {
                // Sinon, désactiver l'utilisateur
                $user->setActive(false);
                $entityManager->persist($user);
                $entityManager->flush();

                $this->addFlash('success', "L'utilisateur a été désactivé avec succès");
                $token = $tokenStorage->getToken();
                if ($token && $token->getUser() === $user) {
                    // Déconnecter automatiquement l'utilisateur
                    $tokenStorage->setToken(null);
                    $this->addFlash('success', "Vous avez été déconnecté car votre compte a été supperimé.");
                }
                return $this->redirectToRoute('app_logout');
            }
        } else {
            $this->addFlash('error', "L'utilisateur n'existe pas");
        }
        return $this->redirectToRoute('app_admin_app_users_index', [], Response::HTTP_SEE_OTHER);

    }

    #[Route('/desactiver/{id}', name: 'desactiver_simple_user')]
    public function desactiverSimpleUser(
        #[MapEntity(id: 'id')] User $user = null,
        EntityManagerInterface $entityManager,
        AuthorizationCheckerInterface $authChecker,
        TokenStorageInterface $tokenStorage,
        Security $security
    ): RedirectResponse {
        if (!$security->getUser()) {
            return $this->redirectToRoute('app_login');
        }
        // Vérification si l'utilisateur existe
        if ($user) {
            // Vérifier les autorisations
            if ($authChecker->isGranted('ROLE_USER')) {
                // Sinon, désactiver l'utilisateur
                $user->setActive(false);
                $entityManager->persist($user);
                $entityManager->flush();

                $this->addFlash('success', "L'utilisateur a été désactivé avec succès");
                $token = $tokenStorage->getToken();
                if ($token && $token->getUser() === $user) {
                    // Déconnecter automatiquement l'utilisateur
                    $tokenStorage->setToken(null);
                    $this->addFlash('success', "Vous avez été déconnecté car votre compte a été supperimé.");
                }
                return $this->redirectToRoute('app_logout');
            }
        } else {
            $this->addFlash('error', "L'utilisateur n'existe pas");
        }
        return $this->redirectToRoute('app_admin_app_users_index', [], Response::HTTP_SEE_OTHER);

    }

    #[Route('/user/supprimer/{id}', name: 'delete_user')]
    public function deleteUser(
        #[MapEntity(id: 'id')] User $user = null,
        EntityManagerInterface $entityManager,
        AuthorizationCheckerInterface $authChecker,
        TokenStorageInterface $tokenStorage,
        Security $security
    ): RedirectResponse {
        if (!$security->getUser()) {
            return $this->redirectToRoute('app_login');
        }
        // Vérification si l'utilisateur existe
        if ($user) {
            // Vérifier les autorisations
            if ($authChecker->isGranted('ROLE_ADMIN')) {
                // Find and delete related records in index_auth
                $indexAuthRepo = $entityManager->getRepository(IndexAuth::class);
                $indexAuthRecords = $indexAuthRepo->findBy(['user' => $user]);

                foreach ($indexAuthRecords as $record) {
                    $entityManager->remove($record);
                }
                $entityManager->flush(); // Ensure related records are deleted first

                $livreAuthRepo = $entityManager->getRepository(LivreAuth::class);
                $livreAuthRecords = $livreAuthRepo->findBy(['user' => $user]);

                foreach ($livreAuthRecords as $record) {
                    $entityManager->remove($record);
                }
                $entityManager->flush();

                // Now, delete the user
                $entityManager->remove($user);
                $entityManager->flush();

                $this->addFlash('success', "L'utilisateur a été supprimé avec succès");
                return $this->redirectToRoute('admin_index');
            }

        } else {
            $this->addFlash('error', "L'utilisateur n'existe pas");
        }
        return $this->redirectToRoute('app_admin_app_users_index', [], Response::HTTP_SEE_OTHER);

    }


    /**
     * @param User|null $user
     * @param EntityManagerInterface $entityManager
     * @return RedirectResponse
     * Permet de désactiver le compte d'un utilisateur
     */
    #[Route('/user/deactiver/{id}', name: 'desactive_user')]
    public function disactiveUser(#[MapEntity(id: 'id')] User $user = null, EntityManagerInterface $entityManager): RedirectResponse
    {
        // Vérification si l'utilisateur existe
        if ($user) {
            // Inversion de l'état de l'activation de l'utilisateur
            $user->setActive(!$user->isActive());

            // Enregistrement des modifications dans la base de données
            $entityManager->persist($user);
            $entityManager->flush();

            // Message de confirmation
            $message = $user->isActive() ? "activé" : "désactivé";
            $this->addFlash('success', "L'utilisateur a été $message avec succès");
        } else {
            $this->addFlash('error', "L'utilisateur n'existe pas");
        }

        return $this->redirectToRoute('app_admin_app_users_index');
    }


    #[Route('/fiche/autorise', name: 'autorisation_livre', methods: ['GET', 'POST'])]
    public function newAutorisation(Request $request, LivreRepository $livreRepository, UserRepository $userRepository, Security $security): Response
    {
        $user = $this->getUser();

        // Récupérer la liste des livres depuis le repository
        $livres = $livreRepository->findAll();
        $users = $userRepository->findAll();

        // Créer le formulaire SelectLivreType en passant la liste des livres
        $livreForm = $this->createForm(SelectLivreType::class, null, [
            'livres' => $livres,
        ]);
        $livreForm->handleRequest($request);

        // Traitement du formulaire SelectLivreType
        if ($livreForm->isSubmitted() && $livreForm->isValid()) {
            // Récupération du livre sélectionné
            $livreSelectionne = $livreForm->get('livre')->getData();

            // Stocker l'ID du livre en session
            $livreId = $livreSelectionne->getIdLivre();
            $request->getSession()->set('livreIdSelectionne', $livreId);

            // Rediriger vers la page du deuxième formulaire
            return $this->render('users/listUserAutoLivre.html.twig', [
                'form' => $livreForm->createView(),
                'users' => $users,
                'livre' => $livreSelectionne,

            ]);
        }

        // Affichage du formulaire SelectLivreType
        return $this->render('fiche/autoriserUser_livre.html.twig', [
            'form' => $livreForm->createView(),

        ]);
    }

    #[Route('/user/autoriser/{id}', name: 'autoriser_user')]
    public function autoriserUser(ManagerRegistry $doctrine, Request $request, LivreRepository $livreRepository, UserRepository $userRepository, EntityManagerInterface $entityManager): RedirectResponse
    {
        $user = $request->get('id'); // Utilisation de $request->attributes->get() pour récupérer l'id depuis l'URL
        $tab = [];
        $livreId = $request->getSession()->get('livreIdSelectionne');
        // Récupérer l'objet Livre à partir de l'ID
        $livreAssocie = $doctrine->getRepository(Livre::class)->find($livreId);

        if ($livreAssocie->getIdLivreAuto() !== null) {
            $tab = $livreAssocie->getIdLivreAuto();
        }

        // Vérifie si l'utilisateur existe déjà dans le tableau
        $userExists = in_array($user, $tab);

        if ($user) {
            if (!$userExists) {
                $tab[] = $user;
            } else {
                // Supprime l'utilisateur existant du tableau
                $tab = array_diff($tab, [$user]);
            }

            // Met à jour l'association dans l'objet Livre
            $livreAssocie->setIdLivreAuto($tab);

            $entityManager->persist($livreAssocie);
            $entityManager->flush();
        } else {
            $this->addFlash('error', "L'utilisateur n'existe pas");
        }

        return $this->redirectToRoute('app_admin_app_users_index');
    }

    /**
     * @param User $user
     * @param EntityManagerInterface $entityManager
     * @param Request $request
     * @return Response
     * Permet de valider l'inscription d'un utilisateur
     */
    #[Route('/user/{id}/validate', name: 'admin_user_validate')]
    public function validateUser(#[MapEntity(id: 'id')] User $user, EntityManagerInterface $entityManager, Request $request): Response
    {
        // Définir la propriété 'valide' sur true
        $user->setValide(true);
        $user->setActive(true);
        // Persister les modifications dans la base de données
        $entityManager->flush();

        //Permet d'être redirigé à la page précèdente
        $route = $request->headers->get('referer');

        return $this->redirect($route);
    }

    #[Route('/user/get-base-html', name: 'get_base_html')]
    public function getBaseHTML(): Response
    {
        return $this->render('base.html.twig');

    }
}