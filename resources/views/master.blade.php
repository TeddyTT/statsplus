<!DOCTYPE html>
<html class="font-mono" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Stats+ | @yield("title")</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        @vite(['resources/css/reset.css'])
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="">
        <div class="container">
            <nav class="navbar navbar-light navbar-expand-lg pt-3">
                <a class="navbar-brand" href={{ route("home") }}>Stats<sup>+</sup></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->routeIs("continent.*")) ? 'active' : '' }}" href={{ route("continent.index") }}>Continents</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->routeIs("country.*")) ? 'active' : '' }}" href={{ route("country.index") }}>Countries</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->routeIs("operator.*")) ? 'active' : '' }}" href={{ route("operator.index") }}>Operators</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->routeIs("lottery.*")) ? 'active' : '' }}" href={{ route("lottery.index") }}>Lotteries</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->routeIs("draw.*")) ? 'active' : '' }}" href={{ route("draw.index") }}>Draws</a>
                    </li>
                </ul>
            </nav>
            <div>
                <hr />
                @yield('content')

            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>
