@extends('_layouts.master', [
    'background' => 'brand-darkblue',
    'lang' => 'fr',
    'bodyClass' => 'home',
    'headerClass' => 'text-brand-brown bg-brand-white'
])

@section('content')
    <div class="text-brand-white">
        @component('_partials.section', ['large'=>true])
            @component('_partials.paragraph')
                @slot('title')
                    Développement web de qualité
                @endslot
                Nous concevons depuis 2007 des sites internet et des applications mobiles à partir
                de technologies open-source, avec une approche d’artisan&nbsp;: un développement sur-mesure
                qui permet d’avoir la main à tous les niveaux.
                Ces dernières années, notre expertise s’est principalement portée sur les
                technologies <a href="https://laravel.com" class="regular">Laravel</a>
                et <a href="https://vuejs.org/" class="regular">Vue.js</a>.
            @endcomponent
            @component('_partials.paragraph')
                Nos clients ont un point commun&nbsp;: ils veulent une solution adaptée à un
                problème qui n'est pas forcément standard, tout en bénéficiant d’outils qui les rendent
                autonomes au quotidien.
            @endcomponent
        @endcomponent

        @component('_partials.section')
            @slot('title')
                Notre approche
            @endslot
            @component('_partials.paragraph')
                @slot('title')
                    Nous accordons une<br>(très) grande importance au code
                @endslot
                Notre métier est de comprendre le besoin d’un client, de la traduire en spécifications
                partagées de part et d’autre et de le convertir finalement en code : c'est sur cela que
                nous concentrons tous nos efforts.
            @endcomponent
            @component('_partials.paragraph')
                L’expérience nous montre que ce code, pour qu’il soit fiable et qu’il puisse s’adapter
                aux besoins futurs, doit être maîtrisé (ce qui nous pousse à ne dépendre
                que de projets Open source), concis (pour qu’il reste compréhensible dans le temps, et
                qu’il soit simple à remplacer en cas de nouveau besoin exprimé), et systématiquement
                accompagné d’une suite automatisée de tests unitaires et fonctionnels (pour le valider
                à l’écriture, et limiter au maximum les régressions au fil des versions).
            @endcomponent
            @component('_partials.paragraph')
                @slot('title')
                    Nos clients sont des partenaires
                @endslot
                Plutôt que de multiplier les petits projets et les contacts, nous cherchons
                à créer des partenariats avec nos clients pour travailler avec eux sur le long terme,
                afin d’assurer à nos logiciels une maintenance continue. Ainsi, nous sommes fiers de travailler
                depuis de nombreuses années avec Ek France, l'Agence culturelle Grand Est
                ou le théâtre Le Maillon, pour citer quelques exemples.
            @endcomponent
            @component('_partials.paragraph')
                @slot('title')
                    Nous sommes impliqués<br>dans l’Open source
                @endslot
                Nous faisons massivement (et uniquement) appel à des projets Open source dans nos réalisations,
                et nous contribuons régulièrement au code de ces projets lorsque nous trouvons un point sur lequel
                une amélioration pourrait être apportée, que ce soit par une résolution de bug ou l’ajout d’une nouvelle fonctionnalité.
            @endcomponent
            @component('_partials.paragraph')
                Dans le même esprit, nous avons développé et nous maintenons plusieurs projets Open source, parmi lesquels&nbsp;:
            @endcomponent

            <div class="flex items-center mb-2 paragraph">
                <img class="mr-4 h-16 w-16 rounded" src="assets/img/opensource/sharp.png" alt="">
                <span>
                    <a href="https://sharp.code16.fr">Le framework de gestion de contenu Sharp</a>,
                    qui sert d’outil d’administration pour bon nombre de nos projets.
                </span>
            </div>

            <div class="flex items-center paragraph">
                <img class="mr-4 h-16 w-16 rounded" src="assets/img/opensource/formoj.png" alt="">
                <span>
                    <a href="https://github.com/code16/formoj">Le générateur de formulaires Formoj</a>,
                    qui propose une solution simple pour créer, afficher et administrer des formulaires sur un site.
                </span>
            </div>
        @endcomponent

        @component('_partials.section')
            @slot('title')
                E-commerce
            @endslot
            @component('_partials.paragraph')
                @slot('title')
                    Projets e-commerce et systèmes de gestion de commande
                @endslot
                Le terme e-commerce est ici entendu au sens large, puisque cette sélection regroupe des systèmes
                de vente en ligne avec livraison et des sites de commande ou réservation, avec paiement en ligne ou différé. 
                Tous les projets sont bâtis sur une plateforme technique dédiée, adaptée au besoin exprimé, 
                et sont le plus souvent relié aux systèmes externes pré-existants (stocks, gestion commerciale, fidélité...).
            @endcomponent
            @component('_partials.paragraph', ['separator' => true])
                @slot('subtitle')
                    Projet EK France
                @endslot
                @slot('date')
                    depuis 2015
                @endslot
                @slot('banner')
                    assets/img/ek/banner.png
                @endslot
                @slot('link')
                    /p/ek-france
                @endslot
                Nous travaillons depuis des années avec <span class="text-brand-cyan-lighter">EK France</span>, le groupement des magasins
                <a href="https://ambianceetstyles.com" class="regular">Ambiance & Styles</a> et <a href="https://www.culinarion.com" class="regular">Culinarion</a>.
                Notre champ d’action est vaste&nbsp;: sites internet
                avec <em>marketplace</em>, <em>Click & Collect</em>, <em>Ship from Store</em>, 
                gestion de contenu marketing, synchronisation des comptes fidélité, outils intranet.
            @endcomponent
            @component('_partials.paragraph', ['separator' => true])
                @slot('subtitle')
                    Projet Cursus
                @endslot
                @slot('date')
                    depuis 2021
                @endslot
                @slot('banner')
                    assets/img/cursus/banner.png
                @endslot
                @slot('link')
                    /p/cursus
                @endslot
                Pour <span class="text-brand-cyan-lighter">l‘Agence culturelle Grand Est</span>,
                nous avons réalisé un portail de réservation, de prise de commande et de gestion pour
                les nombreuses formations proposées par la structure.
            @endcomponent
            @component('_partials.paragraph', ['separator' => true])
                @slot('subtitle')
                    Projet Merkur
                @endslot
                @slot('date')
                    depuis 2020
                @endslot
                @slot('thumbnail')
                    assets/img/merkur/thumb.png
                @endslot
                @slot('link')
                    /p/merkur
                @endslot
                Nous avons mis en place, pour le compte du <span class="text-brand-cyan-lighter">Centre international d'Art Verrier de Meisenthal</span>, 
                une boutique événementielle d’objets en verre comprenant notamment leurs célèbres boules de Noël.
            @endcomponent
            @component('_partials.paragraph', ['separator' => true])
                @slot('subtitle')
                    Projet Maktaba
                @endslot
                @slot('date')
                    depuis 2020
                @endslot
                @slot('thumbnail')
                    assets/img/maktaba/thumb.png
                @endslot
                @slot('web')
                    https://quaidesbrumes.com/
                @endslot
                Développement d'un site de vente en ligne et de génération de bons cadeaux pour 
                la <span class="text-brand-cyan-lighter">librairie Quai des Brumes</span>, avec un système adapté
                de suivi et traitement des commandes. Le projet comprend également une plateforme de blogs et un 
                système de conception et d'expédition de newsletters.
            @endcomponent
            @component('_partials.paragraph')
                @slot('subtitle')
                    Projet Ekip
                @endslot
                @slot('date')
                    depuis 2017
                @endslot
                @slot('thumbnail')
                    assets/img/ekip/thumb.png
                @endslot
                @slot('link')
                    /p/parcs-materiels-grand-est
                @endslot
                Nous avons conçu et développé un système web de création de devis et de suivi
                de commandes de location de matériel scénique, sur plusieurs dépôts du Grand Est, en liaison
                étroite avec le logiciel de gestion de stock déjà en place.
            @endcomponent
        @endcomponent
        @component('_partials.section')
            @slot('title')
                Sites de contenu
            @endslot
            @component('_partials.paragraph')
                @slot('title')
                    Portails internet et sites de contenu
                @endslot
                Ces projets assez divers ont tous étés développés sur mesure, le plus souvent dès la conception de la maquette graphique,
                et sont entièrement administrés avec <a href="https://sharp.code16.fr">Sharp</a>.
            @endcomponent
            @component('_partials.paragraph', ['separator' => true])
                @slot('subtitle')
                    Projet Syzito
                @endslot
                @slot('date')
                    depuis 2021
                @endslot
                @slot('banner')
                    assets/img/syzito/banner.jpg
                @endslot
                @slot('web')
                    https://jeparticipe.cfdt.fr/
                @endslot
                Création de la plateforme des adhérents de la <span class="text-brand-cyan-lighter">CDFT</span>, présentant tous les débats et webinaires 
                proposés dans le cadre de la démocratie interne du syndicat, et permettant de s’y inscrire, ou d’en
                proposer des nouveaux. Toute la gestion des inscriptions, débats, propositions et du contenu est intégrée
                dans Sharp.
            @endcomponent
            @component('_partials.paragraph', ['separator' => true])
                @slot('subtitle')
                    Projet Symfonia
                @endslot
                @slot('date')
                    depuis 2021
                @endslot
                @slot('banner')
                    assets/img/symfonia/banner.jpg
                @endslot
                @slot('web')
                    https://www.pactedupouvoirdevivre.fr/
                @endslot
                    Développement du site et de la gestion de contenu du <span class="text-brand-cyan-lighter">Pacte du pouvoir de vivre</span>, une alliance de plus de 
                    60 organisations acteurs majeurs dans la protection de l’environnement, la lutte contre la pauvreté, le soutien aux migrants, 
                    l’éducation populaire, de l’économie sociale et solidaire et de la mutualité.
                @endcomponent
            @component('_partials.paragraph', ['separator' => true])
                @slot('subtitle')
                    Projet Acacia
                @endslot
                @slot('date')
                    depuis 2016
                @endslot
                @slot('thumbnail')
                    assets/img/aca/thumb.png
                @endslot
                @slot('web')
                    https://culturegrandest.fr
                @endslot
                Création du portail principal de <span class="text-brand-cyan-lighter">l’Agence culturelle Grand Est</span>, chargé de nombreux contenus
                et porte d’entrée vers tous les sites et applications de l'agence ; la gestion de contenu, développée
                avec Sharp, permet une grande souplesse dans la gestion des pages du site, et de leur hiérarchie.
            @endcomponent
            @component('_partials.paragraph', ['separator' => true])
                @slot('subtitle')
                    Projet Maillon
                @endslot
                @slot('date')
                    depuis 2014
                @endslot
                Le site multilingue du <span class="text-brand-cyan-lighter">théâtre Le Maillon</span>,
                qui présente, en respectant l'univers graphique de ce lieu emblématique de Strasbourg, les spectacles de la saison et
                les autres activités du théâtre, et propose surtout une gestion avancée de compte et de billetterie entièrement pensée et développée sur mesure.
                @slot('thumbnail')
                    assets/img/maillon/thumb.png
                @endslot
                @slot('web')
                    https://maillon.eu
                @endslot
            @endcomponent
            @component('_partials.paragraph')
                @slot('subtitle')
                    Projet Musica
                @endslot
                @slot('date')
                    depuis 2017
                @endslot
                Création du site du <span class="text-brand-cyan-lighter">festival international de musique contemporaine Musica</span>,
                accompagné de ses bases de ressources (biographies des très nombreux artistes ayant participé au festival et répertoire des œuvres jouées).
                @slot('thumbnail')
                    assets/img/musica/thumb.png
                @endslot
                @slot('web')
                    https://festivalmusica.fr
                @endslot
            @endcomponent
        @endcomponent
        @component('_partials.section')
            @slot('title')
                Applications et outils
            @endslot
            @component('_partials.paragraph')
                @slot('title')
                    Applications, CRM et outils intranet
                @endslot
                Ces projets correspondent à des applications particulières, parfois adossées à des sites de contenu plus classiques. 
            @endcomponent
            @component('_partials.paragraph', ['separator' => true])
                @slot('subtitle')
                    Projet Treto
                @endslot
                @slot('banner')
                    assets/img/treto/banner.png
                @endslot
                @slot('date')
                    depuis 2019
                @endslot
                @slot('link')
                    /p/treto
                @endslot
                Nous avons conçu et construit la <a href="https://treto.fr/" class="regular">plateforme du spectacle vivant</a> dans le Grand Est,
                qui regroupe les salles, compagnies et bureaux de production sur une carte aec de nombreux outils
                de filtrage et recherche. La plateforme propose également des outils de publication d’annonces, de
                calendriers de spectacle...
            @endcomponent
            @component('_partials.paragraph', ['separator' => true])
                @slot('subtitle')
                    Projet Trig
                @endslot
                @slot('thumbnail')
                    assets/img/trig/thumb.png
                @endslot
                @slot('date')
                    depuis 2018
                @endslot
                @slot('link')
                    /p/trig
                @endslot
                Le <span class="text-brand-cyan-lighter">Domaine de la Trigalière</span>, qui loue des belles maisons de campagne,
                nous a demandé de réaliser une application mobile (iOS et Android) pour assister les hôtes en les orientant vers les
                nombreux points d’intérêt de sa forêt de 1200 hectares.
            @endcomponent
            @component('_partials.paragraph', ['separator' => true], ['separator' => true])
                @slot('subtitle')
                    Projet Beatus
                @endslot
                @slot('thumbnail')
                    assets/img/beatus/thumb.png
                @endslot
                @slot('date')
                    depuis 2015
                @endslot
                @slot('link')
                    /p/beatus
                @endslot
                L’<span class="text-brand-cyan-lighter">Agence culturelle Grand Est</span>
                nous a confié au fil du temps de nombreux projets, reliés entre eux
                par un système de comptes <em>Single Sign On</em> personnalisé et par des synchronisations API. 
                Nous avons tout d’abord développé un outil CRM (<em>Customer Relationship Manager</em>) sur mesure, 
                pour centraliser les contacts de l'Agence et de proposer des outils adaptés de gestion.
            @endcomponent
            @component('_partials.paragraph')
                @slot('subtitle')
                    Projet Sapidus
                @endslot
                @slot('link')
                    /p/sapidus
                @endslot
                @slot('date')
                    depuis 2016
                @endslot
                Nous avons également écrit une plateforme intranet intégrant de nombreux
                outils à partir de données externes variées.
            @endcomponent
        @endcomponent
        @component('_partials.section')
            @component('_partials.paragraph')
                @slot('subtitle')
                    D'autres références
                @endslot
                Parmi les autres projets de plus petite taille ou plus anciens, citons le site internet avec 
                prise de réservation de l’excellente <a href="https://librairie-amateur.com/" class="regular">Librairie de l'Amateur</a>, 
                le site de la <a href="https://revue-radar.fr/" class="regular">revue Radar</a> pour le compte de l'Université de Strasbourg, avec des outils de commentaire et de prise de note,
                ou encore le site internet et un CRM dédié pour le compte du <a href="http://ciav-meisenthal.fr/" class="regular">Centre international d'Art Verrier de Meisenthal</a>.
            @endcomponent
        @endcomponent

        @component('_partials.section')
            @slot('title')
                L'équipe
            @endslot
            @component('_partials.paragraph')
                @slot('subtitle')
                    <div class="flex items-center mb-2">
                        <img class="mr-2 h-12 w-12 rounded-full" src="https://gravatar.com/avatar/{{ md5('philippelonchampt@gmail.com') }}?d=retro" alt="">
                        <span>Philippe Lonchampt</span>
                    </div>
                @endslot
                Fondateur de Code 16 (anciennement nommé Développlan), gérant de l'entreprise et développeur principal de plusieurs projets.
                <br><a href="mailto:philippe@code16.fr">email</a>, <a href="https://twitter.com/dvlpp">twitter</a>
            @endcomponent
            @component('_partials.paragraph')
                @slot('subtitle')
                    <div class="flex items-center mb-2">
                        <img class="mr-2 h-12 w-12 rounded-full" src="https://gravatar.com/avatar/{{ md5('arnaud.becher@gmail.com') }}?d=retro" alt="">
                        <span>Arnaud Becher</span>
                    </div>
                @endslot
                Développeur <em>back</em> expérimenté, spécialiste de PHP et Laravel, il intervient sur tous les projets.
            @endcomponent
            @component('_partials.paragraph')
                @slot('subtitle')
                    <div class="flex items-center mb-2">
                        <img class="mr-2 h-12 w-12 rounded-full" src="https://gravatar.com/avatar/{{ md5('guingand.antoine@gmail.com') }}?d=retro" alt="">
                        <span>Antoine Guingand</span>
                    </div>
                @endslot
                Reponsable du côté <em>front</em>, à la fois sur les sites et sur les applications mobiles&nbsp;; il travaille le plus souvent avec Vue.js, Alpine.js ou Livewire.
            @endcomponent
            @component('_partials.paragraph')
                —<br>
                Bien entendu, lorsque le projet le requiert, nous savons nous entourer de compétences externes,
                qu’il s’agisse d’autres développeurs, de graphistes ou de designers.
            @endcomponent
        @endcomponent
    </div>

    <div class="text-brand-white">
        @component('_partials.section', ['large'=>true])
            Code 16<br>
            <a href="http://www.gothamscm.com/" class="regular">SCM Gotham</a><br>
            24 rue du Vieux marché aux Vins, 67000 Strasbourg, France<br>
            Philippe Lonchampt : <a href="mailto:philippe@code16.fr" class="regular">philippe@code16.fr</a><br>
            <a href="https://github.com/code16" class="regular">Github</a> — <a href="https://medium.com/code16" class="regular">Medium</a>
        @endcomponent
    </div>
@endsection