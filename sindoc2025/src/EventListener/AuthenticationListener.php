<?php
namespace App\EventListener;

use Symfony\Bundle\SecurityBundle\Security as SecurityBundleSecurity;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\Event\ResponseEvent;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Security;

class AuthenticationListener
{
    private SecurityBundleSecurity $security;
    private RouterInterface $router;

    public function __construct(SecurityBundleSecurity $security, RouterInterface $router)
    {
        $this->security = $security;
        $this->router = $router;
    }

    public function onKernelRequest(RequestEvent $event)
    {
        $request = $event->getRequest();

        // Exclude the login and logout routes to prevent infinite redirects
        $excludedRoutes = ['app_home','app_login', 'app_logout', 'app_register', 'fiche_recherche', 'visiteur_multi_requetes', 'deuxieme_fiche_recherche', 'fiche_recherche_resultat'];
        $routeName = $request->attributes->get('_route');

        if (in_array($routeName, $excludedRoutes, true)) {
            return;
        }

        // Check if the user is authenticated
        if (!$this->security->getUser()) {
            $response = new RedirectResponse($this->router->generate('app_login'));
            $event->setResponse($response);
        }
    }
    public function onKernelResponse(ResponseEvent $event)
    {
        if ($this->security->getUser()) {
            $response = $event->getResponse();
            $response->headers->set('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0');
            $response->headers->set('Pragma', 'no-cache');
            $response->headers->set('Expires', 'Sat, 26 Jul 1997 05:00:00 GMT');
        }
    }
}
