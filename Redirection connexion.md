# Redirection connexion — Modifications réalisées

Ce document récapitule les changements déjà effectués pour corriger la redirection après connexion (cas où la connexion renvoyait du JSON au lieu de rediriger vers une page), ainsi que quelques ajustements côté interface et validation.

---

## 1) Correction de la redirection après authentification

### Fichier
`src/Security/UserAuthenticator.php`

### Changements effectués
- Modification de la méthode `onAuthenticationSuccess()`
- Ajout de la méthode privée `isAjaxOrApiPath()`

> Les deux méthodes sont dans la classe `UserAuthenticator`.  
> Le bloc ci-dessous correspond au code appliqué (à partir d’environ la ligne ~65).

```php
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
            // Un seul livre : sélection automatique en session
            $livre = $livres[0];
            $session = $request->getSession();
            $session->set('livreIdSelectionne', $livre->getIdLivre());
            $session->set('livreName', $livre->getNom());
            $session->set('canEdit', true);

            return new RedirectResponse($this->urlGenerator->generate('app_home'));

        } elseif ($nbLivres > 1) {
            // Plusieurs livres : accueil + flag pour ouvrir le pop-up
            $request->getSession()->set('openLivrePopup', true);
            return new RedirectResponse($this->urlGenerator->generate('app_home'));
        }

        // Aucun livre : accueil
        return new RedirectResponse($this->urlGenerator->generate('app_home'));
    }

    // 3. Utilisateur sans rôle → accueil
    return new RedirectResponse($this->urlGenerator->generate('app_home'));
}

/**
 * Vérifie si l'URL correspond à une route AJAX/API qui ne doit pas servir
 * de redirection post-login.
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
```

---

## 2) Ouverture automatique du pop-up de sélection de livre (après login)

### Fichier
`templates/header.html.twig`

### Changements effectués
- Ajout, dans le `<script>` (après le code du menu hamburger), du bloc Twig/JS permettant d’ouvrir automatiquement le modal si la session contient `openLivrePopup` (environ ligne ~368) :

```twig
{% if app.session.get('openLivrePopup') %}
    // Ouvre automatiquement le pop-up de sélection de livre
    setTimeout(function() {
        const livreModal = new bootstrap.Modal(document.getElementById('livreModal'));
        livreModal.show();
    }, 800); // délai pour laisser le fetch des livres se terminer
    {% do app.session.remove('openLivrePopup') %}
{% endif %}
```

- Suppression de l’alerte JS (environ ligne ~451) :
```js
alert("Livre sélectionné avec succès !");
```

---

## 3) Corrections Validator (Symfony 8) appliquées sur des formulaires

Symfony 8 n’accepte plus `new Constraint([ ... ])` (tableau d’options).  
Les contraintes ont été migrées vers la syntaxe à arguments nommés.

### Fichiers concernés (exemples)
- `src/Form/RegistrationFormType.php` (~ligne 23)  
  `new IsTrue([...])` → `new IsTrue(message: '...')`

- `src/Form/FicheType.php` (~lignes 31, 42, 52)  
  `new NotBlank([...])` → `new NotBlank(message: '...')`

- `src/Form/FicheTypeEdit.php` (~lignes 45, 56, 66)  
  `new NotBlank([...])` → `new NotBlank(message: '...')`

- `src/Form/SavreqRechercheType.php` (~lignes 75–77)  
  - `NotBlank` migré en arguments nommés  
  - `Callback` migré de `new Callback(['callback' => ...])` vers `new Callback(callback: function (...) { ... })`

- `src/Form/RechercheFicheType.php` (~lignes 36–37)  
  `new Type([...])`, `new Positive([...])` → `new Type(type: ..., message: ...)`, `new Positive(message: ...)`

- `src/Form/ResetPassword.php` (~ligne 29)  
  `new Regex([...])` → `new Regex(pattern: ..., message: ...)`

- `src/Form/SavRequeteType.php` (~lignes 19–20)  
  `new Regex([...])` → `new Regex(pattern: ..., match: ..., message: ...)`

- `src/Form/UserType.php` (~ligne 41)  
  `new Regex([...])` → `new Regex(pattern: ..., message: ...)`

---

## 4) Nettoyage de template

### Fichier
`templates/base.html.twig`

### Changements effectués
- Suppression (environ ligne ~138) du bloc contenant les boutons de navigation “retour/avant” :

```twig
<div class="card-body" style="display:flex;justify-content:flex-end;">
    <div>
        <button onclick="goBack()" class="btn btn-outline-secondary" > < </button>
        <button onclick="goForward()" class="btn btn-outline-secondary" >></button>
    </div>
</div>
```