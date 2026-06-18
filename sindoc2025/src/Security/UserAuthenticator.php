<?php

namespace App\Security;

use App\Entity\User;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Authenticator\AbstractLoginFormAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\CsrfTokenBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\RememberMeBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Credentials\PasswordCredentials;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\SecurityRequestAttributes;
use Symfony\Component\Security\Http\Util\TargetPathTrait;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\Security\Core\User\UserInterface;

class UserAuthenticator extends AbstractLoginFormAuthenticator
{
    use TargetPathTrait;

    public const LOGIN_ROUTE = 'app_login';


    private EntityManagerInterface $entityManager;
    private UrlGeneratorInterface $urlGenerator;
    private Security $security;

    public function __construct(EntityManagerInterface $entityManager, UrlGeneratorInterface $urlGenerator, Security $security)
    {
        $this->entityManager = $entityManager;
        $this->urlGenerator = $urlGenerator;
        $this->security = $security;

    }

    public function authenticate(Request $request): Passport
    {
        $username = $request->request->get('username', '');
        $user = $this->entityManager->getRepository(User::class)->findOneBy(['username' => $username]);
        if (!$user || !$user->isActive()) {
            throw new CustomUserMessageAuthenticationException('Votre compte est désactivé.');
        }
        if (!$user || !$user->isValide()) {
            throw new CustomUserMessageAuthenticationException('Votre compte est en attente de validation par l\'administrateur. Veuillez réessayer ultérieurement.');
        }
        $request->getSession()->set(SecurityRequestAttributes::LAST_USERNAME, $username);

        return new Passport(
            new UserBadge($username),
            new PasswordCredentials($request->request->get('password', '')),
            [
                new CsrfTokenBadge('authenticate', $request->request->get('_csrf_token')),
                new RememberMeBadge(),
            ]
        );
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        $user = $token->getUser();

        if ($user instanceof UserInterface) {
            if (!$user->isActive()) {
                $this->security->setToken(null);
                $request->getSession()->invalidate();
                throw new CustomUserMessageAuthenticationException('Votre compte est désactivé.');
            }
        }

        // Récupérer le targetPath mais l'ignorer si c'est une route AJAX/API/JSON
        $targetPath = $this->getTargetPath($request->getSession(), $firewallName);

        if ($targetPath && !$this->isAjaxOrApiPath($targetPath)) {
            return new RedirectResponse($targetPath);
        }

        // === Redirection conditionnelle selon le rôle ===
        $roles = $user->getRoles();

        // 1. Admin → page administration
        if (in_array('ROLE_ADMIN', $roles, true) || in_array('ROLE_SUPER_ADMIN', $roles, true)) {
            return new RedirectResponse($this->urlGenerator->generate('admin_index'));
        }

        // 2. Utilisateur (ROLE_USER) → logique selon ses livres autorisés
        if (in_array('ROLE_USER', $roles, true)) {
            $livres = $this->entityManager->createQuery(
                'SELECT l 
             FROM App\Entity\Livre l
             JOIN l.livreAuths la
             WHERE la.user = :user
             ORDER BY l.nom'
            )->setParameter('user', $user)->getResult();

            $nbLivres = count($livres);

            if ($nbLivres === 1) {
                // Un seul livre : on le sélectionne automatiquement en session
                $livre = $livres[0];
                $session = $request->getSession();
                $session->set('livreIdSelectionne', $livre->getIdLivre());
                $session->set('livreName', $livre->getNom());
                $session->set('canEdit', true);

                return new RedirectResponse($this->urlGenerator->generate('app_home'));

            } elseif ($nbLivres > 1) {
                // Plusieurs livres : aller à l'accueil avec un flag pour ouvrir le pop-up
                $request->getSession()->set('openLivrePopup', true);
                return new RedirectResponse($this->urlGenerator->generate('app_home'));
            }

            // Aucun livre : aller à l'accueil (message d'info à gérer côté Twig si besoin)
            return new RedirectResponse($this->urlGenerator->generate('app_home'));
        }

        // 3. Utilisateur sans rôle → page d'accueil
        return new RedirectResponse($this->urlGenerator->generate('app_home'));
    }

    /**
     * Vérifie si l'URL correspond à une route AJAX/API qui ne doit pas servir de redirection post-login.
     */
    private function isAjaxOrApiPath(string $path): bool
    {
        $blacklistPatterns = [
            '/dropdown/',
            '/get-',
            '/api/',
            '/ajax/',
            '/session/set-',
            '/authorized/user-livres',
        ];

        foreach ($blacklistPatterns as $pattern) {
            if (str_contains($path, $pattern)) {
                return true;
            }
        }

        return false;
    }

    protected function getLoginUrl(Request $request): string
    {
        return $this->urlGenerator->generate(self::LOGIN_ROUTE);
    }
}