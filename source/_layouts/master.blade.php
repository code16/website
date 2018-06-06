<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Code 16</title>

    <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Spectral" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/main.css') }}">
</head>
<body class="{{ $background??false ? "bg-$background" : '' }} {{ $bodyClass??'' }}">
    <div class="p-8 sm:p-16">
        <div id="app" class="container">
            <header class="mb-16">
                <a href="/" class="hover:no-underline">
                    <h1 class="uppercase tracking-wider text-4xl {{ $headerClass??'' }} text-right pb-6 px-2 pt-2 w-64 z-10" v-sticky-title="{ paddingTop:64 }">Code 16</h1>
                </a>
            </header>
            @yield('content')
        </div>
    </div>

    <script src="{{ mix('js/main.js') }}"></script>
</body>
</html>
