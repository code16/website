@extends('_layouts.master', [
    'background' => 'brand-brown',
    'headerClass' => 'text-brand-brown bg-white'
])

@section('content')
    <div class="text-white">
        @component('_partials.section', ['large'=>true])
            @component('_partials.paragraph')
                Nous concevons depuis 2007 des sites internet et des applications mobiles à partir
                de technologies open-source, avec une approche d’artisan&nbsp;: un développement sur-mesure
                qui permet d’avoir la main à tous les niveaux.
                Ces dernières années, notre expertise s’est principalement portée sur les
                technologies <a href="https://laravel.com">Laravel</a> et <a href="https://vuejs.org/">Vue.js</a>.
            @endcomponent
            @component('_partials.paragraph')
                Nos clients ont un point commun&nbsp;: ils veulent une solution adaptée à un
                problème qui pas forcément standard, tout en bénéficiant d’outils qui les rendent
                autonomes au quotidien.
            @endcomponent
        @endcomponent

        @component('_partials.section')
            @slot('title')
                Notre approche
            @endslot
            @component('_partials.paragraph')
                @slot('title')
                    Nous accordons une très grande importance au code
                @endslot
                Notre métier est de comprendre le besoin d'un client, et de le convertir en code.
            @endcomponent
            @component('_partials.paragraph')
                L'expérience nous a montré que ce code, pour qu'il soit fiable et qu'il puisse s'adapter
                aux besoins futurs, doit être maîtrisé (ce qui nous pousse à ne dépendre
                que de projets Open source), concis (pour qu'il reste compréhensible dans le temps, et
                qu'il soit simple à remplacer en cas de nouveau besoin exprimé), et systématiquement
                accompagné d’une suite automatisée de tests unitaires et fonctionnels (pour le valider
                à l'écriture, et limiter au maximum les régressions au fil du temps).
            @endcomponent
            @component('_partials.paragraph')
                @slot('title')
                    Nos clients sont des partenaires
                @endslot
                Plutôt que de multiplier les petits projets et les contacts, nous cherchons
                à créer des partenariats avec nos clients, pour travailler avec eux sur le long terme,
                afin d’assurer à nos logiciels une maintenance continue. Ainsi, nous sommes fiers de travailler
                depuis de nombreuses années avec Ek France, l'Agence culturelle Grand Est
                ou le théâtre Le Maillon, pour citer quelques exemples.
            @endcomponent
            @component('_partials.paragraph')
                @slot('title')
                    Nous sommes impliqués dans l’Open-source
                @endslot
                Nous faisons massivement appel à des projets Open source dans nos réalisations, et nous
                contribuons régulièrement au code de ces projets lorsque nous trouvons un point sur lequel
                une amélioration pourrait être apportée, que ce soit un bug ou une nouvelle fonctionnalité.
            @endcomponent
            @component('_partials.paragraph')
                Et par ailleurs, nous avons développé et nous maintenons plusieurs projets, parmi lesquels&nbsp;:
                <br>• <a href="https://github.com/code16/sharp">Le framework de gestion de contenu Sharp</a>,
                qui sert d'outil d'administration pour bon nombre de nos projets&nbsp;;
                <br>• <a href="https://github.com/code16/metrics">L'outil d'analyse Metrics</a>
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
                <br>> <a href="">Cliquez ici pour consulter les détails du projet.</a>
            @endcomponent
            @component('_partials.paragraph')
                @slot('title')
                    Agence culturelle Grand Est
                @endslot
                L'<a href="https://culturegrandest.fr">Agence culturelle Grand Est</a> nous a confié au fil du temps de nombreux projets, dont certains
                ont été de véritables défis techniques. Nous avons réalisé leur site internet principal,
                redéveloppé entièrement un outil CRM sur mesure, conçu et développé le système web de location
                de matériel scénique (à venir fin 2018), ou encore une plateforme intranet intégrant de nombreux
                outils à partir de données externes — le tout relié par un système de comptes <em>Single Sign On</em> personnalisé,
                et des liens de synchronisation via API.
                <br>> <a href="/projet/agence-culturelle-grand-est">Consulter les détails du projet Acacia de refonte du site internet.</a>
                <br>> <a href="">Consulter les détails du projet CRM Beatus.</a>
            @endcomponent
            @component('_partials.paragraph')
                @slot('title')
                    Application mobile touristique
                @endslot
                Le <a href="http://www.domainedelatrigaliere.com/">Domaine de la Trigalière</a>, qui loue des belles maisons de campagne,
                nous a demandé de réaliser une application mobile (iOS et Android) pour assister les hôtes en les guidant à travers la forêt de
                1200 hectares et en leur présentant ses nombreux points d'intérêt.
                <br>> <a href="">Consulter les détails du projet</a>
            @endcomponent
            @component('_partials.paragraph')
                @slot('title')
                    Présentation de spectacles, gestion de billetterie
                @endslot
                Deux projets entrent dans cette catégorie&nbsp;:
            @endcomponent
            @component('_partials.paragraph')
                Le site multilingue du <a href="https://maillon.eu">théâtre Le Maillon</a>,
                qui présente, en respectant l'univers graphique de ce lieu emblématique de la ville, les spectacles de la saison et
                les autres activités du théâtre, et propose surtout une gestion avancée de compte et de billetterie entièrement pensée et développée sur mesure.
                <br>> <a href="">Consulter les détails du projet Maillon</a>
            @endcomponent
            @component('_partials.paragraph')
                Le site du <a href="http://www.festivalmusica.org/">festival international de musique contemporaine Musica</a>,
                également accompagné de son système de billetterie dédié, ainsi que ses bases de ressources (biographie des très nombreux
                artistes ayant paticipé au festival, répertoire des œuvres jouées).
                <br>> <a href="">Consulter les détails du projet Musica</a>
            @endcomponent
            @component('_partials.paragraph')
                @slot('title')
                    D'autres projets
                @endslot
                Parmi les autres projets de plus petite taille, ou plus anciens, citons les sites internet avec commande ou
                prise de réservation des librairies <a href="http://quaidesbrumes.com">Quai des Brumes</a> et
                <a href="https://librairie-amateur.com/">la Librairie de l'Amateur</a>&nbsp;; le site d'une revue
                pour le compte de l'Université de Strasbourg, avec des outils de commentaire et de prise de note&nbsp;:
                <a href="https://revue-radar.fr/">Radar</a>&nbsp;;
                ou encore le site internet et un CRM dédié pour le compte du <a href="http://ciav-meisenthal.fr/">Centre international d'Art Verrier de Meisenthal</a>.
            @endcomponent
        @endcomponent

        @component('_partials.section')
            @slot('title')
                L'équipe
            @endslot
            @component('_partials.paragraph')
                Nous sommes trois développeurs à temps complet en interne&nbsp;:
                <br>• <a href="mailto:philippe@code16.fr">Philippe Lonchampt</a> est de fondateur de Code 16 (anciennement nommé Développlan),
                le gérant de l'entreprise et le développeur principal de plusieurs projets.
                <br>• <a href="mailto:remi@code16.fr">Rémi Collin</a> est un développeur <em>back</em> expérimenté, spécialiste de Laravel.
                <br>• <a href="mailto:antoine@code16.fr">Antoine Guingand</a> est le reponsable du côté <em>front</em>&nbsp;, à la fois sur les sites
                et sur les applications mobiles&nbsp;; il travaille le plus souvent avec Vue.js.
            @endcomponent
            @component('_partials.paragraph')
                Évidemment, lorsque le projet le requiert, nous savons nous entourer de compétences externes,
                qu'il s'agisse d'autres développeurs, de graphistes ou de designers.
            @endcomponent
        @endcomponent
    </div>
@endsection