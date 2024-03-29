---
title: Beatus CRM

---

**Conception et développement d'un logiciel de gestion de contacts évolué et sur mesure.**

Beatus est un outil CRM (_Customer Relationship Management_) développé sur mesure pour le compte de l'Agence culturelle Grand Est, avec comme objectif de centraliser les divers contacts de l'Agence et de proposer des outils adaptés de gestion de ces contacts.

Pour la gestion pure de contacts, Beatus intègre un annuaire complet avec recherche simple ainsi qu'un moteur de recherche avancé, dont les critères peuvent être enregistrés et partagés entre utilisateurs.

![Recherche](/assets/img/projects/beatus/2019/search-criteria.png)
Les critères de recherche possibles sont nombreux et correspondent à l'actiivté de l'Agence
![Recherche](/assets/img/projects/beatus/2019/search.png)
Un exemple de recherche lié à une activité de l'Agence, pour une région donnée

Chaque contact propose une fiche et un formulaire de modification, dont l'ergonomie a été particulièrement travaillée avec le client pour faciliter les saisies, souvent en liaison avec d'autres données.

![Fiche](/assets/img/projects/beatus/2019/show.png)
La fiche d'un contact structure
![Formulaire](/assets/img/projects/beatus/2019/form.png)
Une partie du formulaire de modification
![Activité](/assets/img/projects/beatus/2019/activity.png)
Des activités poteuses de données spécifiques peuvent être rattachées aux structures, soit directement dans Beatus, soit via API

Un système de «&nbsp;Paniers&nbsp;» permet de regrouper des recherches et de créer une sélection dynamique de contacts, que l'utilisateur peut ensuite partager, exporter, ou encore utiliser pour une campagne courrier (impression d'étiquettes, dont la mise en forme est gérée via un template), SMS ou emailing (en liaison API avec des plateformes externes).

Une des difficultés que nous avons eu à traiter est de déterminer à quel titre un individu donné doit être contacté ; prenons par exemple un emailing envoyé à tous les directeurs de lieu culturel d'une région donnée : une fois les critères de recherche établis, la campagne qui en découle doit bien contacter telle personne sur son email de directeur, et pas sur son email personnel qui pourrait aussi être présent à un autre titre.

![Campagne](/assets/img/projects/beatus/2019/campaign.png)

Beatus est central dans le système d'informations de l'Agence culturelle Grand Est : il est connecté à Sola, un système de gestion de comptes _Single Sign On_ que nous avons mis en œuvre pour l'Agence, et propose en outre une API externe privée utilisée par les autres sites ou applications : le [site de location de matériel scénique](/p/parcs-materiels-grand-est), par exemple, s'en sert pour y notifier que telle structure a passé telle commande, à des fins de suivi statistique et de consolidation des données client.
