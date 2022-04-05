<!doctype html>
<html lang="{{ $lang ?? 'fr' }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Code 16, développement Laravel et Vue.js</title>

        <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Spectral:300,400" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

        <script src="https://cdn.usefathom.com/script.js" data-site="UYEFQCWU" defer></script>

        {{ $head ?? null }}
    </head>
    <body {{ $attributes }}
{{--    class="{{ $background??false ? "bg-$background" : '' }} {{ $bodyClass??'' }}"--}}
    >
        @if($lang ?? null)
            <div class="lang-selector container absolute w-full text-right">
                <span class="mr-3">
                    <a href="/" class="{{ $lang == "fr" ? "text-white" : "underline" }}">fr</a>
                    <span class="text-white">|</span>
                    <a href="/en" class="{{ $lang == "en" ? "text-white" : "underline" }}">en</a>
                </span>
            </div>
        @endif
        <div class="p-8 sm:p-16">
            <div id="app" class="container" :class="{'mobile':isMobile}">
                <header class="mb-16">
                    <a href="/" class="hover:no-underline">
                        <h1 class="logo uppercase tracking-wider text-4xl text-right pb-6 px-2 pt-2 w-64 z-10" v-sticky-title="{ paddingTop:64 }">Code 16</h1>
                    </a>
                </header>
                {{ $slot }}
            </div>
        </div>

        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </body>
</html>
