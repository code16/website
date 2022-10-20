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
