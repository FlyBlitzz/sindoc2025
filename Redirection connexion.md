# Modification a realiser pour corriger les erreurs

## Dans \sindoc2025\src\Security\UserAuthenticator.php
### il faut modifier la fonction onAuthenticationSuccess et créer la fonction isAjaxOrApiPath
### (Ces 2 fonctions sont a mettre dans la class UserAuthenticator, tu peux copier tout le block et tout remplacer de la fonction onAuthenticationSuccess jusqu'en bas)
~ ligne 65
```
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
```

## Dans \sindoc2025\templates\header.html.twig
### Entre les balises script où il y a
```
document.addEventListener("DOMContentLoaded", function () {
    const hamburger = document.getElementById("hamburger");
    const navMenu = document.getElementById("nav-menu");

    hamburger.addEventListener("click", function () {
        navMenu.classList.toggle("active");
    });
});
```
### Mettre avant la balise de fermeture script ca (~ ligne 368):
```
{% if app.session.get('openLivrePopup') %}
    // Ouvre automatiquement le pop-up de sélection de livre
    setTimeout(function() {
        const livreModal = new bootstrap.Modal(document.getElementById('livreModal'));
        livreModal.show();
    }, 800); // Délai pour laisser le fetch des livres se terminer
    {% do app.session.remove('openLivrePopup') %}
{% endif %}
```

Ligne ~451 suppression : alert("Livre sélectionné avec succès !");