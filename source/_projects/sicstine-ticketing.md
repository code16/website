---
extends: _layouts.project
section: projectContent
title: Projet Sicstine — billetterie
---

[< Retour](/p/sicstine2)

# Sictine est une billetterie connectée

Première grande brique de Sicstine, le module billetterie dématérialisée, qui permet de définir des tarifs unitaires, des formules d'abonnement, des quotas, des compléments (type transports en bus) pour des manifestations.

Une fois tout ceci mis en place, l'application reliée (le site internet, l'app mobile, ...) s'y connecte et présente les choses au public de la manière de son choix. On pourrait par exemple avoir tout à la fois un mode panier libre sur le site, une solution axée sur les recommandations sur une app mobile, ou encore un mode direct d'achat à l'unité sur une borne "dernière minute" : l'important est de comprendre que rien n'est imposé sur la forme, tous ces systèmes sont techniquement rattachés à Sicstine en arrière plan.

## Génération de billets
Une fois la transaction terminée, Sicstine génère des QR codes sécurisés de billetterie dématérialisée, et permet à l'application de les transmettre de la manière la plus adaptée ; par exemple un lien de téléchargement d'un PDF à imprimer sur le site, un code "Wallet" sur smartphone, ...

## Suivi de billetterie
L'administrateur peut bien entendu se connecter à Sicstine et accéder à un tableau de bord de la billetterie, pour y consulter les chiffres et tendances, et gérer les commandes.

## Option de prise en charge du paiement
Sicstine propose en option un système de paiement en ligne, géré par [Stripe](https://stripe.com), pour dégager l'application cliente de toute la gestion de la transaction.

## [Sicstine est un gestionnaire central de données >](/p/sicstine-crm)
 
