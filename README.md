# Projet NégoSi
L'utilisation de Github est recommandé pour l'installation de ce projet. 
### Installation du projet :
Dans un terminal, cloner le répertoire github sur votre machine via la commande ci-dessous.
- ``` git clone https://github.com/Nikdoule/erp-vue.git ```
##### Installation de composer:
Dans un terminal, installer composer sur votre machine via la commande ci-dessous.
- ``` composer install ```
### Configuration du projet:
Créer un fichier ```.env``` à la racine du projet.
>Contenu du fichier ici: https://github.com/laravel/laravel.com-next/blob/master/.env.example
##### Générer la clé de chiffrement du projet:
Dans un terminal, générer la clé secrete de votre projet via la commande ci-dessous.
- ```php artisan key:generate```
##### Migrations
Dans un terminal, exécutez les migrations via la commande ci-dessous.
- ```php artisan migrate```
##### Création des utilisateurs par défaut:
Le projet est muni par défaut de deux utilisateurs, un administrateur et un manager. Il serait utile de les générer pour une première utilisation de l'application. Pour ce faire, dans un terminal via la commande ci-dessous.
- ``` php artisan db:seed ```
- Les informations confidentielles des utilisateurs sont dans le dossier ```database/seeds/UsersTableSeeder``` 
- Il est maintenant possible de vous connecter en tant qu'administrateur
- pour modifier un utilisateur, cliquez sur votre profil et accéder à la liste des utilisateurs
>voir la partie Simulation d'envoie d'email avant d'utiliser l'application. Documentation Laravel à ce sujet du seeding: https://laravel.com/docs/5.8/seeding.
##### Simulation d'envoie d'email avec mailtrap.io
La validation de nouveaux comptes et la modification des mots de passe se fait via le clic d'un lien envoyé par email.
Voici le processus:
- S'inscrire sur la plateforme https://mailtrap.io/
- Cliquez sur votre profil
- Dans l'onglet smtp settings choisir l'intégration dans Laravel
- Copiez entièrment les lignes MAIL_USERNAME et MAIL_PASSWORD et collez-les à la place des mêmes lignes dans le fichier .env
- créez un nouveau compte et validez le après avoir reçu votre email dans votre boite aux lettres mailtrap
>Le lien dans l'email peut être amené à des modifications selon votre configuration de base.

### Développement du projet
Dans un terminal, afin de continuer le développement du projet, il est important d'installer le gestionnaire de paquets NPM via la commande ci-dessous.
- ``` npm install ```
>Consulter la documentation Laravel pour avoir la liste des commandes utiles de NPM: https://laravel.com/docs/6.x/mix


