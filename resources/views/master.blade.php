<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Stats+ | @yield("title")</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        @vite('resources/css/app.css')
    </head>
    <body class="" style="font-family: 'Quicksand', sans-serif;">
        <nav class="bg-blue-600">
            <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                <h1><a href={{ route("home") }}>Stats<sup>+</sup></a></h1>
                <ul>
                    <li><a href={{ route("continent.index") }}>Continents</a></li>
                    <li><a href={{ route("country.index") }}>Pays</a></li>
                    <li><a href={{ route("operator.index") }}>Opérateurs</a></li>
                    <li><a href={{ route("lottery.index") }}>Lotterie</a></li>
                </ul>
            </div>
        </nav>
        @yield("content")
        @yield("scripts")
    </body>
</html>
