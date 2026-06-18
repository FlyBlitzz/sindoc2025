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
use Symfony\Component\Security\Http\Authenticator\Token\PostAuthenticationToken;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\Security\Core\User\UserInterface;

class UserAuthenticator extends AbstractLoginFormAuthenticator
{
    use TargetPathTrait;

    public const LOGIN_ROUTE = 'app_login';

    
    private EntityManagerInterface $entityManager;
    private UrlGeneratorInterface $urlGenerator;
    private Security $security; 

    public function __construct(EntityManagerInterface $entityManager,  UrlGeneratorInterface $urlGenerator,  Security $security)
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
            // Vérifiez si l'utilisateur est désactivé
            if (!$user->isActive()) {
                // Déconnecter l'utilisateur
                $this->security->setToken(null);
                $request->getSession()->invalidate();
                
                // Rediriger vers une page indiquant que le compte est désactivé
                throw new CustomUserMessageAuthenticationException('Votre compte est désactivé.');
            }
        }

        if ($targetPath = $this->getTargetPath($request->getSession(), $firewallName)) {
            return new RedirectResponse($targetPath);
        }

        return new RedirectResponse($this->urlGenerator->generate('app_home'));
    }
    protected function getLoginUrl(Request $request): string
    {
        return $this->urlGenerator->generate(self::LOGIN_ROUTE);
    }
}
