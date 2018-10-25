@extends('_layouts.master', [
    'background' => 'brand-brown',
    'bodyClass' => 'home',
    'headerClass' => 'text-brand-brown bg-brand-white'
])

@section('content')
    <div class="text-brand-white">
        @component('_partials.section', ['large'=>true])
            @component('_partials.paragraph')
                Nous concevons depuis 2007 des sites internet et des applications mobiles à partir
                de technologies open-source, avec une approche d’artisan&nbsp;: un développement sur-mesure
                qui permet d’avoir la main à tous les niveaux.
                Ces dernières années, notre expertise s’est principalement portée sur les
                technologies <a href="https://laravel.com">Laravel</a> et <a href="https://vuejs.org/">Vue.js</a>.
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
                    Nous accordons une (très) grande importance au code
                @endslot
                Notre métier est de comprendre le besoin d'un client, de la traduire en spécifications
                partagées de part et d'autre et de le convertir finalement en code : c'est sur cela que
                nous concentrons tous nos efforts.
            @endcomponent
            @component('_partials.paragraph')
                L'expérience nous montre que ce code, pour qu'il soit fiable et qu'il puisse s'adapter
                aux besoins futurs, doit être maîtrisé (ce qui nous pousse à ne dépendre
                que de projets Open source), concis (pour qu'il reste compréhensible dans le temps, et
                qu'il soit simple à remplacer en cas de nouveau besoin exprimé), et systématiquement
                accompagné d’une suite automatisée de tests unitaires et fonctionnels (pour le valider
                à l'écriture, et limiter au maximum les régressions au fil des versions).
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
                    Nous sommes impliqués dans l’Open source
                @endslot
                Nous faisons massivement (et uniquement) appel à des projets Open source dans nos réalisations,
                et nous contribuons régulièrement au code de ces projets lorsque nous trouvons un point sur lequel
                une amélioration pourrait être apportée, que ce soit par une résolution de bug ou l'ajout d'une nouvelle fonctionnalité.
            @endcomponent
            @component('_partials.paragraph')
                Dans le même esprit, nous avons développé et nous maintenons plusieurs projets Open source, parmi lesquels&nbsp;:
            @endcomponent
            @component('_partials.paragraph')
                <a href="https://github.com/code16/sharp">Le framework de gestion de contenu Sharp</a>,
                qui sert d'outil d'administration pour bon nombre de nos projets.
            @endcomponent
            @component('_partials.paragraph')
                <a href="https://github.com/code16/metrics">L'outil d'analyse Metrics</a>
                permet de collecter et d'analyser les comportements des visiteurs de manière fine et en respect
                de la législation.
            @endcomponent
        @endcomponent

        @component('_partials.section')
            @slot('title')
                Les projets
            @endslot
            @component('_partials.paragraph')
                @slot('title')
                    E-commerce et applications mobiles
                @endslot
                Nous travaillons depuis des années avec Ek France, le groupement des magasins
                <a href="https://ambianceetstyles.com">Ambiance & Styles</a> et <a href="https://www.culinarion.com">Culinarion</a>.
                Notre champ d'action est vaste&nbsp;: sites internet
                avec click and collect et synchronisation des comptes fidélité, applications mobile iOS
                et Android, plateforme de newsletters, intranet.
                <br><a href="/p/ek-france">Projet EK France</a>
            @endcomponent
            @component('_partials.paragraph')
                @slot('title')
                    Agence culturelle Grand Est
                @endslot
                L'<a href="https://culturegrandest.fr">Agence culturelle Grand Est</a> nous a confié au fil du temps de nombreux projets, dont certains
                ont été de véritables défis techniques. Nous avons réalisé leur site internet principal,
                redéveloppé entièrement un outil CRM sur mesure, conçu et développé le système web de location
                de matériel scénique, ou encore une plateforme intranet intégrant de nombreux
                outils à partir de données externes — le tout relié par un système de comptes <em>Single Sign On</em> personnalisé,
                et des liens de synchronisation via API.
                <br><a href="/p/agence-culturelle-grand-est">Projet Acacia : refonte du site internet</a>
                <br><a href="/p/parcs-materiels-grand-est">Projet Ekip : site multi-dépôts de location de matériel scénique</a>
                <br><a href="/p/beatus">Projet CRM Beatus</a>
            @endcomponent
            @component('_partials.paragraph')
                @slot('title')
                    Application mobile touristique
                @endslot
                Le <a href="http://www.domainedelatrigaliere.com/">Domaine de la Trigalière</a>, qui loue des belles maisons de campagne,
                nous a demandé de réaliser une application mobile (iOS et Android) pour assister les hôtes en les orientant vers les
                nombreux points d'intérêt de sa forêt de 1200 hectares.
                <br><a href="/p/trigaliere">Projet Trig</a>
            @endcomponent
            @component('_partials.paragraph')
                @slot('title')
                    Présentation de spectacles, gestion de billetterie
                @endslot
                Deux projets entrent dans cette catégorie&nbsp;:
            @endcomponent
            @component('_partials.paragraph')
                Le site multilingue du <a href="https://maillon.eu">théâtre Le Maillon</a>,
                qui présente, en respectant l'univers graphique de ce lieu emblématique de Strasbourg, les spectacles de la saison et
                les autres activités du théâtre, et propose surtout une gestion avancée de compte et de billetterie entièrement pensée et développée sur mesure.
                <br><a href="/p/maillon">Projet Maillon</a>
            @endcomponent
            @component('_partials.paragraph')
                Le site du <a href="http://www.festivalmusica.org/">festival international de musique contemporaine Musica</a>,
                également accompagné de son système de billetterie dédié, ainsi que ses bases de ressources (biographies des très nombreux
                artistes ayant paticipé au festival, et répertoire des œuvres jouées).
                <br><a href="/p/musica">Projet festival Musica</a>
            @endcomponent
            @component('_partials.paragraph')
                @slot('title')
                    D'autres références
                @endslot
                Parmi les autres projets de plus petite taille ou plus anciens, citons les sites internet avec commande ou
                prise de réservation des excellentes librairies <a href="http://quaidesbrumes.com">Quai des Brumes</a> et
                <a href="https://librairie-amateur.com/">la Librairie de l'Amateur</a>&nbsp; le site d'une revue
                pour le compte de l'Université de Strasbourg, avec des outils de commentaire et de prise de note&nbsp;:
                <a href="https://revue-radar.fr/">Radar</a>&nbsp;
                ou encore le site internet et un CRM dédié pour le compte
                du <a href="http://ciav-meisenthal.fr/">Centre international d'Art Verrier de Meisenthal</a>.
            @endcomponent
        @endcomponent

        @component('_partials.section')
            @slot('title')
                L'équipe
            @endslot
            @component('_partials.paragraph')
                Nous sommes trois développeurs à temps complet en interne&nbsp;:
            @endcomponent
            @component('_partials.paragraph')
                <a href="mailto:philippe@code16.fr">Philippe Lonchampt</a> est de fondateur de Code 16 (anciennement nommé Développlan),
                le gérant de l'entreprise et le développeur principal de plusieurs projets.
            @endcomponent
            @component('_partials.paragraph')
                <a href="mailto:arnaud@code16.fr">Arnaud Becher</a> est un développeur <em>back</em> expérimenté, spécialiste de PHP et Laravel.
            @endcomponent
            @component('_partials.paragraph')
                <a href="mailto:antoine@code16.fr">Antoine Guingand</a> est le reponsable du côté <em>front</em>, à la fois sur les sites
                et sur les applications mobiles&nbsp;; il travaille le plus souvent avec Vue.js.
            @endcomponent
            @component('_partials.paragraph')
                Bien entendu, lorsque le projet le requiert, nous savons nous entourer de compétences externes,
                qu'il s'agisse d'autres développeurs, de graphistes ou de designers.
            @endcomponent
        @endcomponent
    </div>

    <div class="text-brand-white">
        @component('_partials.section', ['large'=>true])
            Code 16<br>
            SCM Gotham<br>
            24 rue du Vieux marché aux Vins, 67000 Strasbourg, France<br>
            Philippe Lonchampt : <a href="mailto:philippe@code16.fr">philippe@code16.fr</a>
        @endcomponent
    </div>
@endsection