<!doctype html>
<html lang="{{ $lang ?? 'fr' }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Code 16, développement Laravel et Vue.js</title>

        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

        <script src="https://cdn.usefathom.com/script.js" data-site="UYEFQCWU" defer></script>

        {{ $head ?? null }}
    </head>
    <body {{ $attributes }}>
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
