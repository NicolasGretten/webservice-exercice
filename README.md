# Exercice Webservices

## API
API faites avec lumen et postegresql

J'ai eu quelques soucis avec symfony lors de la création de projet alors j'ai utiliser le framework avec lequel je travaille en alternance, Lumen qui est un framework de laravel.

## .ENV

Pour utiliser l'API il faut copier le fichier .env.example, le renommer en .env et renseigner les information de la DB.
## Les commandes

Migrer la base de données et la seed (seed de 5 articles)

```bash
php artisan migrate:fresh --seed
```

génerer la doc qui est visible sur localhost:[port]/docs 

(quelque soucis d'affichage en localhost avec seulement un serveur php mais avec wamp ou nginx la docs est bien afficher)
```bash
php artisan scribe:generate
```

lancer le serveur php

```bash
php -S localhost:8080 -t [chemin du projet\public]
```

et ce rendre sur les routes:

GET:

- http://localhost:[port]/blog/articles
- http://localhost:[port]/blog/articles/{article_id}

POST : 

- http://localhost:[port]/blog/articles

## Mise à jour 04/05/2021 Après-Midi

- Ajout de des utilisateurs
- Une route POST pour s'inscrire : http://localhost:[port]/users/register
- Une route POST pour s'identifier : http://localhost:[port]/users/signIn
- Protection des routes POST et PATCH des Articles avec une authentification : ajout du Bearer Token dans le header
- Ajout du PATCH pour les articles
