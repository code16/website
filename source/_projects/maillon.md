---
extends: _layouts.project
section: projectContent
title: Maillon

---

**Site de présentation de saison et billetterie en ligne.**

Le théâtre Le Maillon est une institution strasbourgeoise ; nous avons conçu [son site internet](https://maillon.eu/) à son image, un lieu à la fois de présentation de spectacles, d'expositions et de rencontres culturelles, le tout dans son univers graphique spécifique créé par [Atelier Poste 4](http://atelierposte4.com).

![Saison](/assets/img/maillon/season.jpg)
La présentation de la saison, et son système simple de filtre et de décalage dans le temps
![Spectacle](/assets/img/maillon/show.jpg)
Une page spectacle
![Page](/assets/img/maillon/pages.jpg)
Les rubriques libres peuvent s'organiser à la manière d'un magazine

Le site est multilingue ; comme il est très fourni en information, la quantité de contenu disponible varie naturellement d'une langue à l'autre. Nous avons donc choisi de développer le multilinguisme en deux modes : un-pour-un pour la partie spectacles, ce qui permet de passer d'une langue à l'autre sans perdre la page courante, et libre pour le contenu général.

La billetterie est un développement spécifique, parfaitement adaptée aux règles du Maillon ; elle a été réalisée avec l'idée d'être simple et claire, puisque plus de la moitié des abonnements de l'année arrivent par le site.

![Panier](/assets/img/maillon/cart.jpg)
Le panier, conçu comme une application cliente (en Ember.js) pour ajouter de la fluidité
![Compte](/assets/img/maillon/account.jpg)
Les abonnés ont la possibilité de créer un compte sur le site, ce qui ouvre l'accès à des outils spécifiques de rappels de représentation, ou d'alerte en cas de mise à disposition de nouvelles places par exemple

Les administrateurs du site sont autonomes à 100% ; ils ont accès à un outil de back-office complet construit à partir de notre projet Open-source [Sharp](https://github.com/code16/sharp). Tout y est regroupé, des informations de programmation aux pages de contenu libre, en passant par la configuration de la billetterie, les quotas et les commandes.

![Spectacles](/assets/img/maillon/sharp_shows.jpg)
Une vision de tous les spectacles d'une saison
![Spectacle](/assets/img/maillon/sharp_show.jpg)
Le formulaire de modification d'un spectacle