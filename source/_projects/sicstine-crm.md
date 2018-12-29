---
extends: _layouts.project
section: projectContent
title: Projet Sicstine — CRM
---

[< Retour](/p/sicstine-ticketing)

# Sictine est un gestionnaire central de données

Deuxième brique, et c'est la plus importante : la gestion centralisée des données, récoltées automatiquement. On appelle communément ce type de logiciel CRM, pour _Customer Relationship Management_ (Gestion de relation client).

L'administeur peut, en se connectant à l'interface de Sicstine, consulter des informations telles que les spectacles les plus populaires en terme de visites, de mise au panier ou d'achat pour une période donnée, comparer le ratio abonnement / unitaire pour un spectacle, observer la temporalité de remplissage d'une jauge de quota (heure d'achat / dernière minute), analyser les origines de l'achat, ... Mais aussi observer les grandes tendances : les acheteurs de tel spectacle ont aussi acheté tel autre, ou consulté telle page.
Le système, par son aspect central et connecté, regroupe les informations de toutes les applications : le site internet, la borne d'achat de l'accueil, l'app mobile, le site événementiel de tel festival, ...
Sicstine est en outre relié aux traqueurs de source pour analyser d'où viennent les visites (emailing, réseaux sociaux, contenu sponsorisé, ...), et ainsi pouvoir indiquer que tel achat correspond à un visiteur arrivé depuis un post Facebook par exemple.

## Comment les données sont-elles récoltées ?

Ce point est très important : la collecte de données doit se faire de manière automatisée, pour qu'elle soit fiable et généralisée. Mais la question est : comment remonter ces informations, depuis tout type d'application numérique ? Sicstine permet la mise en place de "balises", au sein des applications du lieu (site internet, app mobile, ...), qui une fois activées alimentent automatiquement la base de données de manière brute ; après des traitements automatiques de consolidation et de nettoyage, les données sont immédiatement exploitables.

Par exemple, la mise au panier d'un spectacle, sur le site internet, pourrait déclencher une balise vers Sicstine, ce qui permettra évidemment à l'administrateur d'avoir le chiffre brut (il y a eu X mises au panier de tel spectacle lors de telle période), mais aussi de se servir de cette information pour la croiser avec d'autres :  
\- combien de visiteurs en provenance de telle newsletter on mis tel spectacle au panier ?  
\- ou encore : combien d'acheteurs de tel spectacle avaient à un moment de leur achat tel autre au panier ?  
\- ou même : combien de personnes ont envisagé l'achat de tel spectacle, mais ont abandonné leur panier ?

![Billetterie](/assets/img/sicstine/crm.png)

1. Le développeur du site internet ou de toute autre application permettant la prise de billets intègre Sicstine dans le code.
2. Le visiteur navigue sur le site ou l'app, consulte des pages, passe commande, ... Toutes les actions jugées pertinentes sopnt remontées dans Sicstine.
3. L'administrateur consulte dans Sicstine toutes les données de comportement, en tire des ensembles et lance des actions de communication adaptées. 

---

## Que faire de ces données ?

Ces données servent à qualifier ses visiteurs, clients, ... en un mot des publics, dans leur masse. Il ne faut pas voir Sicstine comme un moyen de traquer tel ou tel abonné, mais plutôt comme une solution de découpe précise du public : en interrogeant Sicstine via des critères, on obtient des listes, qui peuvent ensuite faire l'objet de campagnes ciblées.

Typiquement, si on a réussi à détacher les personnes non abonnées, ayant un comportement d'achat de dernière minute qui aiment le théâtre, on peut escompter un bon retour sur une campagne ciblée à leur attention pour remplir une représentation du soir même.

Mais ces données peuvent aussi avoir une utilisation plus générale : mieux connaître son public et son comportement face à certaines propositions ; comparer des données sur des longues périodes (entre trimestres, saison, ...).


## Quid de la législation ?

La récolte et le stockage des données personnelles est un sujet dont la réglementation a fortement évolué récemment, avec la loi RGPD. Sicstine est bien évidemment une solution qui respecte le loi, mais va même plus loin : elle aide ses structures clientes à rester dans les clous. 

En effet, le système prend en charge la récolte du consentement, la sécurisation des informations, l'anonymisation des données remontées par les traqueurs, la suppression automatique des données d'un client après le délai légal. Les bases de données sont hébergées en France, et l'ensemble des informations traitées restera la propriété pleine et entière de la structure cliente, sans que Code 16 ne s'en serve d'une quelconque manière.

Sicstine propose en option une intégration directe avec une plateforme professionnelle d'envoi de newsletter pour simplifier le processus d'expédition et proposer des outils d'analyse des statistiques de réception ; cette intégration est aussi une manière de garantir le respect de la législation sur cette partie sensible qu'est le contact via newsletter.


## [Sicstine est un gestionnaire de contenu >](/p/sicstine-cms)
 
