

<x-layout class="home" lang="en">
    <x-slot:header>
        <x-header>
            <x-header.nav-item href="#approach">
                Our approach
            </x-header.nav-item>
            <x-header.nav-item href="#projects">
                Our projects
            </x-header.nav-item>
            <x-header.nav-item href="#team">
                Team
            </x-header.nav-item>
            <x-header.nav-item href="/blog">
                Blog
            </x-header.nav-item>
        </x-header>
    </x-slot:header>

    <h1 class="sr-only">
        Code 16, Laravel development
    </h1>

    <x-section>
        <x-slot:title>
            Quality web and mobile development
        </x-slot:title>

        <x-paragraph>
            We build since 2007 websites and mobile apps based on open source technologies,
            with an "artisan" state of mind: a tailor-made development that allows control at all levels.
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

    <x-section id="approach" class="bg-brand-darkblue-lighter font-bold">
        <x-slot:title>
            Our approach
        </x-slot:title>

        <x-ui.tabs>
            <x-ui.tab>
                <x-slot:title>
                    We attach great<br>importance to the code
                </x-slot:title>

                <x-paragraph>
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
                    These last years, our expertise is mainly focused on the
                    technologies Laravel, Vue.js, Livewire, Alpine.js, Cordova...
                    around tools like Algolia, AWS, Laravel Forge and Envoyer.
                </x-paragraph>
            </x-ui.tab>

            <x-ui.tab>
                <x-slot:title>
                    Our clients are partners
                </x-slot:title>

                <x-paragraph>
                    Rather than multiplying small projects and contacts, we seek to create partnerships
                    with our clients to work with them over the long term, in order to ensure
                    continuous maintenance to our software.
                </x-paragraph>
            </x-ui.tab>

            <x-ui.tab>
                <x-slot:title>
                    We are involved<br>in open source
                </x-slot:title>

                <x-paragraph>
                    We massively use open source projects in our work, and we regularly contribute to the
                    code of these projects when we find some part where an improvement could be made,
                    whether by fixing a bug or adding a new functionality.
                </x-paragraph>

                <x-paragraph>
                    In the same spirit, we developed and maintain several open source projects, among which we should mention the content management framework Sharp:
                </x-paragraph>
            </x-ui.tab>
        </x-ui.tabs>
    </x-section>

    <x-section id="projects">
        <x-slot:title>
            Sharp for Laravel
        </x-slot:title>

        <x-project-card.sharp>
            Sharp is a generalist and powerful platform for developing content and manage data.
            We use it in many of our projects, to offer a pleasant and powerful tool allowing to publish pages,
            images, videos of the sites as well as to manage orders, products or registrations for example.

            <x-slot:link href="https://sharp.code16.fr">
                Show website
            </x-slot:link>
        </x-project-card.sharp>
    </x-section>

    <x-section>
        <x-slot:title>
            E-commerce and ordering systems
        </x-slot:title>

        <x-project-grid>
            <x-project-card.ek class="col-span-full">
                <x-slot:title>
                    Marketplace with Click and Collect for EK France
                </x-slot:title>

                We have been working for years with EK France, which groups 150+ stores
                (<a href="https://ambianceetstyles.com">Ambiance & Styles</a> and
                <a href="https://www.culinarion.com">Culinarion</a>).
                The main project is the platform tant powers both websites, with a full marketplace:
                Click & Collect and Ship from Store, online payment with multiple accounts, delivery systems,
                synchronization of fidelity accounts... The websites also handle gift card orders
                and wish list management.
            </x-project-card.ek>

            <x-project-card>
                <x-slot:title>
                    Training booking portal for Agence culturelle Grand Est
                </x-slot:title>

                <x-slot:img src="/assets/img/projects/cursus/banner.png"></x-slot:img>

                This <a href="https://culturegrandest.fr/cursus/formations/">course ordering system</a>
                handles course registration via a complex process depending on various course options and registrant type.
                <a href="https://sharp.code16.fr">Sharp</a> is leveraged for content and order management.
            </x-project-card>

            <x-project-card>
                <x-slot:title>
                    High trafic event shop
                </x-slot:title>

                <x-slot:img src="/assets/img/projects/merkur/thumb.png"></x-slot:img>

                We built, for the Centre international d’Art Verrier de Meisenthal (CIAV),
                <a href="https://boutique.ciav-meisenthal.fr">an event shop</a> for glass objects
                including their famous Christmas bulbs.
            </x-project-card>
        </x-project-grid>

        <x-project-item>
            <x-slot:title>
                Rental management system
            </x-slot:title>

            <x-slot:img src="/assets/img/projects/ekip/thumb.png"></x-slot:img>

            We designed and developed <a href="https://parcsmaterielsgrandest.fr">Ekip</a>, a web system for creating
            advanced quotes and monitoring orders in the context stage equipment rental, from cart to invoice, smoothly bounded with a legacy system.
        </x-project-item>
    </x-section>

    <x-section>
        <x-slot:title>
            Content websites
        </x-slot:title>

        <x-project-grid>
            <x-project-card>
                <x-slot:title>
                    peugeot-invest.com
                </x-slot:title>

                <x-slot:img src="/assets/img/projects/toshi/banner.png"></x-slot:img>

                This multilingual website for <a href="https://www.peugeot-invest.com/">Peugeot Invest</a> presents
                various and numerous content types, including dataviz.

                <x-slot:link href="https://www.peugeot-invest.com/">
                    Show website
                </x-slot:link>
            </x-project-card>

            <x-project-card>
                <x-slot:title>
                    pactedupouvoirdevivre.fr
                </x-slot:title>

                <x-slot:img src="/assets/img/projects/symfonia/banner.jpg"></x-slot:img>

                <a href="https://pactedupouvoirdevivre.fr">Main website of the alliance</a> of 60 well known organizations which are major players in the protection
                of the environment, the fight against poverty, support for migrants, popular education, social and solidarity economy and mutuality.
            </x-project-card>
        </x-project-grid>
    </x-section>

    <x-section>
        <x-slot:title>
            Apps / tools
        </x-slot:title>

        <x-project-item>
            <x-slot:title>
                jeparticipe.cfdt.fr
            </x-slot:title>

            <x-slot:img src="/assets/img/projects/syzito/banner.jpg"></x-slot:img>

            <a href="https://jeparticipe.cfdt.fr">Online platform for the CFDT</a> syndicate, with registration / event management.
        </x-project-item>

        <x-project-item>
            <x-slot:title>
                Treto, a cartographic website
            </x-slot:title>

            <x-slot:img src="/assets/img/projects/treto/banner.png"></x-slot:img>

            We developed <a href="https://treto.fr/">Treto</a> a regional advanced POI platform
            for theaters, companies and show producers, with registration and application, account management, validation workflow, ...
        </x-project-item>

        <x-project-item>
            <x-slot:title>
                Trig, a cartographic iOS / Android app
            </x-slot:title>

            <x-slot:img src="/assets/img/projects/trig/thumb.png"></x-slot:img>

            The <a href="http://www.domainedelatrigaliere.com/" class="regular">Domaine de la Trigalière</a>,
            which rents beautiful and luxury vacation houses in a great area made of forests and lakes,
            asked us to create Trig, a mobile app
            (<a href="https://itunes.apple.com/fr/app/trigali%C3%A8re/id1332741594?mt=8">iOS</a>
            et <a href="https://play.google.com/store/apps/details?id=fr.code16.trig">Android</a>)
            to guide guests across the domain.
        </x-project-item>

        <x-project-item>
            <x-slot:title>
                CRM, SSO, intranet tools
            </x-slot:title>

            <x-slot:img src="/assets/img/projects/beatus/banner.jpg"></x-slot:img>

            The <a href="https://culturegrandest.fr" class="regular">Agence culturelle Grand Est</a>
            (the regional entity in charge of cultural development) asked us to work on several projects,
            linked together by a personalized <em>Single Sign On</em> account system and API synchronizations.
            We developed a dedicated custom CRM, linked to all other tools to gather data for all contacts;
            we also built an intranet platform which integrates many internal tools
            like calendar and resource management, news feed, packages and letters tracking...
        </x-project-item>
    </x-section>

    <x-section id="team">
        <x-slot:title>
            The team
        </x-slot:title>

        <x-paragraph>
            <x-slot:subtitle>
                <div class="flex items-center mb-2">
                    <img class="mr-2 h-12 w-12 rounded-full"
                        src="{{ $page->developers['philippe']->avatar }}" alt="">
                    <span>Philippe Lonchampt</span>
                </div>
            </x-slot:subtitle>
            Founder, manager and main developer of several projects.
            <br>
            <a href="mailto:philippe@code16.fr">email</a>,
            <a href="{{ $page->developers['philippe']->twitter }}">twitter</a>
        </x-paragraph>

        <x-paragraph>
            <x-slot:subtitle>
                <div class="flex items-center mb-2">
                    <img class="mr-2 h-12 w-12 rounded-full"
                        src="{{ $page->developers['arnaud']->avatar }}" alt="">
                    <span>Arnaud Becher</span>
                </div>
            </x-slot:subtitle>
            Backend developer (PHP and Laravel).
        </x-paragraph>

        <x-paragraph>
            <x-slot:subtitle>
                <div class="flex items-center mb-2">
                    <img class="mr-2 h-12 w-12 rounded-full"
                        src="{{ $page->developers['antoine']->avatar }}" alt="">
                    <span>Antoine Guingand</span>
                </div>
            </x-slot:subtitle>
            Front-end developer (mobile apps, Vue.js, Alpine.js, Livewire).
        </x-paragraph>

        <x-paragraph>
            —<br>
            Of course, when the project requires it, we surround ourselves with external skills
            (other developers, graphic artists or designers).
        </x-paragraph>
    </x-section>

    <x-section large>
        Code 16<br>
        <a href="http://www.gothamscm.com/" class="regular">SCM Gotham</a><br>
        24 rue du Vieux marché aux Vins, 67000 Strasbourg, France<br>
        <a href="https://github.com/code16" class="regular">Github</a>
        —
        <a href="/blog" class="regular">blog</a>
    </x-section>
</x-layout>
