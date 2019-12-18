---
extends: _layouts.project
section: projectContent
title: Treto

---

**Plateforme du spectacle vivant du Grand Est**

[Treto](https://treto.fr/) est la plateforme d’information et de communication dans le domaine du spectacle vivant du Grand Est, portée par l'[Agence culturelle Grand Est](https://culturegrandest.fr/).

L'idée de la plateforme Treto est de réunir en un annuaire augmenté trois grandes catégories de structures : les lieux de création et de diffusion, les équipes artistiques professionnelles et les bureaux de production, sous réserve de répondre à certains critères. L'annuaire est présenté sous forme de carte ou de liste, et propose de filtres divers.

![Carte](/assets/img/treto/map.png)
La carte avec géolocalisation des différentes structures
![Critères](/assets/img/treto/criteria.png)
Un exemple de critère de lieu
![Fiche structure](/assets/img/treto/show.png)
Une fiche de structure

Nous avons particulièrement travaillé les versions mobile et tablette de l'application, pour rendre son utilisation vraiment adaptée aux petits écrans et au tactile.

![Carte](/assets/img/treto/xs/map.png)
Les critères se replient en mode carte pour laisser l'espace
![Critères](/assets/img/treto/xs/criteria.png)
Valuation d'un critère
![Fiche structure](/assets/img/treto/xs/show.png)
Une fiche de structure

L'inscription à l'annuaire se fait via une procédure de candidature en deux étapes, avec gestion d'un compte personnel lié à Sola, la plateforme SSO spécialement développée pour tous les projets de l'Agence culturelle.

Côté administration du projet, nous avons mis en place un workflow de validation qui s'opère via [Sharp](https://sharp.code16.fr), l'outil de gestion Open source développé par Code 16.

![Compte](/assets/img/treto/account.png)
Le remplissage d'une fiche côté compte membre
![Administration](/assets/img/treto/sharp.png)
Le tableau de bord indiquant aux administrateurs l'état de validation des candidatures

Le projet a été conçu pour évoluer dans les prochains mois, avec par exemple l'accueil de nouvelles catégories de structures, et l'ajout d'un calendrier de tournée des compagnies.