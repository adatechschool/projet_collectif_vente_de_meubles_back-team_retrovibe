<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Template server API Rest

    []: # Language: PHP
    []: # Environnement d'éxecution : LAMP WAMP MAMP
    []: # Framework : Laravel

### Installation

-   Créer une nouvelle base de données depuis le fichier anciens_meubles.sql

-   Installer composer https://getcomposer.org/
-   Cloner le Repository sur votre machine puis positionnez-vous à la racine du projet.

-   Créer un nouveau fichier `.env` en copiant et renommant le fichier `.env.example` puis remplissez le avec les bonnes informations de votre environnement local.

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_DATABASE=anciens_meubles    //nom de notre database
DB_USERNAME=root               //selon vos réglages
DB_PASSWORD=root               //selon vos réglages
```

-   générer votre clé d’encryption
    `bash
    php artisan key:generate
    `
-   Depuis votre terminal, **toujours à la racine du serveur**, éxécuter les commandes suivantes pour installer les dépendances et lancer le serveur :
    `bash
    composer install
    php artisan serve
    `

-   Le serveur se lance en local et affiche les informations de connexion dans le terminal

-   Pour voir toutes les routes faite :

```bash
php artisan route:list
```

<hr>

-   ### Les entrées sont disponibles sur l'entité Meuble :
    -   GET http://127.0.0.1:8000/api/meubles
    -   GET http://127.0.0.1:8000/api/meubles/1
    -   POST http://127.0.0.1:8000/api/meubles
    -   PUT http://127.0.0.1:8000/api/meubles/`id`
    -   DELETE http://127.0.0.1:8000/api/meubles/`id`
-   ### Les entrées sont disponibles sur l'entité Utilisateur :

    -   GET http://127.0.0.1:8000/api/utilisateurs
    -   GET http://127.0.0.1:8000/api/utilisateurs/1
    -   POST http://127.0.0.1:8000/api/utilisateurs
    -   PUT http://127.0.0.1:8000/api/utilisateurs/`id`
    -   DELETE http://127.0.0.1:8000/api/utilisateurs/`id`

-   ### Des entrées sont disponibles sur l'entité Meuble :
    -   GET http://127.0.0.1:8000/api/commandes
    -   GET http://127.0.0.1:8000/api/commandes/1
    -   POST http://127.0.0.1:8000/api/commandes
    -   DELETE http://127.0.0.1:8000/api/commandes/`id`
