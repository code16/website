<!doctype html>
<html lang="{{ $lang ?? 'fr' }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            @if($title)
                {{ $title }} -
            @endif
            Code 16, développement Laravel et Vue.js
        </title>

        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

        <link rel="alternate" type="application/rss+xml" title="Code 16’s Blog" href="{{ $page->baseUrl }}/blog/feed.atom" />

        <script src="https://cdn.usefathom.com/script.js" data-site="UYEFQCWU" defer></script>
    </head>
    <body {{ $attributes }}>

        {{ $nav }}

        <div class="p-8 sm:p-16">
            <div id="app" class="container">
                <header class="mb-16">
                    <x-logo />
                </header>

                <main>
                    {{ $slot }}
                </main>
            </div>
        </div>

        <x-image-dialog />

        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
        @stack('script')
    </body>
</html>
