
<x-layout class="home">
    <x-meta.description
        content="Nous concevons des sites internet et des applications mobiles à partir de technologies open-source, avec une approche d’artisan."
    />

    <a class="absolute top-1 left-4 sm:left-8 lg:left-16 uppercase text-xs tracking-wider underline font-bold"
        href="/en"
    >
        English version
    </a>

    <x-slot:header>
        <x-header>
            <x-header.nav-item href="#approach">
                Notre approche
            </x-header.nav-item>
            <x-header.nav-item href="#projects">
                Nos projets
            </x-header.nav-item>
            <x-header.nav-item href="#team">
                L’équipe
            </x-header.nav-item>
            <x-header.nav-item href="/blog">
                Blog
            </x-header.nav-item>
        </x-header>
    </x-slot:header>

    <h1 class="sr-only">
        Code 16, développement Laravel et Vue.js
    </h1>

    <x-section>
        <x-slot:title>
            Développement web<br>et mobile
        </x-slot:title>

        <x-paragraph>
            Nous concevons des sites internet et des applications mobiles à partir
            de technologies open-source, avec une approche d’artisan.
        </x-paragraph>

        <x-paragraph>
            Nos projets sont le fruit d'un développement sur-mesure, venant apporter des solutions à des
            problématiques qui ne sont pas forcément standard, tout en bénéficiant d’outils qui rendent
            ses utilisateurs et administrateurs autonomes au quotidien.
        </x-paragraph>

        <x-paragraph>
            Ces dernières années, notre expertise s’est principalement portée sur les
            technologies Laravel, Vue.js, Livewire, Alpine.js, Cordova...
            autour d’outils comme Algolia, AWS, Laravel Forge et Envoyer.
        </x-paragraph>
    </x-section>

    <x-section id="approach" class="bg-brand-darkblue-lighter font-medium">
        <x-ui.tabs>
            <x-ui.tab>
                <x-slot:title>
                    Nous accordons une grande importance au code
                </x-slot:title>

                <x-paragraph>
                    Notre métier est de comprendre le besoin d’un client, de la traduire en spécifications
                    partagées de part et d’autre et de le convertir finalement en code : c’est sur cela que
                    nous concentrons tous nos efforts.
                </x-paragraph>
                <x-paragraph>
                    L’expérience nous montre que ce code, pour qu’il soit fiable et qu’il puisse s’adapter
                    aux besoins futurs, doit être maîtrisé (ce qui nous pousse à ne dépendre
                    que de projets Open source), concis (pour qu’il reste compréhensible dans le temps, et
                    qu’il soit simple à remplacer en cas de nouveau besoin exprimé), et systématiquement
                    accompagné d’une suite automatisée de tests unitaires et fonctionnels (pour le valider
                    à l’écriture, et limiter au maximum les régressions au fil des versions).
                </x-paragraph>

            </x-ui.tab>

            <x-ui.tab>
                <x-slot:title>
                    Nos clients sont des partenaires
                </x-slot:title>

                <x-paragraph>
                    Plutôt que de multiplier les petits projets et les contacts, nous cherchons
                    à créer des partenariats avec nos clients pour travailler avec eux sur le long terme,
                    afin d’assurer à nos logiciels une maintenance continue.
                </x-paragraph>

                <x-paragraph>
                    Nous ne sommes ni hébergeurs, ni designers, ni conseils en marketing&nbsp;: pour ces
                    tâches nous nous entourons d’autres professionnels qualifiés.
                </x-paragraph>
            </x-ui.tab>

            <x-ui.tab>
                <x-slot:title>
                    Nous sommes impliqués dans l’Open source
                </x-slot:title>

                <x-paragraph>
                    Nous faisons massivement (et uniquement) appel à des projets Open source dans nos réalisations,
                    et nous contribuons régulièrement au code de ces projets lorsque nous trouvons un point sur lequel
                    une amélioration pourrait être apportée, que ce soit par une résolution de bug ou l’ajout d’une nouvelle
                    fonctionnalité.
                </x-paragraph>

                <x-paragraph>
                    Dans ce même esprit, nous avons développé et nous maintenons plusieurs projets Open source&nbsp;;
                    parmi eux, citons le framework de gestion de contenu Sharp for Laravel&nbsp;.
                </x-paragraph>
            </x-ui.tab>
        </x-ui.tabs>
    </x-section>

    <x-section id="projects">
        <x-slot:title>
            Sharp for Laravel,<br>
            le CMF Open Source
        </x-slot:title>

        <x-project-grid>
            <x-project-card.sharp class="col-span-full">
                Sharp est une plateforme de développement de systèmes de gestion de contenu et de données,
                généraliste et puissante. Nous l’utilisons dans beaucoup de nos projets, afin de proposer un outil
                agréable et performant permettant de mettre en ligne les pages, images, vidéos des sites aussi bien que
                d’administrer des commandes, des produits ou des inscriptions par exemple.

                <x-slot:link href="https://sharp.code16.fr">
                    Voir le site dédié
                </x-slot:link>
            </x-project-card.sharp>
        </x-project-grid>
    </x-section>

    <x-section>
        <x-slot:title>
            Sites e-commerce<br>et systèmes de gestion de commande
        </x-slot:title>

        <x-paragraph>
            Le terme e-commerce est ici entendu au sens large, puisque cette sélection regroupe des systèmes
            de vente en ligne avec livraison et des sites de commande ou réservation, avec paiement en ligne ou
            différé.
            Tous les projets sont bâtis sur une plateforme technique dédiée adaptée au besoin exprimé,
            et sont le plus souvent relié aux systèmes externes pré-existants (stocks, gestion commerciale,
            fidélité...).
        </x-paragraph>

        <x-project-grid>
            <x-project-card.ek class="col-span-full">
                <x-slot:title>
                    Marketplace avec Click and Collect et Ship from Store
                </x-slot:title>

                Nous travaillons depuis des années avec EK France, le
                groupement des magasins
                <a href="https://ambianceetstyles.com">Ambiance & Styles</a> et <a href="https://www.culinarion.com">Culinarion</a>.
                Notre champ d’action est vaste&nbsp;: sites internet avec <em>marketplace</em>, <em>Click & Collect</em>, <em>Ship from Store</em>,
                gestion de contenu marketing, synchronisation des comptes fidélité, outils intranet.

                <x-slot:link href="/p/ek-france">
                    En savoir plus
                </x-slot:link>
            </x-project-card.ek>

            <x-project-card>
                <x-slot:title>
                    Portail formations de l'Agence culturelle Grand Est
                </x-slot:title>

                <x-slot:img src="/assets/img/projects/cursus/banner.jpg"></x-slot:img>

                Pour l’Agence culturelle Grand Est,
                nous avons réalisé un portail de réservation, de prise de commande et de gestion pour
                les nombreuses formations proposées par la structure.

                <x-slot:link href="/p/cursus">
                    En savoir plus
                </x-slot:link>
            </x-project-card>

            <x-project-card>
                <x-slot:title>
                    Site événementiel à fort trafic de vente en ligne
                </x-slot:title>

                <x-slot:img src="/assets/img/projects/merkur/banner.jpg"></x-slot:img>

                Nous avons mis en place, pour le compte du Centre international d’Art Verrier de Meisenthal,
                une boutique événementielle d’objets en verre comprenant notamment leurs célèbres boules de Noël.

                <x-slot:link href="/p/merkur">
                    En savoir plus
                </x-slot:link>
            </x-project-card>
        </x-project-grid>

        <x-project-list>
            <x-project-item>
                <x-slot:title>
                    Boutique en ligne sur mesure pour une librairie
                </x-slot:title>

                <x-slot:date>
                    depuis 2020
                </x-slot:date>

                <x-slot:img src="/assets/img/projects/maktaba/thumb.png"></x-slot:img>
                <x-slot:link href="https://quaidesbrumes.com/">
                    Voir le site
                </x-slot:link>

                Développement d’un site de vente en ligne et de génération de bons cadeaux pour
                la librairie Quai des Brumes, avec un système adapté
                de suivi et traitement des commandes. Le projet comprend également une plateforme de blogs et un
                système de conception et d’expédition de newsletters.
            </x-project-item>

            <x-project-item>
                <x-slot:title>
                    Site de location de matériel scénique
                </x-slot:title>

                <x-slot:date>
                    depuis 2017
                </x-slot:date>

                <x-slot:img src="/assets/img/projects/ekip/thumb.png"></x-slot:img>
                <x-slot:link href="/p/parcs-materiels-grand-est">
                    En savoir plus
                </x-slot:link>

                Nous avons conçu et développé un système web de création de devis et de suivi
                de commandes de location de matériel scénique, sur plusieurs dépôts du Grand Est, en liaison
                étroite avec le logiciel de gestion de stock déjà en place.
            </x-project-item>
        </x-project-list>
    </x-section>

    <x-section>
        <x-slot:title>
            Portails internet et sites de contenu
        </x-slot:title>

        <x-paragraph>
            Ces projets assez divers ont tous été développés sur mesure, le plus souvent dès la conception de la
            maquette graphique. Ils sont entièrement administrés avec <a href="https://sharp.code16.fr">Sharp</a>.
        </x-paragraph>

        <x-project-grid>
            <x-project-card.acero class="col-span-full">
                <x-slot:title>
                    Site de présentation de Sycomore AM
                </x-slot:title>

                Nous avons développé pour la société de gestion d'actifs Sycomore AM un site
                multilingue riche de contenus et de données, provenant de plusieurs sources :
                une API dédiée permet de mettre à jour les données des fonds et documents, et
                <a href="https://sharp.code16.fr">Sharp</a> vient en appui pour la gestion des pages et la publication des articles.

                <x-slot:link href="https://www.sycomore-am.com">
                    Voir le site
                </x-slot:link>
            </x-project-card.acero>
        </x-project-grid>

        <x-project-list>
            <x-project-item>
                <x-slot:title>
                    Site vitrine de Peugeot Invest
                </x-slot:title>

                <x-slot:img src="/assets/img/projects/toshi/thumb.jpg"></x-slot:img>

                Développement complet du site en deux langues, présentant des contenus nombreux et variés
                dont des visualisations graphiques, et permettant des recherches documentaires plein texte au sein de fichiers PDFs.

                <x-slot:link href="https://www.peugeot-invest.com/">
                    Voir le site
                </x-slot:link>
            </x-project-item>

            <x-project-item>
                <x-slot:title>
                    Site du théâtre Le Maillon
                </x-slot:title>

                <x-slot:img src="/assets/img/projects/athena/thumb.jpg"></x-slot:img>

                Ce site présente dans deux langues la saison en cours et les archives du Maillon,
                ainsi que les nombreuses activités annexes et hors les murs du théâtre.

                <x-slot:link href="https://maillon.eu">
                    Voir le site
                </x-slot:link>
            </x-project-item>

            <x-project-item>
                <x-slot:title>
                    Site du théâtre de la Comédie de Colmar
                </x-slot:title>

                <x-slot:img src="/assets/img/projects/kolben/thumb.jpg"></x-slot:img>

                Ce site présente la programmation actuelle et les archives du théâtre,
                en respectant l'univers graphique fort développé par le studio Atelier Poste 4.

                <x-slot:link href="https://comedie-colmar.com">
                    Voir le site
                </x-slot:link>
            </x-project-item>

            <x-project-item>
                <x-slot:title>
                    Portail principal de l’Agence culturelle Grand Est
                </x-slot:title>

                <x-slot:img src="/assets/img/projects/aca/thumb.png"></x-slot:img>

                Création du portail principal de l’Agence culturelle Grand Est, chargé de nombreux contenus
                et porte d’entrée vers tous les sites et applications de l’agence ; la gestion de contenu, développée
                avec Sharp, permet une grande souplesse dans la gestion des pages du site, et de leur hiérarchie.

                <x-slot:link href="https://culturegrandest.fr">
                    Voir le site
                </x-slot:link>
            </x-project-item>
        </x-project-list>
    </x-section>

    <x-section>
        <x-slot:title>
            Applications, CRM et outils intranet
        </x-slot:title>

        <x-paragraph>
            Ces projets correspondent à des applications particulières,
            parfois adossées à des sites de contenu plus classiques.
        </x-paragraph>

        <x-project-grid>
            <x-project-card>
                <x-slot:title>
                    Plateforme de démocratie interne pour la CFDT
                </x-slot:title>

                <x-slot:img src="/assets/img/projects/syzito/banner.jpg"></x-slot:img>

                Création de la plateforme des adhérents de la CFDT, présentant tous les débats et webinaires
                proposés dans le cadre de la démocratie interne du syndicat, et permettant de s’y inscrire, ou d’en
                proposer des nouveaux. Toute la gestion des inscriptions, débats, propositions et du contenu est
                intégrée dans Sharp.

                <x-slot:link href="https://jeparticipe.cfdt.fr/">
                    Voir le site
                </x-slot:link>
            </x-project-card>

            <x-project-card>
                <x-slot:title>
                    Application / CRM de mise en relation
                </x-slot:title>

                <x-slot:img src="/assets/img/projects/barbon/banner.jpg"></x-slot:img>

                Développement pour le compte de <a href="https://www.bureau132.fr/">Bureau 132</a>
                d’une application de mise en relation de clients et de courtiers en assurance,
                avec gestion d'un workflow complet de demande de devis.

                <x-slot:link href="/posts/a-full-app-in-sharp">
                    Lire le blog (en)
                </x-slot:link>
            </x-project-card>
        </x-project-grid>

        <x-project-list>
            <x-project-item>
                <x-slot:title>
                    Plateforme de spectacle vivant du Grand Est
                </x-slot:title>

                <x-slot:img src="/assets/img/projects/treto/thumb.png"></x-slot:img>

                Nous avons conçu et construit la <a href="https://treto.fr/">plateforme du spectacle vivant</a>
                dans le Grand Est, qui regroupe les salles, compagnies et bureaux de production sur une carte avec de nombreux outils
                de filtrage et recherche. La plateforme propose également des outils de publication d’annonces, de calendriers de spectacle...

                <x-slot:link href="/p/treto">
                    En savoir plus
                </x-slot:link>
            </x-project-item>

            <x-project-item>
                <x-slot:title>
                    Application mobile touristique
                </x-slot:title>

                <x-slot:img src="/assets/img/projects/trig/thumb.png"></x-slot:img>

                Le Domaine de la Trigalière, qui loue des belles maisons de
                campagne,
                nous a demandé de réaliser une application mobile (iOS et Android) pour assister les hôtes en les
                orientant vers les
                nombreux points d’intérêt de sa forêt de 1200 hectares.

                <x-slot:link href="/p/trig">
                    En savoir plus
                </x-slot:link>
            </x-project-item>

            <x-project-item>
                <x-slot:title>
                    Suite d’outils CRM, SSO, intranet
                </x-slot:title>

                <x-slot:img src="/assets/img/projects/beatus/thumb.jpg"></x-slot:img>

                L’Agence culturelle Grand Est
                nous a confié au fil du temps de nombreux projets, reliés entre eux
                par un système de comptes <em>Single Sign On</em> personnalisé et par des synchronisations API.
                Nous avons développé un outil CRM (<em>Customer Relationship Manager</em>) sur mesure,
                pour centraliser les contacts de l’Agence et de proposer des outils adaptés de gestion&nbsp;;
                nous avons également écrit une plateforme intranet intégrant de nombreux outils à partir de
                données externes variées.
            </x-project-item>
        </x-project-list>
    </x-section>

    <x-section id="team">
        <x-slot:title>
            L’équipe
        </x-slot:title>

        <x-team-member-item :member="$page->developers['philippe']">
            Fondateur de Code 16, gérant de l’entreprise et développeur principal
            de plusieurs projets.
            <br>
            <a href="mailto:philippe@code16.fr">email</a>,
            <a href="{{ $page->developers['philippe']->twitter }}">twitter</a>,
            <a href="{{ $page->developers['philippe']->linkedIn }}">linkedIn</a>
        </x-team-member-item>

        <x-team-member-item :member="$page->developers['antoine']">
            Responsable du développement <em>front</em>, à la fois sur les sites et sur les applications mobiles&nbsp;;
            il travaille le plus souvent avec Inertia, Alpine.js, Vue.js, Tailwind et Livewire.
            <br>
            <a href="{{ $page->developers['antoine']->linkedIn }}">linkedIn</a>
        </x-team-member-item>

        <x-team-member-item :member="$page->developers['lucien']">
            Développeur <em>back</em> spécialiste de PHP et Laravel avec une orientation infrastructure / devops,
            il intervient sur tous les projets.
            <br>
            <a href="{{ $page->developers['lucien']->linkedIn }}">linkedIn</a>
        </x-team-member-item>

        <x-paragraph>
            —<br>
            Bien entendu, lorsque le projet le requiert, nous savons nous entourer de compétences externes,
            qu’il s’agisse d’autres développeurs, de graphistes ou de designers.
        </x-paragraph>
    </x-section>

    <x-footer />
</x-layout>
