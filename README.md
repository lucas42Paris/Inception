# Inception

🇫🇷

Inception est un projet d'administration systeme introduisant a l'utilisation de Docker.
Le but du projet est mettre en place une mini-infrastructure configuree dans une machine virtuelle et utilisant differents services : NGINX, WordPress et MariaDB.

Chaque service devra tourner dans son propre container, qui seront ensuite lies via un fichier docker-compose.yml (appelle par notre Makefile).

__Configuration detailee__ :

* Un container Docker contenant NGINX avec TLSv1.3.
* Un container Docker contenant WordPress + php-fpm
* Un container Docker contenant MariaDB.
* Un volume contenant notre base de donnees WordPress
* Un volume contenant les fichiers de notre site WordPress.
* Un docker-network qui fait le lien entre nos containers.

🇺🇸



![Rating](rating.png)
