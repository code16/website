
<x-layout class="home">

{{--    <x-slot:nav>--}}
{{--        <x-nav active="home" />--}}
{{--    </x-slot:nav>--}}

    <x-slot:header>
        <x-header />
    </x-slot:header>

    <h1 class="sr-only">
        Code 16, développement Laravel et Vue.js
    </h1>

    <x-section large>
        <x-paragraph>
            <x-slot:title>
                Développement web<br>et mobile
            </x-slot:title>
            Nous concevons des sites internet et des applications mobiles à partir
            de technologies open-source, avec une approche d’artisan.
        </x-paragraph>

        <x-paragraph>
            Nos projets sont le fruit d'un développement sur-mesure, venant apporter des solutions à des
            problématiques qui ne sont pas forcément standard, tout en bénéficiant d’outils qui rendent
            ses utilisateurs et administrateurs autonomes au quotidien.
        </x-paragraph>
    </x-section>

    <x-section>
        <x-ui.tabs>
            <x-ui.tab>
                <x-slot:title>
                    Nous accordons une<br>(très) grande importance
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
                <x-paragraph>
                    Ces dernières années, notre expertise s’est principalement portée sur les
                    technologies Laravel, Vue.js, Livewire, Alpine.js, Cordova...
                    autour d’outils comme Algolia, AWS, Laravel Forge et Envoyer.
                </x-paragraph>
            </x-ui.tab>

            <x-ui.tab>
                <x-slot:title>
                    Nos clients sont<br>des partenaires
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
                    Nous sommes impliqués<br>dans l’Open source
                </x-slot:title>

                <x-paragraph>
                    Nous faisons massivement (et uniquement) appel à des projets Open source dans nos réalisations,
                    et nous contribuons régulièrement au code de ces projets lorsque nous trouvons un point sur lequel
                    une amélioration pourrait être apportée, que ce soit par une résolution de bug ou l’ajout d’une nouvelle
                    fonctionnalité.
                </x-paragraph>

                <x-paragraph>
                    Dans ce même esprit, nous avons développé et nous maintenons plusieurs projets Open source&nbsp;;
                    parmi eux, citons le framework de gestion de contenu Sharp&nbsp;:
                </x-paragraph>
            </x-ui.tab>
        </x-ui.tabs>

        {{--        <div class="card">--}}
        {{--            <h3 class="mt-0 mb-4 inline-block uppercase tracking-widest">--}}
        {{--                <a class="text-inherit" href="/blog">Le blog de Code 16</a>--}}
        {{--            </h3>--}}
        {{--            <hr>--}}
        {{--            @foreach($posts->take(4) as $post)--}}
        {{--                <x-homepage-post-item--}}
        {{--                    :post="$post"--}}
        {{--                    :page="$page"--}}
        {{--                />--}}
        {{--            @endforeach--}}
        {{--        </div>--}}
    </x-section>

    <x-section>
        <x-slot:title>
            Sharp for Laravel,<br>
            le CMF Open Source
        </x-slot:title>

        <x-project-card.sharp>
            Sharp est une plateforme de développement d’espaces de gestion de contenu et de données,
            généraliste et puissante. Nous l’utilisons dans beaucoup de nos projets, pour proposer un outil
            agréable et performant permettant de mettre en ligne les pages, images, vidéos des sites aussi bien que
            d’administrer des commandes, des produits ou des inscriptions par exemple.

            <x-slot:link href="https://sharp.code16.fr">
                Voir le site dédié
            </x-slot:link>
        </x-project-card.sharp>
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

        <x-project-list>
            <div class="grid grid-cols-2 gap-12">
                <div class="col-span-full">
                    <x-project-card.ek>
                        <x-slot:subtitle>
                            Marketplace avec Click and Collect et Ship from Store
                        </x-slot:subtitle>

                        Nous travaillons depuis des années avec EK France, le
                        groupement des magasins
                        <a href="https://ambianceetstyles.com" class="regular">Ambiance & Styles</a> et <a href="https://www.culinarion.com" class="regular">Culinarion</a>.
                        Notre champ d’action est vaste&nbsp;: sites internet avec <em>marketplace</em>, <em>Click & Collect</em>, <em>Ship from Store</em>,
                        gestion de contenu marketing, synchronisation des comptes fidélité, outils intranet.

                        <x-slot:link href="/p/ek-france">
                            En savoir plus
                        </x-slot:link>
                    </x-project-card.ek>
                </div>

                <x-project-card>
                    <x-slot:title>
                        Portail formations de l'Agence culturelle Grand Est
                    </x-slot:title>

                    <x-slot:banner src="/assets/img/projects/cursus/banner.png"></x-slot:banner>

                    Pour <span class="text-brand-cyan-lighter">l’Agence culturelle Grand Est</span>,
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

                    <x-slot:thumbnail src="/assets/img/projects/merkur/thumb.png"></x-slot:thumbnail>

                    Nous avons mis en place, pour le compte du <span class="text-brand-cyan-lighter">Centre international
                        d’Art Verrier de Meisenthal</span>,
                    une boutique événementielle d’objets en verre comprenant notamment leurs célèbres boules de Noël.

                    <x-slot:link href="/p/merkur">
                        En savoir plus
                    </x-slot:link>
                </x-project-card>
            </div>


            <x-project-item separator>
                <x-slot:title>
                    Boutique en ligne sur mesure pour une librairie
                </x-slot:title>

                <x-slot:date>
                    depuis 2020
                </x-slot:date>

                <x-slot:thumbnail src="/assets/img/projects/maktaba/thumb.png"></x-slot:thumbnail>
                <x-slot:link href="https://quaidesbrumes.com/">
                    Voir le site
                </x-slot:link>

                Développement d’un site de vente en ligne et de génération de bons cadeaux pour
                la <span class="text-brand-cyan-lighter">librairie Quai des Brumes</span>, avec un système adapté
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

                <x-slot:thumbnail src="/assets/img/projects/ekip/thumb.png"></x-slot:thumbnail>
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
            Ces projets assez divers ont tous étés développés sur mesure, le plus souvent dès la conception de la
            maquette graphique, et sont entièrement administrés avec <a href="https://sharp.code16.fr">Sharp</a>.
        </x-paragraph>

        <x-project-list>
            <x-project-item separator>
                <x-slot:title>
                    Site vitrine de Peugeot Invest
                </x-slot:title>

                <x-slot:date>
                    depuis 2022
                </x-slot:date>

                <x-slot:banner src="/assets/img/projects/toshi/banner.png"></x-slot:banner>
                <x-slot:link href="https://www.peugeot-invest.com/">
                    Voir le site
                </x-slot:link>

                Développement complet du site bilingue <span class="text-brand-cyan-lighter">Peugeot Invest</span>,
                qui présente de nombreux et variés contenus, dont des visualisations graphiques, et qui permet
                des recherches documentaires plein texte au sein de fichiers PDFs dans deux langues.
                La gestion de contenu, gérée par Sharp, est particulièrement poussée puisque tout le site est
                administrable.
            </x-project-item>

            <x-project-item separator>
                <x-slot:title>
                    Site de présentation du Pacte du pouvoir de vivre
                </x-slot:title>

                <x-slot:date>
                    depuis 2021
                </x-slot:date>

                <x-slot:banner src="/assets/img/projects/symfonia/banner.jpg"></x-slot:banner>
                <x-slot:link href="https://www.pactedupouvoirdevivre.fr/">
                    Voir le site
                </x-slot:link>

                Développement du site et de la gestion de contenu du <span class="text-brand-cyan-lighter">Pacte du pouvoir de vivre</span>, une alliance de plus de
                60 organisations acteurs majeurs dans la protection de l’environnement, la lutte contre la pauvreté,
                le soutien aux migrants, l’éducation populaire, de l’économie sociale et solidaire et de la mutualité.
            </x-project-item>

            <x-project-item separator>
                <x-slot:title>
                    Portail principal de l’Agence culturelle Grand Est
                </x-slot:title>
                <x-slot:date>
                    depuis 2016
                </x-slot:date>

                <x-slot:thumbnail src="/assets/img/projects/aca/thumb.png"></x-slot:thumbnail>
                <x-slot:link href="https://culturegrandest.fr">
                    Voir le site
                </x-slot:link>

                Création du portail principal de <span class="text-brand-cyan-lighter">l’Agence culturelle Grand Est</span>, chargé de nombreux contenus
                et porte d’entrée vers tous les sites et applications de l’agence ; la gestion de contenu, développée
                avec Sharp, permet une grande souplesse dans la gestion des pages du site, et de leur hiérarchie.
            </x-project-item>

