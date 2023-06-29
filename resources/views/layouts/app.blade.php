<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('page-title', 'Hello Laravel World')</title>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>

<body class="">
    <!--  Includo l'header del sito web con il menu tramite un partial -->
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    <!-- Includo il footer del sito web tramite un partial -->
    @include('partials.footer')

    <!-- Assets JS/CSS -->
    @vite('resources/js/app.js')
</body>

</html>
