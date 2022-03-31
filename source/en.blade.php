@extends('_layouts.master', [
    'background' => 'brand-darkblue',
    'lang' => 'en',
    'bodyClass' => 'home',
    'headerClass' => 'text-brand-brown bg-brand-white'
])

@section('content')
    <div class="text-brand-white">
        @component('_partials.section', ['large'=>true])
            @component('_partials.paragraph')
                @slot('title')
                    Quality web development
                @endslot
                We build since 2007 websites and mobile apps based on open source technologies,
                with an "artisan" state of mind: a tailor-made development that allows control at all levels.
                We have mainly focused on <a href="https://laravel.com" class="regular">Laravel</a>
                and <a href="https://vuejs.org/" class="regular">Vue.js</a> in recent years.
            @endcomponent
            @component('_partials.paragraph')
                Our customers have one thing in common: they want a solution adapted to a 
                problem that is not necessarily standard, while benefiting from tools that make 
                them autonomous on a daily basis.
            @endcomponent
            @component('_partials.paragraph')
                We are located in Strasbourg, a city on the eastern border of France, 
                but we can of course work remotely.
            @endcomponent
        @endcomponent

        @component('_partials.section')
            @slot('title')
                Our approach
            @endslot
            @component('_partials.paragraph')
                @slot('title')
                    We attach great<br>importance to the code
                @endslot
                Our job is to understand a client's need, translate it into shared 
                specifications on both sides and ultimately convert it into code: 
                that's what we focus all our efforts on.
            @endcomponent
            @component('_partials.paragraph')
                Experience shows us that this code, to be reliable and able to adapt to future needs, 
                must be mastered (which implies to depend only on open source projects), 
                concise (so that it remains understandable over time, and that it is simple to replace 
                if a new need is expressed), and systematically accompanied by an automated suite of unit 
                and functional tests (used at first write stage and even more after, to limit as much as possible regressions 
                over the versions).
            @endcomponent
            @component('_partials.paragraph')
                @slot('title')
                    Our clients are partners
                @endslot
                Rather than multiplying small projects and contacts, we seek to create partnerships 
                with our clients to work with them over the long term, in order to ensure 
                continuous maintenance to our software.
            @endcomponent
            @component('_partials.paragraph')
                @slot('title')
                    We are involved<br>in open source
                @endslot
                We massively use open source projects in our work, and we regularly contribute to the 
                code of these projects when we find some part where an improvement could be made, 
                whether by fixing a bug or adding a new functionality.
            @endcomponent
            @component('_partials.paragraph')
                In the same spirit, we developed and maintain several open source projects, among which we should mention the content management framework Sharp:
            @endcomponent

            @component('_partials.paragraph')
                @slot('subtitle')
                    Sharp for Laravel
                @endslot
                @slot('date')
                    since 2017
                @endslot
                @slot('banner')
                    ../assets/img/sharp/banner.png
                @endslot
                Sharp is a content management framework built for Laravel, a toolset which provides help to build a CMS section in a website. 
                We use it in many projects. Go to <a href="https://sharp.code16.fr">sharp.code16.fr</a> to learn more.
            @endcomponent

        @endcomponent

        @component('_partials.section')
            @slot('title')
                E-commerce
            @endslot
            @component('_partials.paragraph')
                @slot('title')
                    E-commerce and ordering systems
                @endslot
                @slot('subtitle')
                    EK France
                @endslot
                @slot('banner')
                    /assets/img/ek/banner.png
                @endslot
                We have been working for years with EK France, which groups 150+ stores
                (<a href="https://ambianceetstyles.com">Ambiance & Styles</a> and
                <a href="https://www.culinarion.com">Culinarion</a>).
                The main project is the platform tant powers both websites, with a full marketplace: 
                Click & Collect and Ship from Store, online payment with multiple accounts, delivery systems,
                synchronization of fidelity accounts... The websites also handle gift card orders 
                and wish list management.
            @endcomponent

            @component('_partials.paragraph')
                @slot('subtitle')
                    Cursus, a course ordering website
                @endslot
                @slot('date')
                    since 2021
                @endslot
                @slot('banner')
                    ../assets/img/cursus/banner.png
                @endslot
                This <a href="https://culturegrandest.fr/cursus/formations/">course ordering system</a> 
                handles course registration via a complex process depending on various course options and registrant type.
                <a href="https://sharp.code16.fr">Sharp</a> is leveraged for content and order management. 
            @endcomponent

            @component('_partials.paragraph')
                @slot('subtitle')
                    Merkur, a high trafic event shop
                @endslot
                @slot('thumbnail')
                    /assets/img/merkur/thumb.png
                @endslot
                We built, for the Centre international d’Art Verrier de Meisenthal (CIAV),
                <a href="https://boutique.ciav-meisenthal.fr">an event shop</a> for glass objects
                including their famous Christmas bulbs.
            @endcomponent

            @component('_partials.paragraph')
                @slot('subtitle')
                    Ekip, a rental service
                @endslot
                @slot('thumbnail')
                    /assets/img/ekip/thumb.png
                @endslot
                We designed and developed <a href="https://parcsmaterielsgrandest.fr">Ekip</a>, a web system for creating
                advanced quotes and monitoring orders in the context stage equipment rental, from cart to invoice, smoothly bounded with a legacy system.
            @endcomponent
        @endcomponent

        @component('_partials.section')
            @slot('title')
                Content websites 
            @endslot

            @component('_partials.paragraph')
                @slot('subtitle')
                    peugeot-invest.com
                @endslot
                @slot('banner')
                    /assets/img/toshi/banner.png
                @endslot
                This multilingual website for <a href="https://www.peugeot-invest.com/">Peugeot Invest</a> presents
                various and numerous content types, including dataviz.
            @endcomponent

            @component('_partials.paragraph')
                @slot('subtitle')
                    jeparticipe.cfdt.fr
                @endslot
                @slot('banner')
                    /assets/img/syzito/banner.jpg
                @endslot
                <a href="https://jeparticipe.cfdt.fr">Online platform for the CFDT</a> syndicate, with registration / event management.
            @endcomponent
            @component('_partials.paragraph')
                @slot('subtitle')
                    pactedupouvoirdevivre.fr
                @endslot
                @slot('banner')
                    /assets/img/symfonia/banner.jpg
                @endslot
                <a href="https://pactedupouvoirdevivre.fr">Main website of the alliance</a> of 60 well known organizations which are major players in the protection 
                of the environment, the fight against poverty, support for migrants, popular education, social and solidarity economy and mutuality.
            @endcomponent

        @endcomponent


        @component('_partials.section')
            @slot('title')
                Apps / tools
            @endslot

            @component('_partials.paragraph')
                @slot('subtitle')
                    Treto, a cartographic website
                @endslot
                @slot('banner')
                    /assets/img/treto/banner.png
                @endslot
                We developed <a href="https://treto.fr/">Treto</a> a regional advanced POI platform
                for theaters, companies and show producers, with registration and application, account management, validation workflow, ...
            @endcomponent

            @component('_partials.paragraph')
                @slot('subtitle')
                    Trig, a cartographic iOS / Android app
                @endslot
                @slot('thumbnail')
                    /assets/img/trig/thumb.png
                @endslot
                The <a href="http://www.domainedelatrigaliere.com/" class="regular">Domaine de la Trigalière</a>,
                which rents beautiful and luxury vacation houses in a great area made of forests and lakes,
                asked us to create Trig, a mobile app
                (<a href="https://itunes.apple.com/fr/app/trigali%C3%A8re/id1332741594?mt=8">iOS</a>
                et <a href="https://play.google.com/store/apps/details?id=fr.code16.trig">Android</a>)
                to guide guests across the domain.
            @endcomponent

            @component('_partials.paragraph')
                @slot('subtitle')
                    Beatus CRM
                @endslot
                @slot('thumbnail')
                    /assets/img/beatus/thumb.png
                @endslot
                The <a href="https://culturegrandest.fr" class="regular">Agence culturelle Grand Est</a>
                (the regional entity in charge of cultural development) asked us to work on several projects,
                linked together by a personalized <em>Single Sign On</em> account system and API synchronizations.
                First of all, we fully developed a dedicated custom CRM, linked to all other tools
                to gather data for all contacts.
            @endcomponent

            @component('_partials.paragraph')
                @slot('subtitle')
                    Sapidus
                @endslot
                We also built an intranet platform, Sapidus, which integrates many internal tools
                like calendar and resource management, news feed, packages and letters tracking, ...
            @endcomponent

        @endcomponent
            

        @component('_partials.section')
            @slot('title')
                The team
            @endslot
            @component('_partials.paragraph')
                @slot('subtitle')
                    <div class="flex items-center mb-2">
                        <img class="mr-2 h-12 w-12 rounded-full" src="https://gravatar.com/avatar/{{ md5('philippelonchampt@gmail.com') }}?d=retro" alt="">
                        <span>Philippe Lonchampt</span>
                    </div>
                @endslot
                Founder, manager and main developer of several projects.
                <br><a href="mailto:philippe@code16.fr">email</a>, <a href="https://twitter.com/dvlpp">twitter</a>
            @endcomponent
            @component('_partials.paragraph')
                @slot('subtitle')
                    <div class="flex items-center mb-2">
                        <img class="mr-2 h-12 w-12 rounded-full" src="https://gravatar.com/avatar/{{ md5('arnaud.becher@gmail.com') }}?d=retro" alt="">
                        <span>Arnaud Becher</span>
                    </div>
                @endslot
                Backend developer (PHP and Laravel).
            @endcomponent
            @component('_partials.paragraph')
                @slot('subtitle')
                    <div class="flex items-center mb-2">
                        <img class="mr-2 h-12 w-12 rounded-full" src="https://gravatar.com/avatar/{{ md5('guingand.antoine@gmail.com') }}?d=retro" alt="">
                        <span>Antoine Guingand</span>
                    </div>
                @endslot
                Front-end developer (mobile apps, Vue.js).
            @endcomponent
            @component('_partials.paragraph')
                —<br>
                Of course, when the project requires it, we surround ourselves with external skills 
                (other developers, graphic artists or designers).
            @endcomponent
        @endcomponent
    </div>

    <div class="text-brand-white">
        @component('_partials.section', ['large'=>true])
            Code 16<br>
            <a href="http://www.gothamscm.com/" class="regular">SCM Gotham</a><br>
            24 rue du Vieux marché aux Vins, 67000 Strasbourg, France<br>
            Philippe Lonchampt: <a href="mailto:philippe@code16.fr" class="regular">philippe@code16.fr</a><br>
            <a href="https://github.com/code16" class="regular">Github</a> — <a href="https://medium.com/code16" class="regular">Medium</a>
        @endcomponent
    </div>
@endsection