

<x-layout class="home" lang="en">

    <h1 class="sr-only">
        Code 16, Laravel development
    </h1>

    <div class="text-brand-white">
        <x-section large>
            <x-paragraph>
                <x-slot name="title">
                    Quality web development
                </x-slot>
                We build since 2007 websites and mobile apps based on open source technologies,
                with an "artisan" state of mind: a tailor-made development that allows control at all levels.
                We have mainly focused on <a href="https://laravel.com" class="regular">Laravel</a>
                and <a href="https://vuejs.org/" class="regular">Vue.js</a> in recent years.
            </x-paragraph>

            <x-paragraph>
                Our customers have one thing in common: they want a solution adapted to a
                problem that is not necessarily standard, while benefiting from tools that make
                them autonomous on a daily basis.
            </x-paragraph>

            <x-paragraph>
                We are located in Strasbourg, a city on the eastern border of France,
                but we can of course work remotely.
            </x-paragraph>
        </x-section>

        <x-section>
            <x-slot name="title">
                Our approach
            </x-slot>

            <x-paragraph>
                <x-slot name="title">
                    We attach great<br>importance to the code
                </x-slot>
                Our job is to understand a client's need, translate it into shared
                specifications on both sides and ultimately convert it into code:
                that's what we focus all our efforts on.
            </x-paragraph>

            <x-paragraph>
                Experience shows us that this code, to be reliable and able to adapt to future needs,
                must be mastered (which implies to depend only on open source projects),
                concise (so that it remains understandable over time, and that it is simple to replace
                if a new need is expressed), and systematically accompanied by an automated suite of unit
                and functional tests (used at first write stage and even more after, to limit as much as possible regressions
                over the versions).
            </x-paragraph>

            <x-paragraph>
                <x-slot name="title">
                    Our clients are partners
                </x-slot>
                Rather than multiplying small projects and contacts, we seek to create partnerships
                with our clients to work with them over the long term, in order to ensure
                continuous maintenance to our software.
            </x-paragraph>

            <x-paragraph>
                <x-slot name="title">
                    We are involved<br>in open source
                </x-slot>
                We massively use open source projects in our work, and we regularly contribute to the
                code of these projects when we find some part where an improvement could be made,
                whether by fixing a bug or adding a new functionality.
            </x-paragraph>

            <x-paragraph>
                In the same spirit, we developed and maintain several open source projects, among which we should mention the content management framework Sharp:
            </x-paragraph>

            <x-project-item>
                <x-slot name="title">
                    Sharp for Laravel
                </x-slot>

                <x-slot name="date">
                    since 2017
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

            <h3 class="mb-4 mt-12 text-xl md:text-3xl lg:text-4xl">
                E-commerce and ordering systems
            </h3>

            <x-project-list>
                <x-project-item>
                    <x-slot name="title">
                        EK France
                    </x-slot>

                    <x-slot name="banner" src="assets/img/ek/banner.png"></x-slot>

                    We have been working for years with EK France, which groups 150+ stores
                    (<a href="https://ambianceetstyles.com">Ambiance & Styles</a> and
                    <a href="https://www.culinarion.com">Culinarion</a>).
                    The main project is the platform tant powers both websites, with a full marketplace:
                    Click & Collect and Ship from Store, online payment with multiple accounts, delivery systems,
                    synchronization of fidelity accounts... The websites also handle gift card orders
                    and wish list management.
                </x-project-item>

                <x-project-item>
                    <x-slot name="title">
                        Projet Cursus
                    </x-slot>

                    <x-slot name="date">
                        since 2021
                    </x-slot>

                    <x-slot name="banner" src="assets/img/cursus/banner.png"></x-slot>

                    This <a href="https://culturegrandest.fr/cursus/formations/">course ordering system</a>
                    handles course registration via a complex process depending on various course options and registrant type.
                    <a href="https://sharp.code16.fr">Sharp</a> is leveraged for content and order management.
                </x-project-item>

                <x-project-item>
                    <x-slot name="title">
                        Merkur, a high trafic event shop
                    </x-slot>

                    <x-slot name="thumbnail" src="assets/img/merkur/thumb.png"></x-slot>

                    We built, for the Centre international d’Art Verrier de Meisenthal (CIAV),
                    <a href="https://boutique.ciav-meisenthal.fr">an event shop</a> for glass objects
                    including their famous Christmas bulbs.
                </x-project-item>

                <x-project-item>
                    <x-slot name="title">
                        Ekip, a rental service
                    </x-slot>

                    <x-slot name="thumbnail" src="assets/img/ekip/thumb.png"></x-slot>

                    We designed and developed <a href="https://parcsmaterielsgrandest.fr">Ekip</a>, a web system for creating
                    advanced quotes and monitoring orders in the context stage equipment rental, from cart to invoice, smoothly bounded with a legacy system.
                </x-project-item>
            </x-project-list>
        </x-section>

        <x-section>
            <x-slot name="title">
                Content websites
            </x-slot>

            <x-project-list>
                <x-project-item>
                    <x-slot name="title">
                        peugeot-invest.com
                    </x-slot>

                    <x-slot name="website_link" href="https://www.peugeot-invest.com/"></x-slot>

                    This multilingual website for <a href="https://www.peugeot-invest.com/">Peugeot Invest</a> presents
                    various and numerous content types, including dataviz.
                </x-project-item>

                <x-project-item>
                    <x-slot name="title">
                        jeparticipe.cfdt.fr
                    </x-slot>

                    <x-slot name="banner" src="assets/img/syzito/banner.jpg"></x-slot>

                    <a href="https://jeparticipe.cfdt.fr">Online platform for the CFDT</a> syndicate, with registration / event management.
                </x-project-item>

                <x-project-item>
                    <x-slot name="title">
                        pactedupouvoirdevivre.fr
                    </x-slot>

                    <x-slot name="banner" src="assets/img/symfonia/banner.jpg"></x-slot>

                    <a href="https://pactedupouvoirdevivre.fr">Main website of the alliance</a> of 60 well known organizations which are major players in the protection
                    of the environment, the fight against poverty, support for migrants, popular education, social and solidarity economy and mutuality.
                </x-project-item>
            </x-project-list>
        </x-section>

        <x-section>
            <x-slot name="title">
                Apps / tools
            </x-slot>

            <x-project-list>
                <x-project-item separator>
                    <x-slot name="title">
                        Treto, a cartographic website
                    </x-slot>

                    <x-slot name="banner" src="assets/img/treto/banner.png"></x-slot>

                    We developed <a href="https://treto.fr/">Treto</a> a regional advanced POI platform
                    for theaters, companies and show producers, with registration and application, account management, validation workflow, ...
                </x-project-item>

                <x-project-item separator>
                    <x-slot name="title">
                        Trig, a cartographic iOS / Android app
                    </x-slot>
                    <x-slot name="thumbnail" src="assets/img/trig/thumb.png"></x-slot>

                    The <a href="http://www.domainedelatrigaliere.com/" class="regular">Domaine de la Trigalière</a>,
                    which rents beautiful and luxury vacation houses in a great area made of forests and lakes,
                    asked us to create Trig, a mobile app
                    (<a href="https://itunes.apple.com/fr/app/trigali%C3%A8re/id1332741594?mt=8">iOS</a>
                    et <a href="https://play.google.com/store/apps/details?id=fr.code16.trig">Android</a>)
                    to guide guests across the domain.
                </x-project-item>

                <x-project-item separator>
                    <x-slot name="title">
                        Beatus CRM
                    </x-slot>

                    <x-slot name="thumbnail" src="assets/img/beatus/thumb.png"></x-slot>

                    The <a href="https://culturegrandest.fr" class="regular">Agence culturelle Grand Est</a>
                    (the regional entity in charge of cultural development) asked us to work on several projects,
                    linked together by a personalized <em>Single Sign On</em> account system and API synchronizations.
                    First of all, we fully developed a dedicated custom CRM, linked to all other tools
                    to gather data for all contacts.
                </x-project-item>

                <x-project-item>
                    <x-slot name="title">
                        Sapidus
                    </x-slot>

                    <x-slot name="thumbnail" src="assets/img/sapidus/thumb.png"></x-slot>

                    We also built an intranet platform, Sapidus, which integrates many internal tools
                    like calendar and resource management, news feed, packages and letters tracking, ...
                </x-project-item>
            </x-project-list>
        </x-section>

        <x-section>
            <x-slot name="title">
                The team
            </x-slot>
            <x-paragraph>
                <x-slot name="subtitle">
                    <div class="flex items-center mb-2">
                        <img class="mr-2 h-12 w-12 rounded-full"
                            src="https://gravatar.com/avatar/{{ md5('philippelonchampt@gmail.com') }}?d=retro" alt="">
                        <span>Philippe Lonchampt</span>
                    </div>
                </x-slot>
                Founder, manager and main developer of several projects.
                <br><a href="mailto:philippe@code16.fr">email</a>, <a href="https://twitter.com/dvlpp">twitter</a>
            </x-paragraph>

            <x-paragraph>
                <x-slot name="subtitle">
                    <div class="flex items-center mb-2">
                        <img class="mr-2 h-12 w-12 rounded-full"
                            src="https://gravatar.com/avatar/{{ md5('arnaud.becher@gmail.com') }}?d=retro" alt="">
                        <span>Arnaud Becher</span>
                    </div>
                </x-slot>
                Backend developer (PHP and Laravel).
            </x-paragraph>

            <x-paragraph>
                <x-slot name="subtitle">
                    <div class="flex items-center mb-2">
                        <img class="mr-2 h-12 w-12 rounded-full"
                            src="https://gravatar.com/avatar/{{ md5('guingand.antoine@gmail.com') }}?d=retro" alt="">
                        <span>Antoine Guingand</span>
                    </div>
                </x-slot>
                Front-end developer (mobile apps, Vue.js).
            </x-paragraph>

            <x-paragraph>
                —<br>
                Of course, when the project requires it, we surround ourselves with external skills
                (other developers, graphic artists or designers).
            </x-paragraph>
        </x-section>
    </div>

    <div class="text-brand-white">
        <x-section large>
            Code 16<br>
            <a href="http://www.gothamscm.com/" class="regular">SCM Gotham</a><br>
            24 rue du Vieux marché aux Vins, 67000 Strasbourg, France<br>
            Philippe Lonchampt: <a href="mailto:philippe@code16.fr" class="regular">philippe@code16.fr</a><br>
            <a href="https://github.com/code16" class="regular">Github</a> — <a href="https://medium.com/code16" class="regular">Medium</a>
        </x-section>
    </div>
</x-layout>
