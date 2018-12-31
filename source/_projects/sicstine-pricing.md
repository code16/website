---
extends: _layouts.project
section: projectContent
title: Projet Sicstine — tarification
---

[< Retour](/p/sicstine-summary)

# Sicstine : tarification et disponibilité

## Quelle est la légitimité de Code 16 pour ce projet ?

[Code 16](https://code16.fr) est une agence animée par 4 développeurs qui s'est fait une spécialité de créer des systèmes de gestion sur mesure pour des clients divers dans le monde de la culture et ailleurs.

L'idée de Sicstine est notamment née de l'expérience de Code 16 dans les différents champs cités dans ce document : 

\- Nous avons créé plusieurs sites et billetterie web dédiées pour des théâtres ([Le Maillon](https://code16.fr/p/maillon)) et festivals ([Le festival Musica](https://code16.fr/p/musica)), mais aussi des systèmes complets d'achat en ligne sur le web et sous forme d'applications mobiles ([pour EK France](https://code16.fr/p/ek-france) ou [le parc de location de matériel scénique du Grand Est](https://code16.fr/p/parcs-materiels-grand-est)).

\- Nous avons eu plusieurs expériences de CRM dédiés (notamment [Beatus](https://code16.fr/p/beatus), pour l'Agence culturelle Grand Est), avec des fonctionnalités avancées de liaison à des systèmes tiers (plateformes d'expédition de mails ou de SMS, remontée d'informations depuis les sites internet).

\- Et nous sommes les créateurs et mainteneurs de projets Open source liés à la gestion avancée de données ([Sharp](https://github.com/code16/sharp)) ou à l'analyse fine des comportements de navigation et d'achat ([Metrics](https://github.com/code16/metrics)).

Le monde de la culture, et du spectacle vivant en particulier, nous intéresse beaucoup ; il nous semble que notre approche de développeurs, à la recherche de solutions techniques à des problèmes exprimés et offrant au responsable la maîtrise de ses actions et de ses données, est plus pertinente que celle des agences globales de communication qui ont plus souvent tendance à conserver la main sur leurs solutions.


## Tarification envisagée

Sicstine a l'ambition de rendre un administrateur de structure autonome pour tous les outils qui devraient concentrer l'essentiel de son activité numérique, et de le libérer de grandes contraintes techniques : le stockage, la sécurité et la pérennité des données, ainsi que leur "fraîcheur" (étant centralisées, elles sont les mêmes partout), mais aussi le respect des réglementations des données personnelles.

La tarification proposée sera mensualisée, proportionnelle à l'activité :  
\- une base fixe selon les modules choisis : [CMS](/p/sicstine-cms), [billetterie](/p/sicstine-ticketing), [CRM](/p/sicstine-crm),  
\- plus un forfait lié à la quantité de données hébergées (à partir d'une échelle forfaitaire),  
\- et enfin une partie liée à l'activité, c'est-à-dire au nombre d'appels à l'API effectués.

Les tarifs ne sont pas établis aujourd'hui, mais ils devraient être contenus dans une fourchette allant de 75€HT à 350€HT par mois, selon les options, auxquels s'ajouteront éventuellement des frais d'expédition réels (SMS et newsletter) si ces fonctions sont utilisées, et des frais bancaires si l'option de la solution de paiement intégrée est retenue.

## Intégration de Sicstine

Sicstine propose une tarification claire sans frais d'installation ni investissement de départ ; cependant, comme indiqué précédemment, il faudra prévoir une intégration de Sicstine dans les applications publiques existantes de la structure (le site internet, au minimum). Soyons clairs sur ce point :  
\- l'intégration sera rendue très simple techniquement, en étant parfaitement standard et documentée,  
\- elle pourra être plus ou moins poussée, et être adaptée et améliorée dans le temps.

Mais cette intégration aura tout de même un coût de développement à prévoir. Ce développement peut être réalisé par le prestataire actuel de la structure, ou par Code 16 si c'est jugé utile.


## Calendrier

L'objectif est de proposer à des structures candidates une expérimentation de prototype dès le printemps 2019, pour ensuite arriver à une version beta à l'automne.