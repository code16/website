---
extends: _layouts.project
section: content
title: Parcs matériels Grand Est

---

**Conception et développement du site internet de location de matériels scénique de 
l’Agence culturelle Grand Est&nbsp;: https://parcsmaterielsgrandest.fr/**

Cette plateforme web présente les catalogues d’articles de matériel scénique disponibles à la location dans les différents dépôts de l’Agence culturelle Grand Est. 

![Accueil](/assets/img/ekip/1.png)
La page d’accueil du site
![Actus](/assets/img/ekip/2.png)
Le catalogue est composé de plusieurs niveaux de rubriques
![Aquamarine](/assets/img/ekip/3.png)
Une page article

La section compte regroupe toutes les fonctions de demandes de location, de suivi de commande et de factures, mais aussi d’inscriptions, invitations, candidature : le site repose en effet sur un système dédié et complet de comptes utilisateur individuels liés à des structures, des manifestations et des paniers avec divers niveaux d’autorisation pour modéliser la complexité des cas, selon que l’on soit un technicien intervenant le temps d’un festival ou un membre à part entière de la structure.

![Structure](/assets/img/ekip/4.png)
Une page de compte structure (un membre peut être relié à plusieurs structures) 
![Demande](/assets/img/ekip/6.png)
Un panier en cours, pour lequel les dates n’ont pas encore été indiquées
![Choix](/assets/img/ekip/7.png)
Réception d’une commande modifiée par le gestionnaire, avec les choix possibles
![Location](/assets/img/ekip/5.png)
Une commande en cours

Le système de location est relié via une API au logiciel [Locasyst](http://www.pgs.fr/logiciels/locasyst/), avec lequel il synchronise automatiquement les articles et tarifs, les commandes (dans tout leur cycle de vie) et comptes client.

Le site utilise grandement le [framework de gestion de contenu Sharp](https://github.com/code16/sharp) pour permettre aux administrateurs de notamment gérer les locations, d’échanger des messages avec les clients, de suivre les commandes et leurs éventuelles erreurs, ... L’idée étant que tout puisse être analysé et réalisé depuis cette interface. 

![Sharp](/assets/img/ekip/sharp-home.png)
Le tableau de bord de Sharp, avec les différentes entités de gestion à gauche
![Statistiques](/assets/img/ekip/sharp-stats.png)
L’administrateur a accès à de nombreux indicateurs statistiques, exportables.

Le projet est très riche de fonctionnalités, mais il laisse pour autant une grande autonomie aux administrateurs pour traiter les nombreux cas spécifiques à ce domaine. Le site est relié via API à un autre projet que nous avons développé pour l’Agence culturelle, le [CRM Beatus](/p/beatus), afin d’y remonter des données et contenus à des fins d’analyse statistique.
