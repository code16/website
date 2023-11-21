

<x-layout class="home" lang="en">
    <x-meta.description
        content='We build since 2007 websites and mobile apps based on open source technologies, with an "artisan" state of mind: a tailor-made development that allows control at all levels.'
    />

    <a class="absolute top-1 left-4 sm:left-8 lg:left-16 uppercase text-xs tracking-wider underline font-bold"
       href="/"
    >
        Version française
    </a>

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
            Quality web<br>and mobile development
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
            but we can of course work remotely. These last years, our expertise is mainly focused on the
            technologies Laravel, Vue.js, Livewire, Alpine.js, Cordova... around tools like Algolia,
            AWS, Laravel Forge and Envoyer.
        </x-paragraph>
    </x-section>

    <x-section id="approach" class="bg-brand-darkblue-lighter font-bold">
        <x-ui.tabs>
            <x-ui.tab>
                <x-slot:title>
                    We attach great importance to the code
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
                    We are involved in open source
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

        <x-project-grid>
            <x-project-card.sharp class="col-span-full">
                Sharp is a generalist and powerful open source platform for developing content and manage data.
                We use it in many of our projects, to offer a pleasant and powerful tool allowing to publish pages,
                images, videos of the sites as well as to manage orders, products or registrations for example.

                <x-slot:link href="https://sharp.code16.fr">
                    Show website
                </x-slot:link>
            </x-project-card.sharp>
        </x-project-grid>
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

                <x-slot:link href="https://ambianceetstyles.com">
                    Show website
                </x-slot:link>
            </x-project-card.ek>

            <x-project-card>
                <x-slot:title>
                    Training booking portal for the Agence culturelle Grand Est
                </x-slot:title>

                <x-slot:img src="/assets/img/projects/cursus/banner.jpg"></x-slot:img>

                This <a href="https://culturegrandest.fr/cursus/formations/">course ordering system</a>
                handles course registration via a complex process depending on various course options and registrant type.
                <a href="https://sharp.code16.fr">Sharp</a> is leveraged for content and order management.

                <x-slot:link href="https://culturegrandest.fr/cursus/formations">
                    Show website
                </x-slot:link>
            </x-project-card>

            <x-project-card>
                <x-slot:title>
                    High trafic event shop
                </x-slot:title>

                <x-slot:img src="/assets/img/projects/merkur/banner.jpg"></x-slot:img>

                We built, for the Centre international d’Art Verrier de Meisenthal (CIAV),
                an event shop for glass objects including their famous Christmas bulbs.

                <x-slot:link href="https://boutique.ciav-meisenthal.fr">
                    Show website
                </x-slot:link>
            </x-project-card>
        </x-project-grid>

        <x-project-list>
            <x-project-item>
                <x-slot:title>
                    Rental management system
                </x-slot:title>

                <x-slot:img src="/assets/img/projects/ekip/thumb.png"></x-slot:img>

                We designed and developed a web system for creating advanced quotes and monitoring
                orders in the context stage equipment rental, from cart to invoice, smoothly bounded
                with a legacy system.

                <x-slot:link href="https://parcsmaterielsgrandest.fr">
                    Show website
                </x-slot:link>
            </x-project-item>
        </x-project-list>
    </x-section>

    <x-section>
        <x-slot:title>
            Content websites
        </x-slot:title>

        <x-paragraph>
            Following projects are diverse but were all been custom developed.
            They rely on <a href="https://sharp.code16.fr">Sharp</a> for their content management.
        </x-paragraph>

        <x-project-grid>
            <x-project-card.acero class="col-span-full">
                <x-slot:title>
                    Content website of Sycomore AM
                </x-slot:title>

                We developed for the asset management company Sycomore AM a multilingual site rich in content and data,
                coming from several sources: a dedicated API allows to update the data of the funds and documents,
                and <a href="https://sharp.code16.fr">Sharp</a> supports the management of the pages and the publication
                of articles.

                <x-slot:link href="https://www.sycomore-am.com">
                    Show website
                </x-slot:link>
            </x-project-card.acero>
        </x-project-grid>

        <x-project-list>
            <x-project-item>
                <x-slot:title>
                    Peugeot Invest website
                </x-slot:title>

                <x-slot:img src="/assets/img/projects/toshi/thumb.jpg"></x-slot:img>

                This multilingual website for Peugeot Invest presents
                various and numerous content types, including dataviz.

                <x-slot:link href="https://www.peugeot-invest.com/">
                    Show website
                </x-slot:link>
            </x-project-item>

            <x-project-item>
                <x-slot:title>
                    Le Maillon theatre website
                </x-slot:title>

                <x-slot:img src="/assets/img/projects/athena/thumb.jpg"></x-slot:img>

                This multilingual website presents the current programming along with the many activities
                offered by this institution.

                <x-slot:link href="https://maillon.eu">
                    Voir le site
                </x-slot:link>
            </x-project-item>

            <x-project-item>
                <x-slot:title>
                    Comédie de Colmar theatre website
                </x-slot:title>

                <x-slot:img src="/assets/img/projects/kolben/thumb.jpg"></x-slot:img>

                This website presents the current programming and archives of the theater,
                with the strong graphic universe developed by the graphic studio Atelier Poste 4.

                <x-slot:link href="https://comedie-colmar.com">
                    Show website
                </x-slot:link>
            </x-project-item>

            <x-project-item>
                <x-slot:title>
                    Agence culturelle Grand Est main portal
                </x-slot:title>

                <x-slot:img src="/assets/img/projects/aca/thumb.png"></x-slot:img>

                Creation of the main portal of the Agence culturelle Grand Est, loaded with numerous contents
                and gateway to all the agency's sites and applications.

                <x-slot:link href="https://culturegrandest.fr">
                    Show website
                </x-slot:link>
            </x-project-item>
        </x-project-list>

    </x-section>

    <x-section>
        <x-slot:title>
            Apps / tools
        </x-slot:title>

        <x-project-grid>
            <x-project-card>
                <x-slot:title>
                    Internal democracy platform for the CFDT union
                </x-slot:title>

                <x-slot:img src="/assets/img/projects/syzito/banner.jpg"></x-slot:img>

                Creation of the CFDT members' platform, presenting all the debates and webinars
                proposed within the framework of the internal democracy of the union, and allowing to register or to
                propose new ones. All the management of registrations, debates, proposals and content is integrated in Sharp.

                <x-slot:link href="https://jeparticipe.cfdt.fr/">
                    Show website
                </x-slot:link>
            </x-project-card>

            <x-project-card>
                <x-slot:title>
                    Application / CRM in the insurance sector
                </x-slot:title>

                <x-slot:img src="/assets/img/projects/barbon/banner.jpg"></x-slot:img>

                We developed, for the French company <a href="https://www.bureau132.fr/">Bureau 132</a>,
                a contact platform for insurance brokers, allowing to manage requests for quotation through a dedicated workflow.

                <x-slot:link href="/posts/a-full-app-in-sharp">
                    Read the blog post
                </x-slot:link>
            </x-project-card>


        </x-project-grid>

        <x-project-list>
            <x-project-item>
                <x-slot:title>
                    Live performance platform of the Grand Est
                </x-slot:title>

                <x-slot:img src="/assets/img/projects/treto/thumb.png"></x-slot:img>

                We designed and built the platform Treto, which brings together venues, companies and production offices
                on a map with numerous filters and search tools. The platform also offers access for publishing announcements, show calendars...

                <x-slot:link href="https://treto.fr">
                    Show website
                </x-slot:link>
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

                <x-slot:img src="/assets/img/projects/beatus/thumb.jpg"></x-slot:img>

                The <a href="https://culturegrandest.fr" class="regular">Agence culturelle Grand Est</a>
                (the regional entity in charge of cultural development) asked us to work on several projects,
                linked together by a personalized <em>Single Sign On</em> account system and API synchronizations.
                We developed a dedicated custom CRM, linked to all other tools to gather data for all contacts;
                we also built an intranet platform which integrates many internal tools
                like calendar and resource management, news feed, packages and letters tracking...
            </x-project-item>
        </x-project-list>
    </x-section>

    <x-section id="team">
        <x-slot:title>
            The team
        </x-slot:title>

        <x-team-member-item :member="$page->developers['philippe']">
            Founder, manager and main developer of several projects.
            <br>
            <a href="mailto:philippe@code16.fr">email</a>,
            <a href="{{ $page->developers['philippe']->twitter }}">twitter</a>,
            <a href="{{ $page->developers['philippe']->linkedIn }}">linkedIn</a>
        </x-team-member-item>

        <x-team-member-item :member="$page->developers['arnaud']">
            Backend developer (PHP and Laravel).
            <br>
            <a href="{{ $page->developers['arnaud']->twitter }}">twitter</a>,
            <a href="{{ $page->developers['arnaud']->linkedIn }}">linkedIn</a>
        </x-team-member-item>

        <x-team-member-item :member="$page->developers['antoine']">
            Front-end developer (mobile apps, Vue.js, Alpine.js, Livewire).
            <br>
            <a href="{{ $page->developers['antoine']->linkedIn }}">linkedIn</a>
        </x-team-member-item>

        <x-paragraph>
            —<br>
            Of course, when the project requires it, we surround ourselves with external skills
            (other developers, graphic artists or designers).
        </x-paragraph>
    </x-section>

    <x-footer />
</x-layout>
