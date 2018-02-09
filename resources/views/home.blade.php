@extends('layout', ["background" => "brand-brown"])

@section('content')
    <div class="text-white p-8 sm:p-16">
        <header class="mb-16 w-64">
            <h1 class="uppercase tracking-wider text-4xl bg-white text-brand-brown text-right pb-6 px-2 pt-2">Code 16</h1>
        </header>
        <div class="container">
            @component('components.section', ['large'=>true])
                @component('components.paragraph')
                    Developpeurs web, nous concevons depuis 2007 des solutions basées sur des technologies open-source, avec une approche d’artisan : un développement sur-mesure qui permet d’avoir la main à tous les niveaux.
                @endcomponent
                @component('components.paragraph')
                    Ces dernières années, notre expertise c’est principalement appuyée sur les technologies Laravel et Vue.js.
                @endcomponent
                @component('components.paragraph')
                    Nos clients ont un point commun : ils veulent une solution adaptée à un problème peu standard tout en bénéficiant d’un système de gestion puissant et intuitif qui les rende autonomes au quotidien.
                @endcomponent
            @endcomponent
            @component('components.section')
                @slot('title')
                    Notre Approche
                @endslot
                @component('components.paragraph')
                    @slot('title')
                        Nous accordons une très grande importance au code
                    @endslot
                    Notre métier est de produir du code fiable
                    et maintenable: pour cela, tous nos projets sont écrits sur mesure et systématiquement accompagné d’une suite automatisée de testes unitaires et fonctionnels qui nous garantisse que le code soit valide au moment de son écriture mais aussi qu’il
                    le reste au  l des mises à jour.
                @endcomponent
                @component('components.paragraph')
                    @slot('title')
                        Nos clients sont des partenaires
                    @endslot
                        Plutôt que de miltilier les petits projets
                        et les contacts nous cherchons à créer des partenariats avec nos clients, pour travailler avec eux sur le long terme, a n d’assuer à nos logiciels une maintenance continue.
                    @endcomponent
                @component('components.paragraph')
                    @slot('title')
                        Nous sommes impliqué dans l’Open-source
                    @endslot
                    Plutôt que de miltilier les petits projets
                    et les contacts nous cherchons à créer des partenariats avec nos clients, pour travailler avec eux sur le long terme, a n d’assuer à nos logiciels une maintenance continue.
                @endcomponent
            @endcomponent
        </div>
    </div>
@endsection