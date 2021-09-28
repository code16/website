---
extends: _layouts.project
section: projectContent
title: Cursus

---

**Plateforme de commande et de gestion de formations.**

L’Agence culturelle Grand Est propose de nombreuses formations à ses publics, tout au long de l’année. Elles ont très diverses&nbsp;: certaines sont payantes et concernent des petites jauges, d’autres sont des conférences pour lesquelles il faut un système de contrôle de billets (scan QR Code).

![Formations](/assets/img/cursus/courses.png)
La liste des formations à venir, avec ses filtres
![Formation](/assets/img/cursus/course.png)
La page de détail d’une formation
![Commande](/assets/img/cursus/register.png)
Le tunnel de prise de commande, qui peut selon les cas contenir jusqu’à 8 étapes 
![Compte](/assets/img/cursus/account.png)
Le formé retrouve toutes ses commandes et inscriptions dans son compte.

À la prise de commande, le client peut être amené, pour chaque inscrit, à préciser des souhaits de repas, un tarif de formation, des options de salles ou d’horaires, mais aussi à remplir un formulaire dédié de candidature (qui sera ensuite traité par les responsables de la formation dans l’outil de gestion) par exemple. 

La consultation des formations et la prise de commande peut se faire depuis des sites web différents, ce qui a été rendu possible grâce au système de comptes *Single Sign On* que nous avons mis en place pour tous les projets de l’Agence. C'est également utile pour permettre au client de passer directement de son compte formations à son compte [location de matériel](/p/parcs-materiels-grand-est), par exemple.

![Ekip](/assets/img/cursus/ekip.png)
Un exemple de consultation des formatons depuis le site des Parcs de location...
![Acajou](/assets/img/cursus/acajou.png)
... ou depuis celui du cinéma et des tournages.

Le système est comme souvent entièrement administré par [Sharp](https://sharp.code16.fr)&nbsp;: le contenu (formations, sessions...) mais aussi les commandes et leur suivi, les inscrits, les candidatures, le lien avec [Beatus](/p/beatus) (le CRM de l’Agence Culturelle) ou avec Weezevent qui a été choisi pour gérer l’aspect contrôle des entrées lorsque c'est nécessaire.

![Sharp : formation](/assets/img/cursus/sharp-course.png)
La page de détail d’une formation, avec son unique session
![Sharp : commande](/assets/img/cursus/sharp-form.png)
Une partie du formulaire de contenu d’une formation 
![Sharp : articles](/assets/img/cursus/sharp-registrant.png)
Les inscriptions sont consultables et exportables, et peuvent être traités et suivies
