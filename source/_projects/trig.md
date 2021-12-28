---
extends: _layouts.project
section: projectContent
title: Trigalière
carouselWidth: 30rem
---

**Application mobile d'aide touristique : géolocalisation, points d'intérêt, favoris, synchronisation de contenu.**

Le Domaine de la Trigalière est vaste : 1200 hectares de forêt, au sein de laquelle sont disséminées une dizaine de maisons que les visiteurs peuvent louer. Ils peuvent ensuite profiter de la forêt pour s'y promener, y découvrir sa faune et sa flore, participer à des activités sportives ou culturelles, ou encore visiter l'arboretum du Chêne. Le but de l'application mobile que nous avons développée est d'orienter les hôtes vers tous ces points d'intérêt, à l'aide d'une carte du domaine sur laquelle il est géolocalisé, au milieu de tous les points d'intérêts.

![Carte](/assets/img/trig/map.png)
La carte est une extraction personnalisée d'Open Street Maps.
![Apercu](/assets/img/trig/quickview.png)
Cliquer sur un POI ouvre un apercu, sur mobile.
![POI](/assets/img/trig/poi.png)
La page d'un POI dont le contenu est relativement libre, et peut inclure des photos et des vidéos.
![Filtres](/assets/img/trig/filters.png)
L'utilisateur peut filtrer les POI par intérêt.
![Code](/assets/img/trig/code.png)
Certaines parties du Domaine proposent des cartels sur lesquels des codes sont inscrits, affichant une fiche sur l'application.

Tout le contenu est administré sur une application Laravel / Sharp. L'application y accède au moyen d'une API dédiée, mais comme 80% du domaine est sans réseau, l'application enregistre en local toutes les informations, puis synchronise les mises à jour au besoin lorsqu'elle retrouve du réseau.

Trig fonctionne sur smartphone et tablette, et existe en version [iOS](https://itunes.apple.com/fr/app/trigali%C3%A8re/id1332741594?mt=8) et [Android](https://play.google.com/store/apps/details?id=fr.code16.trig).



