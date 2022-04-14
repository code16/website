<!doctype html>
<html lang="{{ $lang ?? 'fr' }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Code 16, développement Laravel et Vue.js</title>

        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

        <script src="https://cdn.usefathom.com/script.js" data-site="UYEFQCWU" defer></script>

        {{ $head }}
    </head>
    <body {{ $attributes->class(['home' => $home]) }}>

        @if($home)
            <div class="container absolute pr-3">
                <div class="flex justify-end gap-6">
                    <div>
                        <a href="/blog" class="underline">blog</a>
                    </div>
                    <div>
                        <a href="/" class="{{ $lang == "fr" ? "text-white" : "underline" }}">fr</a>
                        <span class="text-white">|</span>
                        <a href="/en" class="{{ $lang == "en" ? "text-white" : "underline" }}">en</a>
                    </div>
                </div>
            </div>
        @endif

        <div class="p-8 sm:p-16">
            <div id="app" class="container">
                <header class="mb-16">
                    <x-logo />
                </header>

                {{ $slot }}
            </div>
        </div>

        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </body>
</html>
