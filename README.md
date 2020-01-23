# Projet NégoSi
L'utilisation de Github est recommandé. 
### Installation du projet :
Dans un terminal, cloner le répertoire github sur votre machine via la commande ci-dessous.
- ``` git clone https://github.com/Nikdoule/erp-vue.git ```
##### Installation de composer:
Dans un terminal, installer composer sur votre machine via la commande ci-dessous.
- ``` composer install ```
### Configuration du projet:
Créer un fichier ```.env``` à la racine du projet.
>Contenu du fichier ici: https://github.com/laravel/laravel/blob/master/.env.example
##### Générer la clé de chiffrement du projet:
Dans un terminal, générer la clé secrete de votre projet via la commande ci-dessous.
- ```php artisan key:generate```
##### Simulation d'envoie de email avec mailtrap.io
La validation de nouveaux comptes et la modification des mots de passe se fait via le clic d'un lien envoyé par email.
Voici le processus:
- S'inscrire sur la plateforme https://mailtrap.io/
- Cliquez sur votre profile
- Dans l'onglet smtp settings choisir l'intégration dans Laravel
- Copiez entièrment les lignes MAIL_USERNAME et MAIL_PASSWORD et collez-les à la place des mêmes lignes dans le fichier .env
- créez un nouveau compte et validez le après avoir reçu votre email dans votre boite aux lettres mailtrap

### Développement du projet
Dans un terminal, afin de continuer le développement du projet, il est important d'installer le gestionnaire de paquets NPM via la commande ci-dessous.
- ``` npm install ```
>Consulter la documentation Laravel pour avoir la liste des commandes utiles de NPM: https://laravel.com/docs/6.x/mix


