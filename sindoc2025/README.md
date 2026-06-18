# Refonte sous Symfony

## Description

Ce projet est une application web développée avec Symfony permettant la gestion de fiches basées sur des livres, index et mot clés. 
Les utilisateurs peuvent rechercher une fiche selon différents critères, et selon leurs droits, ajouter, modifier ou supprimer des éléments de la base de données.

## Fonctionnalités

- Recherche d'une fiche selon plusieurs critères
- Ajout, modification, suppression d'une fiche, livre, index, statut, mot clés.
- Administration des utilisateurs
- Gestion de l'historique des actions

## Technologies utilisées

- Backend : Symfony
- Base de données : PostgreSQL
- Frontend : Twig, HTML, CSS
- Gestion de versions : Git + GitLab
- Gestion de projet : Trello
- Communication : Discord

## Installation

### Prérequis

- PHP >= 8.2
- Composer
- Symfony
- PostgreSQL

### Étapes d'installation
#### 1. Cloner le projet
```
cd existing_repo
git remote add origin https://disc.univ-fcomte.fr/cr700-gitlab/arothe/refonte-sous-symfony.git
```

#### 2. Installer les dépendances 
```
composer install
```

#### 3. Configurer l'environnement
Modifier le fichier ".env" : 
```
DATABASE_URL="postgresql://user:password@127.0.0.1:5432/nom_de_la_bdd"
```

#### 4. Créer la base de données
```
symfony console doctrine:database:create
symfony console doctrine:migrations:migrate
```
#### 5. Lancer le serveur Symfony
```
symfony server:start
```

## Développeurs

- Antonin Rothé
- Faiza Merah
- Abdelmadjid Zenine
- Sous la supervision de M. Florian Litot