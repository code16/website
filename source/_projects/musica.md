---
extends: _layouts.project
section: projectContent
title: Musica

---

**Site de présentation du festival Musica et billetterie en ligne.**

Le festival Musica est un festival international de musique contemporaine qi a lieu chaque année à Strasbourg. Nous avons conçu [son site internet](http://www.festivalmusica.org/) qui propose de juin à octobre une présentation détaillée de l'édition en cours ou à venir, ainsi qu'une billetterie sur mesure. Le reste de l'année le site est plus institionnel, même si le festival s'en sert pour des événements ponctuels (médiation culturelles par exemple).

![Accueil](/assets/img/musica/home.jpg)
La page d'accueil à l'annonce de l'édition, avec le *teaser* mis en avant
![Programme](/assets/img/musica/shows.jpg)
La présentation des manifestations du festival
![Spectacle](/assets/img/musica/show.jpg)
Une page spectacle, qui peut proposer de nombreux éléments joints (photos, vidéos, biographies d'artistes, ...)

La billetterie est un développement spécifique, développée en Vue.js, dont l'objectif premier était de simplifier la prise de commande.

![Panier](/assets/img/musica/cart.jpg)
Le panier est une application Vue.js
![Spectacles](/assets/img/musica/cart_shows.jpg)
Le choix d'un spectacle à ajouter au panier

Les administrateurs du site sont totalement autonomes via l'outil de back-office complet construit à partir de notre projet Open-source [Sharp](https://github.com/code16/sharp). Tout y est regroupé, des spectacles aux biographies des artistes, en passant par la configuration de la billetterie, les quotas et les commandes.

![Spectacles](/assets/img/musica/sharp_shows.jpg)
Une vision de tous les spectacles d'une édition
![Spectacle](/assets/img/musica/sharp_show.jpg)
Le formulaire de modification d'un spectacle