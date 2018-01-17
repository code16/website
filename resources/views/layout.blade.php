<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Code 16</title>

    <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Spectral" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="@yield('body_class')">
    @yield('content')
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
