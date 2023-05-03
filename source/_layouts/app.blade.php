<!doctype html>
<html lang="{{ $lang ?? 'fr' }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @php($title = ($title ? trim($title) . ' - ' : '') . 'Code 16, développement Laravel et Vue.js')

        <title>{{ $title }}</title>

        @if($metaDescription)
            <meta name="description" content="{{ $metaDescription->attributes['content'] }}">
        @endif

        <meta property="og:type" content="{{ $metaType->attributes['content'] ?? 'website' }}">
        <meta property="og:title" content="{{ $title }}">
        <meta property="og:image" content="{{ $metaImage->attributes['content'] ?? '/assets/img/og-image.png' }}">
        @if($metaDescription)
            <meta property="og:description" content="{{ $metaDescription->attributes['content'] }}">
        @endif

        <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicons/favicon-32x32.png">
        <link rel="manifest" href="/assets/favicons/site.webmanifest">
        <link rel="icon" href="/assets/favicons/favicon.ico" sizes="any">

        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

        <link rel="alternate" type="application/rss+xml" title="Code 16’s Blog" href="{{ $page->baseUrl }}/blog/feed.atom" />

        <link rel="preload" href="/assets/fonts/spectral-v11-latin-regular.woff2" as="font" type="font/woff2" crossorigin>
        <link rel="preload" href="/assets/fonts/karla-v21-latin-700.woff2" as="font" type="font/woff2" crossorigin>

        <script src="https://cdn.usefathom.com/script.js" data-site="UYEFQCWU" defer></script>
        <script async src="https://umami.dvlpp.com/script.js" data-website-id="b1d26098-0f1b-423d-a6db-d2bc22bed6db"></script>

        @if(!$page->production)
            <script src="https://cdn.tailwindcss.com"></script>
            <script>
                tailwind.config = {
                    theme: {!! \Illuminate\Support\Str::of(file_get_contents(__DIR__ . '/../tailwind.config.js'))->after('theme:')->before('plugins:') !!}
                }
            </script>
        @endif
    </head>
    <body {{ $attributes }}>
        {{ $nav }}

        <div id="app">
            @if($header)
                {{ $header }}
            @else
                <x-header />
            @endif

            <main>
                {{ $slot }}
            </main>
        </div>

        <x-image-dialog />

        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
        @stack('script')
    </body>
</html>
