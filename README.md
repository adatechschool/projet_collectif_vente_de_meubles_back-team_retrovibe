# [RETROVIBE](https://retrovibes.herokuapp.com/home)

Ceci est le repo de notre Back, le Front se trouve [ici](https://github.com/adatechschool/projet_collectif_vente_de_meubles-front-team_retrovibe)

## Template server API Rest

    []: # Language: PHP
    []: # Environnement d'éxecution : LAMP WAMP MAMP
    []: # Framework : Laravel

### Installation

-   Télecharger repo

-   Lancer MAMP ou WAMP ou LAMP

-   Ouvrir php my admin

-   Créer une nouvelle base de données depuis le fichier anciens_meubles.sql

MAC :

-   verifier que vous avez bien déjà php d'installé cmd line : php --version
-   si mac : installer https://brew.sh/ cmd line : /bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
-   cmd line : curl -sS https://getcomposer.org/installer | php
-   cmd line : sudo mv composer.phar /usr/local/bin/composer
-   pour vérifier l'installation cmd line : composer --version
    PC :
-   Installer composer https://getcomposer.org/

-   positionnez-vous à la racine du projet.

-   Modifiez le fichier `.env.exemple` en remplissant avec les bonnes informations de votre environnement local :
    ( puis renommez le fichier `.env` )

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_DATABASE=anciens_meubles    //nom de notre database
DB_USERNAME=root               //selon vos réglages
DB_PASSWORD=root               //selon vos réglages
```

-   Depuis votre terminal, **toujours à la racine du serveur**, éxécuter les commandes suivantes pour installer les dépendances et lancer le serveur :

```bash
-   composer install    // si ça affiche "Your lock file does not contain a compatible set of packages. Please run composer update." ->  composer update --ignore-platform-reqs
-   php artisan key:generate
-   php artisan serve
```

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
