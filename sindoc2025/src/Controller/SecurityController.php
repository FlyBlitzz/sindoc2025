<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils, RequestStack $requestStack): Response
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    #[Route(path: '/password-changed', name: 'password_changed')]
    public function passwordChanged(): Response
    {
        return $this->render('security/password_changed.html.twig');
    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(RequestStack $requestStack, TokenStorageInterface $tokenStorage): RedirectResponse
    {
        $session = $requestStack->getSession();

        // Clear authentication token
        $tokenStorage->setToken(null);

        // Invalidate session
        $session = $requestStack->getSession();
        $session->invalidate();
        $response = new RedirectResponse($this->generateUrl('app_login'));
        $response->headers->set('Cache-Control', 'no-cache, no-store, must-revalidate');
        $response->headers->set('Pragma', 'no-cache');
        $response->headers->set('Expires', '0');
        // Redirect to login page
        return $response;
    }
}