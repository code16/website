
<x-layout home lang="fr">

    <h1 class="sr-only">
        Code 16, développement Laravel et Vue.js
    </h1>

    <div class="text-brand-white">
        <x-section large>
            <x-paragraph>
                <x-slot name="title">
                    Nous développons<br>des applications web de qualité
                </x-slot>
                Nous concevons des sites internet et des applications mobiles à partir
                de technologies open-source, avec une approche d’artisan&nbsp;: un développement sur-mesure
                qui permet d’avoir la main à tous les niveaux.
            </x-paragraph>

            <x-paragraph>
                Nos clients ont un point commun&nbsp;: ils veulent une solution adaptée à un
                problème qui n'est pas forcément standard, tout en bénéficiant d’outils qui les rendent
                autonomes au quotidien.
            </x-paragraph>
        </x-section>

        <x-section>
            <x-slot name="title">
                Notre approche
            </x-slot>

            <x-paragraph>
                <x-slot name="title">
                    Nous accordons une<br>(très) grande importance au code
                </x-slot>
                Notre métier est de comprendre le besoin d’un client, de la traduire en spécifications
                partagées de part et d’autre et de le convertir finalement en code : c'est sur cela que
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
                autour d’outils comme Algolia, AWS, Laravel Forge / Envoyer.
            </x-paragraph>

            <x-paragraph>
                <x-slot name="title">
                    Nos clients sont des partenaires
                </x-slot>
                Plutôt que de multiplier les petits projets et les contacts, nous cherchons
                à créer des partenariats avec nos clients pour travailler avec eux sur le long terme,
                afin d’assurer à nos logiciels une maintenance continue. Ainsi, nous sommes fiers de travailler
                depuis des années avec Ek France, l’Agence culturelle Grand Est
                ou le théâtre Le Maillon, pour citer quelques exemples.
            </x-paragraph>

            <x-paragraph>
                <x-slot name="title">
                    Nous sommes impliqués<br>dans l’Open source
                </x-slot>
                Nous faisons massivement (et uniquement) appel à des projets Open source dans nos réalisations,
                et nous contribuons régulièrement au code de ces projets lorsque nous trouvons un point sur lequel
                une amélioration pourrait être apportée, que ce soit par une résolution de bug ou l’ajout d’une nouvelle
                fonctionnalité.
            </x-paragraph>

            <x-paragraph>
                Dans le même esprit, nous avons développé et nous maintenons plusieurs projets Open source ;
                parmi eux, citons le framework de gestion de contenu Sharp :
            </x-paragraph>

            <x-project-item>
                <x-slot name="title">
                    Sharp for Laravel
                </x-slot>

                <x-slot name="date">
                    depuis 2017
                </x-slot>

                <x-slot name="banner" src="assets/img/sharp/banner.png"></x-slot>
                <x-slot name="website_link" href="https://sharp.code16.fr"></x-slot>

                Sharp est une plateforme de développement d’espaces de gestion de contenu et de données,
                généraliste et puissante. Nous l’utilisons dans beaucoup de nos projets, pour proposer un outil
                agréable et performant permettant de mettre en ligne les pages, images, vidéos des sites aussi bien que
                d’administrer des commandes, des produits ou des inscriptions par exemple.
            </x-project-item>
        </x-section>

        <x-section>
            <x-slot name="title">
                E-commerce
            </x-slot>

            <x-paragraph>
                <x-slot name="title">
                    Sites e-commerce<br>et systèmes de gestion de commande
                </x-slot>

                Le terme e-commerce est ici entendu au sens large, puisque cette sélection regroupe des systèmes
                de vente en ligne avec livraison et des sites de commande ou réservation, avec paiement en ligne ou
                différé.
                Tous les projets sont bâtis sur une plateforme technique dédiée adaptée au besoin exprimé,
                et sont le plus souvent relié aux systèmes externes pré-existants (stocks, gestion commerciale,
                fidélité...).
            </x-paragraph>

            <x-project-list>
                <x-project-item separator>
                    <x-slot name="title">
                        Projet EK France
                    </x-slot>

                    <x-slot name="date">
                        depuis 2015
                    </x-slot>

                    <x-slot name="banner" src="assets/img/ek/banner.png"></x-slot>
                    <x-slot name="link" href="/p/ek-france"></x-slot>

                    Nous travaillons depuis des années avec <span class="text-brand-cyan-lighter">EK France</span>, le
                    groupement des magasins
                    <a href="https://ambianceetstyles.com" class="regular">Ambiance & Styles</a> et <a href="https://www.culinarion.com" class="regular">Culinarion</a>.
                    Notre champ d’action est vaste&nbsp;: sites internet avec <em>marketplace</em>, <em>Click & Collect</em>, <em>Ship from Store</em>,
                    gestion de contenu marketing, synchronisation des comptes fidélité, outils intranet.
                </x-project-item>

                <x-project-item separator>
                    <x-slot name="title">
                        Projet Cursus
                    </x-slot>

                    <x-slot name="date">
                        depuis 2021
                    </x-slot>

                    <x-slot name="banner" src="assets/img/cursus/banner.png"></x-slot>
                    <x-slot name="link" href="/p/cursus"></x-slot>

                    Pour <span class="text-brand-cyan-lighter">l’Agence culturelle Grand Est</span>,
                    nous avons réalisé un portail de réservation, de prise de commande et de gestion pour
                    les nombreuses formations proposées par la structure.
                </x-project-item>

                <x-project-item separator>
                    <x-slot name="title">
                        Projet Merkur
                    </x-slot>

                    <x-slot name="date">
                        depuis 2020
                    </x-slot>

                    <x-slot name="thumbnail" src="assets/img/merkur/thumb.png"></x-slot>
                    <x-slot name="link" href="/p/merkur"></x-slot>

                    Nous avons mis en place, pour le compte du <span class="text-brand-cyan-lighter">Centre international
                        d'Art Verrier de Meisenthal</span>,
                    une boutique événementielle d’objets en verre comprenant notamment leurs célèbres boules de Noël.
                </x-project-item>

                <x-project-item separator>
                    <x-slot name="title">
                        Projet Maktaba
                    </x-slot>

                    <x-slot name="date">
                        depuis 2020
                    </x-slot>

                    <x-slot name="thumbnail" src="assets/img/maktaba/thumb.png"></x-slot>
                    <x-slot name="website_link" href="https://quaidesbrumes.com/"></x-slot>

                    Développement d'un site de vente en ligne et de génération de bons cadeaux pour
                    la <span class="text-brand-cyan-lighter">librairie Quai des Brumes</span>, avec un système adapté
                    de suivi et traitement des commandes. Le projet comprend également une plateforme de blogs et un
                    système de conception et d'expédition de newsletters.
                </x-project-item>

                <x-project-item>
                    <x-slot name="title">
                        Projet Ekip
                    </x-slot>

                    <x-slot name="date">
                        depuis 2017
                    </x-slot>

                    <x-slot name="thumbnail" src="assets/img/ekip/thumb.png"></x-slot>
                    <x-slot name="link" href="/p/parcs-materiels-grand-est"></x-slot>

                    Nous avons conçu et développé un système web de création de devis et de suivi
                    de commandes de location de matériel scénique, sur plusieurs dépôts du Grand Est, en liaison
                    étroite avec le logiciel de gestion de stock déjà en place.
                </x-project-item>
            </x-project-list>
        </x-section>

        <x-section>
            <x-slot name="title">
                Sites de contenu
            </x-slot>

            <x-paragraph>
                <x-slot name="title">
                    Portails internet et sites de contenu
                </x-slot>

                Ces projets assez divers ont tous étés développés sur mesure, le plus souvent dès la conception de la
                maquette graphique,
                et sont entièrement administrés avec
                <a href="https://sharp.code16.fr">Sharp</a>.
            </x-paragraph>

            <x-project-list>
                <x-project-item separator>
                    <x-slot name="title">
                        Projet Toshi
                    </x-slot>

                    <x-slot name="date">
                        depuis 2022
                    </x-slot>

                    <x-slot name="banner" src="assets/img/toshi/banner.png"></x-slot>
                    <x-slot name="website_link" href="https://www.peugeot-invest.com/"></x-slot>

                    Développement complet du site bilingue <span class="text-brand-cyan-lighter">Peugeot Invest</span>,
                    qui présente de nombreux et variés contenus, dont des visualisations graphiques, et qui permet
                    des recherches documentaires plein texte au sein de fichiers PDFs dans deux langues.
                    La gestion de contenu, gérée par Sharp, est particulièrement poussée puisque tout le site est
                    administrable.
                </x-project-item>

                <x-project-item separator>
                    <x-slot name="title">
                        Projet Syzito
                    </x-slot>

                    <x-slot name="date">
                        depuis 2021
                    </x-slot>

                    <x-slot name="banner" src="assets/img/syzito/banner.jpg"></x-slot>
                    <x-slot name="website_link" href="https://jeparticipe.cfdt.fr/"></x-slot>

                    Création de la plateforme des adhérents de la <span class="text-brand-cyan-lighter">CFDT</span>,
                    présentant tous les débats et webinaires
                    proposés dans le cadre de la démocratie interne du syndicat, et permettant de s’y inscrire, ou d’en
                    proposer des nouveaux. Toute la gestion des inscriptions, débats, propositions et du contenu est
                    intégrée
                    dans Sharp.
                </x-project-item>

                <x-project-item separator>
                    <x-slot name="title">
                        Projet Symfonia
                    </x-slot>

                    <x-slot name="date">
                        depuis 2021
                    </x-slot>

                    <x-slot name="banner" src="assets/img/symfonia/banner.jpg"></x-slot>
                    <x-slot name="website_link" href="https://www.pactedupouvoirdevivre.fr/"></x-slot>

                    Développement du site et de la gestion de contenu du <span class="text-brand-cyan-lighter">Pacte du pouvoir de vivre</span>, une alliance de plus de
                    60 organisations acteurs majeurs dans la protection de l’environnement, la lutte contre la pauvreté,
                    le soutien aux migrants, l’éducation populaire, de l’économie sociale et solidaire et de la mutualité.
                </x-project-item>

                <x-project-item separator>
                    <x-slot name="title">
                        Projet Acacia
                    </x-slot>
                    <x-slot name="date">
                        depuis 2016
                    </x-slot>

                    <x-slot name="thumbnail" src="assets/img/aca/thumb.png"></x-slot>
                    <x-slot name="website_link" href="https://culturegrandest.fr"></x-slot>

                    Création du portail principal de <span class="text-brand-cyan-lighter">l’Agence culturelle Grand Est</span>, chargé de nombreux contenus
                    et porte d’entrée vers tous les sites et applications de l'agence ; la gestion de contenu, développée
                    avec Sharp, permet une grande souplesse dans la gestion des pages du site, et de leur hiérarchie.
                </x-project-item>

                <x-project-item separator>
                    <x-slot name="title">
                        Projet Maillon
                    </x-slot>
                    <x-slot name="date">
                        depuis 2014
                    </x-slot>

                    <x-slot name="thumbnail" src="assets/img/maillon/thumb.png"></x-slot>
                    <x-slot name="website_link" href="https://maillon.eu"></x-slot>

                    Le site multilingue du <span class="text-brand-cyan-lighter">théâtre Le Maillon</span>,
                    qui présente, en respectant l'univers graphique de ce lieu emblématique de Strasbourg, les spectacles de
                    la saison et
                    les autres activités du théâtre, et propose surtout une gestion avancée de compte et de billetterie
                    entièrement pensée et développée sur mesure.
                </x-project-item>

                <x-project-item>
                    <x-slot name="title">
                        Projet Musica
                    </x-slot>
                    <x-slot name="date">
                        depuis 2017
                    </x-slot>

                    <x-slot name="thumbnail" src="assets/img/musica/thumb.png"></x-slot>
                    <x-slot name="website_link" href="https://festivalmusica.fr"></x-slot>

                    Création du site du <span class="text-brand-cyan-lighter">festival international de musique contemporaine Musica</span>,
                    accompagné de ses bases de ressources (biographies des très nombreux artistes ayant participé au festival et répertoire des œuvres jouées).
                </x-project-item>
            </x-project-list>
        </x-section>

        <x-section>
            <x-slot name="title">
                Apps et outils
            </x-slot>

            <x-paragraph>
                <x-slot name="title">
                    Applications, CRM et outils intranet
                </x-slot>
                Ces projets correspondent à des applications particulières, parfois adossées à des sites de contenu plus
                classiques.
            </x-paragraph>

            <x-project-list>
                <x-project-item separator>
                    <x-slot name="title">
                        Projet Treto
                    </x-slot>

                    <x-slot name="date">
                        depuis 2019
                    </x-slot>

                    <x-slot name="banner" src="assets/img/treto/banner.png"></x-slot>
                    <x-slot name="link" href="/p/treto"></x-slot>

                    Nous avons conçu et construit la
                    <a href="https://treto.fr/" class="regular">plateforme du spectacle vivant</a>
                    dans le Grand Est,
                    qui regroupe les salles, compagnies et bureaux de production sur une carte aec de nombreux outils
                    de filtrage et recherche. La plateforme propose également des outils de publication d’annonces, de
                    calendriers de spectacle...
                </x-project-item>

                <x-project-item separator>
                    <x-slot name="title">
                        Projet Trig
                    </x-slot>
                    <x-slot name="date">
                        depuis 2018
                    </x-slot>
                    <x-slot name="thumbnail" src="assets/img/trig/thumb.png"></x-slot>
                    <x-slot name="link" href="/p/trig"></x-slot>

                    Le <span class="text-brand-cyan-lighter">Domaine de la Trigalière</span>, qui loue des belles maisons de
                    campagne,
                    nous a demandé de réaliser une application mobile (iOS et Android) pour assister les hôtes en les
                    orientant vers les
                    nombreux points d’intérêt de sa forêt de 1200 hectares.
                </x-project-item>

                <x-project-item separator>
                    <x-slot name="title">
                        Projet Beatus
                    </x-slot>

                    <x-slot name="date">
                        depuis 2015
                    </x-slot>

                    <x-slot name="thumbnail" src="assets/img/beatus/thumb.png"></x-slot>
                    <x-slot name="link" href="/p/beatus"></x-slot>

                    L’<span class="text-brand-cyan-lighter">Agence culturelle Grand Est</span>
                    nous a confié au fil du temps de nombreux projets, reliés entre eux
                    par un système de comptes <em>Single Sign On</em> personnalisé et par des synchronisations API.
                    Nous avons tout d’abord développé un outil CRM (<em>Customer Relationship Manager</em>) sur mesure,
                    pour centraliser les contacts de l’Agence et de proposer des outils adaptés de gestion.
                </x-project-item>

                <x-project-item>
                    <x-slot name="title">
                        Projet Sapidus
                    </x-slot>

                    <x-slot name="date">
                        depuis 2016
                    </x-slot>

                    <x-slot name="link" href="/p/sapidus"></x-slot>
                    <x-slot name="thumbnail" src="assets/img/sapidus/thumb.png"></x-slot>

                    Nous avons également écrit une plateforme intranet intégrant de nombreux
                    outils à partir de données externes variées.
                </x-project-item>
            </x-project-list>

        </x-section>

        <x-section>
            <x-paragraph>
                <x-slot name="title">
                    D'autres références
                </x-slot>

                Parmi les autres projets de plus petite taille ou plus anciens, citons le site internet avec
                prise de réservation de l’excellente
                <a href="https://librairie-amateur.com/" class="regular">Librairie de l'Amateur</a>,
                le site de la
                <a href="https://revue-radar.fr/" class="regular">revue Radar</a>
                pour le compte de l'Université de Strasbourg, avec des outils de commentaire et de prise de note,
                ou encore le site internet et un CRM dédié pour le compte du
                <a href="http://ciav-meisenthal.fr/" class="regular">Centre international d'Art Verrier de Meisenthal</a>.
            </x-paragraph>
        </x-section>

        <x-section>
            <x-slot name="title">
                L'équipe
            </x-slot>
            <x-paragraph>
                <x-slot name="subtitle">
                    <div class="flex items-center mb-2">
                        <img class="mr-2 h-12 w-12 rounded-full"
                            src="https://gravatar.com/avatar/{{ md5('philippelonchampt@gmail.com') }}?d=retro" alt="">
                        <span>Philippe Lonchampt</span>
                    </div>
                </x-slot>
                Fondateur de Code 16 (anciennement nommé Développlan), gérant de l'entreprise et développeur principal
                de plusieurs projets.
                <br>
                <a href="mailto:philippe@code16.fr">email</a>,
                <a href="https://twitter.com/dvlpp">twitter</a>
            </x-paragraph>

            <x-paragraph>
                <x-slot name="subtitle">
                    <div class="flex items-center mb-2">
                        <img class="mr-2 h-12 w-12 rounded-full"
                            src="https://gravatar.com/avatar/{{ md5('arnaud.becher@gmail.com') }}?d=retro" alt="">
                        <span>Arnaud Becher</span>
                    </div>
                </x-slot>
                Développeur <em>back</em> expérimenté, spécialiste de PHP et Laravel, il intervient sur tous les
                projets.
            </x-paragraph>

            <x-paragraph>
                <x-slot name="subtitle">
                    <div class="flex items-center mb-2">
                        <img class="mr-2 h-12 w-12 rounded-full"
                            src="https://gravatar.com/avatar/{{ md5('guingand.antoine@gmail.com') }}?d=retro" alt="">
                        <span>Antoine Guingand</span>
                    </div>
                </x-slot>
                Reponsable du côté <em>front</em>, à la fois sur les sites et sur les applications mobiles&nbsp;; il
                travaille le plus souvent avec Vue.js, Alpine.js ou Livewire.
            </x-paragraph>

            <x-paragraph>
                —<br>
                Bien entendu, lorsque le projet le requiert, nous savons nous entourer de compétences externes,
                qu’il s’agisse d’autres développeurs, de graphistes ou de designers.
            </x-paragraph>
        </x-section>
    </div>

    <div class="text-brand-white">
        <x-section large>
            Code 16<br>
            <a href="http://www.gothamscm.com/" class="regular">SCM Gotham</a>
            <br>
            24 rue du Vieux marché aux Vins, 67000 Strasbourg, France<br>
            Philippe Lonchampt :
            <a href="mailto:philippe@code16.fr" class="regular">philippe@code16.fr</a>
            <br>
            <a href="https://github.com/code16" class="regular">Github</a>
            —
            <a href="https://medium.com/code16" class="regular">Medium</a>
        </x-section>
    </div>
</x-layout>