{{--            <x-project-item separator>--}}
{{--                <x-slot name="title">--}}
{{--                    Projet Maillon--}}
{{--                </x-slot>--}}
{{--                <x-slot name="date">--}}
{{--                    depuis 2014--}}
{{--                </x-slot>--}}

{{--                <x-slot name="thumbnail" src="/assets/img/projects/maillon/thumb.png"></x-slot>--}}
{{--                <x-slot name="website_link" href="https://maillon.eu"></x-slot>--}}

{{--                Le site multilingue du <span class="text-brand-cyan-lighter">théâtre Le Maillon</span>,--}}
{{--                qui présente, en respectant l’univers graphique de ce lieu emblématique de Strasbourg, les spectacles de--}}
{{--                la saison et--}}
{{--                les autres activités du théâtre, et propose surtout une gestion avancée de compte et de billetterie--}}
{{--                entièrement pensée et développée sur mesure.--}}
{{--            </x-project-item>--}}

            <x-project-item>
                <x-slot:title>
                    Site de présentation du Festival Musica
                </x-slot:title>
                <x-slot:date>
                    depuis 2017
                </x-slot:date>

                <x-slot:thumbnail src="/assets/img/projects/musica/thumb.png"></x-slot:thumbnail>
                <x-slot:link href="https://festivalmusica.fr">
                    Voir le site
                </x-slot:link>

                Création du site du <span class="text-brand-cyan-lighter">festival international de musique contemporaine Musica</span>,
                accompagné de ses bases de ressources (biographies des très nombreux artistes ayant participé au festival et répertoire des œuvres jouées).
            </x-project-item>
        </x-project-list>
    </x-section>

    <x-section>
        <x-slot:title>
            Applications, CRM et outils intranet
        </x-slot:title>

        <x-paragraph>
            Ces projets correspondent à des applications particulières, parfois adossées à des sites de contenu plus
            classiques.
        </x-paragraph>

        <x-project-list>
            <x-project-item separator>
                <x-slot:title>
                    Plateforme de démocratie interne pour la CFDT
                </x-slot:title>

                <x-slot:date>
                    depuis 2021
                </x-slot:date>

                <x-slot:banner src="/assets/img/projects/syzito/banner.jpg"></x-slot:banner>

                <x-slot:link href="https://jeparticipe.cfdt.fr/">
                    Voir le site
                </x-slot:link>

                Création de la plateforme des adhérents de la <span class="text-brand-cyan-lighter">CFDT</span>,
                présentant tous les débats et webinaires
                proposés dans le cadre de la démocratie interne du syndicat, et permettant de s’y inscrire, ou d’en
                proposer des nouveaux. Toute la gestion des inscriptions, débats, propositions et du contenu est
                intégrée
                dans Sharp.
            </x-project-item>

            <x-project-item separator>
                <x-slot:title>
                    Plateforme de spectacle vivant du Grand Est
                </x-slot:title>

                <x-slot:date>
                    depuis 2019
                </x-slot:date>

                <x-slot:banner src="/assets/img/projects/treto/banner.png"></x-slot:banner>

                <x-slot:link href="/p/treto">
                    En savoir plus
                </x-slot:link>

                Nous avons conçu et construit la
                <a href="https://treto.fr/" class="regular">plateforme du spectacle vivant</a>
                dans le Grand Est,
                qui regroupe les salles, compagnies et bureaux de production sur une carte aec de nombreux outils
                de filtrage et recherche. La plateforme propose également des outils de publication d’annonces, de
                calendriers de spectacle...
            </x-project-item>

            <x-project-item separator>
                <x-slot:title>
                    Application mobile touristique
                </x-slot:title>
                <x-slot:date>
                    depuis 2018
                </x-slot:date>
                <x-slot:thumbnail src="/assets/img/projects/trig/thumb.png"></x-slot:thumbnail>

                <x-slot:link href="/p/trig">
                    En savoir plus
                </x-slot:link>

                Le <span class="text-brand-cyan-lighter">Domaine de la Trigalière</span>, qui loue des belles maisons de
                campagne,
                nous a demandé de réaliser une application mobile (iOS et Android) pour assister les hôtes en les
                orientant vers les
                nombreux points d’intérêt de sa forêt de 1200 hectares.
            </x-project-item>

            <x-project-item>
                <x-slot:title>
                    Suite d’outils CRM, SSO, intranet
                </x-slot:title>

                <x-slot:date>
                    depuis 2015
                </x-slot:date>

                <x-slot:banner src="/assets/img/projects/beatus/banner.jpg"></x-slot:banner>

                L’<span class="text-brand-cyan-lighter">Agence culturelle Grand Est</span>
                nous a confié au fil du temps de nombreux projets, reliés entre eux
                par un système de comptes <em>Single Sign On</em> personnalisé et par des synchronisations API.
                Nous avons développé un outil CRM (<em>Customer Relationship Manager</em>) sur mesure,
                pour centraliser les contacts de l’Agence et de proposer des outils adaptés de gestion&nbsp;;
                nous avons également écrit une plateforme intranet intégrant de nombreux outils à partir de
                données externes variées.
            </x-project-item>
        </x-project-list>

    </x-section>

    <x-section>
        <x-slot:title>
            L’équipe
        </x-slot:title>

        <x-paragraph>
            <x-slot name="subtitle">
                <div class="flex items-center mb-2">
                    <img class="mr-2 h-12 w-12 rounded-full"
                        src="{{ $page->developers['philippe']->avatar }}" alt="Philippe Lonchampt">
                    <span>Philippe Lonchampt</span>
                </div>
            </x-slot>
            Fondateur de Code 16, gérant de l’entreprise et développeur principal de plusieurs projets.
            <br>
            <a href="mailto:philippe@code16.fr">email</a>,
            <a href="{{ $page->developers['philippe']->twitter }}">twitter</a>,
            <a href="{{ $page->developers['philippe']->linkedIn }}">linkedIn</a>
        </x-paragraph>

        <x-paragraph>
            <x-slot name="subtitle">
                <div class="flex items-center mb-2">
                    <img class="mr-2 h-12 w-12 rounded-full"
                        src="{{ $page->developers['arnaud']->avatar }}" alt="Arnaud Becher">
                    <span>Arnaud Becher</span>
                </div>
            </x-slot>
            Développeur <em>back</em> expérimenté, spécialiste de PHP et Laravel avec une orientation infrastructure / devops, il intervient sur tous les projets.
            <br>
            <a href="{{ $page->developers['arnaud']->twitter }}">twitter</a>,
            <a href="{{ $page->developers['arnaud']->linkedIn }}">linkedIn</a>
        </x-paragraph>

        <x-paragraph>
            <x-slot name="subtitle">
                <div class="flex items-center mb-2">
                    <img class="mr-2 h-12 w-12 rounded-full"
                        src="{{ $page->developers['antoine']->avatar }}" alt="Antoine Guingand">
                    <span>Antoine Guingand</span>
                </div>
            </x-slot>
            Responsable du développement <em>front</em>, à la fois sur les sites et sur les applications mobiles&nbsp;; il
            travaille le plus souvent avec Vue.js, Alpine.js ou Livewire.
            <br>
            <a href="{{ $page->developers['antoine']->linkedIn }}">linkedIn</a>
        </x-paragraph>

        <x-paragraph>
            —<br>
            Bien entendu, lorsque le projet le requiert, nous savons nous entourer de compétences externes,
            qu’il s’agisse d’autres développeurs, de graphistes ou de designers.
        </x-paragraph>
    </x-section>

    <x-section large>
        Code 16<br>
        <a href="https://www.gothamscm.com/" class="regular">SCM Gotham</a>
        <br>
        24 rue du Vieux marché aux Vins, 67000 Strasbourg, France<br>
        <br>
        <a href="https://github.com/code16" class="regular">Github</a>
        —
        <a href="https://www.linkedin.com/company/code-16-web" class="regular">LinkedIn</a>
        —
        <a href="/blog" class="regular">Blog</a>
    </x-section>
</x-layout>
