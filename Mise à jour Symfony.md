# Modifications (upgrade Symfony 8.1.0, PHP 8.4.22, Doctrine ORM 3.6.7)

## 1) Environnement / prérequis

- Ajout du fichier `.php-version` pour fixer la version PHP utilisée sur le projet : **8.4.22**  
  (Symfony 8.1 nécessite PHP ≥ 8.4.1 ; PHP 8.5 posait des conflits de dépendances).
- Vérification/activation des extensions PHP nécessaires au projet sous PHP 8.4.22 : `pgsql`, `pdo_pgsql`, `intl`, `gd`.

## 2) Dépendances (Composer)

- Mise à jour des dépendances vers Symfony **v8.1.0** (tous les `symfony/*` en `8.1.*` dans `composer.json` + régénération de `composer.lock`).
- Mises à jour associées nécessaires pour compatibilité Symfony 8 / Doctrine 3 (principales) :
  - `doctrine/doctrine-bundle` → **3.x**
  - `doctrine/orm` → **3.x**
  - `doctrine/doctrine-migrations-bundle` → **4.x**
  - `symfony/monolog-bundle` → **^4.0** (la v3 ne supporte pas Symfony 8)
  - `phpunit/phpunit` → **11.x**
  - `phpoffice/phpword` → **^1.4** (nécessite `ext-gd`)
  - `dompdf/dompdf` → version plus récente compatible PHP 8.4

## 3) Corrections de code liées à Doctrine ORM 3 (signatures)

Doctrine ORM 3 typant certaines méthodes, plusieurs repositories surchargeaient `findAll()` sans type de retour.  
Correction : ajout de `: array`.

- `src/Repository/FicheRepository.php` (~ligne 101)  
  `public function findAll()` → `public function findAll(): array`
- `src/Repository/HistoriqueRepository.php` (~ligne 24)  
  `public function findAll()` → `public function findAll(): array`
- `src/Repository/IndexRepository.php` (~ligne 23)  
  `public function findAll()` → `public function findAll(): array`
- `src/Repository/MotCleRepository.php` (~ligne 23)  
  `public function findAll()` → `public function findAll(): array`
- `src/Repository/StatutRepository.php` (~ligne 23)  
  `public function findAll()` → `public function findAll(): array`

## 4) Corrections de mapping Doctrine (associations)

### 4.1 `Historique` ↔ `User`
- `src/Entity/Historique.php` : ajout du mapping manquant sur `$user`.  
  Ajout de `#[ORM\ManyToOne(inversedBy: 'historiques')]` + `#[ORM\JoinColumn(nullable: false)]` sur `private ?User $user = null;`.

### 4.2 `Historique` ↔ `Fiche`
- `src/Entity/Historique.php` : ajout/clarification du lien vers `Fiche` et ajout des getters/setters correspondants :
  - `use App\Entity\Fiche;`
  - `#[ORM\ManyToOne(targetEntity: Fiche::class, inversedBy: 'historiques')]`
  - `#[ORM\JoinColumn(name: 'fiche_id', referencedColumnName: 'id', nullable: true, onDelete: 'SET NULL')]`
  - `getFiche()` / `setFiche()`

### 4.3 `IndexAuth` ↔ `Index`
- `src/Entity/IndexAuth.php` : correction de la relation inverse.  
  `#[ORM\ManyToOne(targetEntity: Index::class)]` → `#[ORM\ManyToOne(inversedBy: 'index_auth')]` (en conservant `onDelete: "CASCADE"`).

### 4.4 `LivreAuth` ↔ `Livre`
- `src/Entity/LivreAuth.php` : correction de la relation inverse.  
  `#[ORM\ManyToOne(targetEntity: Livre::class)]` → `#[ORM\ManyToOne(inversedBy: 'livreAuths')]` (en conservant `onDelete: "CASCADE"`).

### 4.5 Nettoyage `LivreAuth`
- `src/Entity/LivreAuth.php` : suppression d’une relation incorrecte auto-référente :  
  suppression de la propriété `#[ORM\OneToMany(... targetEntity: LivreAuth::class ...)] private Collection $livreAuths;`.

## 5) Configuration DoctrineBundle 3 / ORM 3

- `config/packages/doctrine.yaml` : adaptation de la configuration Doctrine à DoctrineBundle 3  
  (certaines options n’étaient plus reconnues sous `doctrine.orm.entity_managers.default` ni sous `doctrine.orm`).
- Ajustements effectués :
  - suppression/déplacement des options non reconnues (`auto_generate_proxy_classes`, `enable_lazy_ghost_objects`, `report_fields_where_declared`, etc.)
  - ajout de `enable_native_lazy_objects: true`
  - correction de la structure `when@prod` (notamment `mapping_types` placé sous `doctrine.dbal`)

## 6) Routes (Symfony 8 : XML → PHP)

Symfony 8 ne charge plus certains fichiers de routes XML des bundles (ou ils ne sont plus présents).  
Remplacement des imports `.xml` par leurs équivalents `.php`.

- `config/routes/framework.yaml` :  
  `@FrameworkBundle/Resources/config/routing/errors.xml` → `@FrameworkBundle/Resources/config/routing/errors.php`
- `config/routes/web_profiler.yaml` :  
  `@WebProfilerBundle/Resources/config/routing/wdt.xml` → `@WebProfilerBundle/Resources/config/routing/wdt.php`  
  `@WebProfilerBundle/Resources/config/routing/profiler.xml` → `@WebProfilerBundle/Resources/config/routing/profiler.php`

## 7) Migration générée et ajustée (robustesse sur base existante)

- Migration ajoutée : `migrations/Version20260618085040.php`
- Ajustements manuels pour éviter des erreurs sur une base issue d’un dump (index déjà absents / colonne déjà en IDENTITY) :
  - `ALTER INDEX ...` → `ALTER INDEX IF EXISTS ...`
  - `DROP INDEX ...` → `DROP INDEX IF EXISTS ...`
  - adaptation de la conversion `messenger_messages.id` en IDENTITY via un bloc `DO $$ ...` conditionnel
  - `CREATE INDEX ...` → `CREATE INDEX IF NOT EXISTS ...`

## 8) Base de données (données incohérentes)

- Suppression de doublons dans la table de jointure `fichemotcle` afin de permettre la création de la clé primaire/contrainte unique sur `(fiche, motcle)`.

## 9) État final (contrôles)

- `bin/console --version` : **Symfony v8.1.0**
- `bin/console doctrine:schema:validate` :
  - Mapping : **OK**
  - Database : **OK**

## 10) Contrôleurs (routes)

- Dans les contrôleurs concernés (`src/Controller/`), remplacement de :
  - `use Symfony\Component\Routing\Annotation\Route;`
  - par `use Symfony\Component\Routing\Attribute\Route;`
  afin d’être cohérent avec Symfony 8 (routes via attributs `#[Route]`).