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
    <body class="bg-primary text-white">
        <div class="container">
            <nav class="navbar navbar-dark bg-primary navbar-expand-lg">
                <a class="navbar-brand" href="#">Stats+</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Lotteries</a>
                    </li>
                </ul>
            </nav>
            <div class="p-5 mb-4 bg-light text-black rounded-3">
                <div class="container-fluid py-5 row">
                    <div class="col-md-8">
                        <h1 class="display-6 fw-bold">Statistics of your favorite lotteries</h1>
                        <p class="fs-5">Among a selection of 12 lotteries available in 5 countries, find the one you like.</p>
                        <button class="btn btn-primary btn-md" type="button">See lotteries</button>
                    </div>
                    <div class="col-md-4">
                        
                        <img src="{{ Vite::asset('resources/img/home.svg') }}" alt="Logo" width="400" height="150" class="d-inline-block align-text-top">
                    </div>
                </div>
            </div>
            <div>
                <h2>Last draws</h2>
                <div class="row">
                    <div class="col-md-4 p-1">
                        <div class="bg-light text-black rounded-3">
                            <h3>Draw #123</h3>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                    <div class="col-md-4 bg-light text-black rounded-3">
                        <h3>Draw #123</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="col-md-4 bg-light text-black rounded-3">
                        <h3>Draw #123</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
            <div class="py-5 mb-4">
                <div class="container-fluid row">
                    <div class="col-md-4">
                        <img src="{{ Vite::asset('resources/img/world.svg') }}" alt="Logo" width="400" height="150" class="d-inline-block align-text-top">
                    </div>
                    <div class="col-md-8">
                        <h1 class="display-6 fw-bold">Statistics of your favorite lotteries</h1>
                        <p class="fs-5">Among a selection of 12 lotteries available in 5 countries, find the one you like.</p>
                        <button class="btn btn-primary btn-md" type="button">See lotteries</button>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
    {{-- <body class="bg-sky-400 font-[Quicksand]">
        <div class="bg-sky-500 max-h-screen">
            <nav id="header" class="p-3  mx-auto max-w-screen-xl md:flex md:items-center md:justify-between">
                <div class="flex items-center justify-between">
                    <h1 class="text-white text-3xl font-bold cursor-pointer cursor">
                        <a href={{ route("home") }}>Stats<sup>+</sup></a>
                    </h1>
                    <span class="text-white text-3xl cursor-pointer block md:hidden"><i name="menu" class="fa-solid fa-bars" onclick="Menu(this)"></i></span>
                </div>
                <ul class="text-white bg-sky-500 left-0 w-full md:w-auto md:flex md:items-center z-[-1] md:z-auto absolute md:static top-[-400px]">
                    <li class="mx-4 my-6 md:my-0"><a href="#" class="text-xl">Continents</a></li>
                    <li class="mx-4 my-6 md:my-0"><a href="#" class="text-xl">Countries</a></li>
                    <li class="mx-4 my-6 md:my-0"><a href="#" class="text-xl">Operators</a></li>
                    <li class="mx-4 my-6 md:my-0"><a href="#" class="text-xl">Lotteries</a></li>
                    <li class="mx-4 my-6 md:my-0"><a href="#" class="text-xl">Draws</a></li>
                </ul>
            </nav>
        </div>
            <div class="pt-24">
                <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
                  <!--Left Col-->
                  <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
                    <h1 class="my-4 text-5xl font-bold leading-tight">
                      Statistics <br/>for your favorites lotteries
                    </h1>
                    <p class="leading-normal text-2xl mb-8">
                      Sub-hero message, not too long and not too short. Make it just right!
                    </p>
                    <button class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                      Subscribe
                    </button>
                  </div>
                  <!--Right Col-->
                  <div class="w-full md:w-3/5 py-6 text-center">
                    <img class="w-full md:w-4/5 z-50" src="hero.png" />
                  </div>
                </div>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum quo rem cumque, saepe repudiandae ipsa harum error consequatur assumenda in eligendi possimus voluptate nesciunt quisquam porro vel vero sapiente beatae!</p>
                <nav>
                        <ul>
                            <li><a href={{ route("continent.index") }}>Continents</a></li>
                            <li><a href={{ route("country.index") }}>Pays</a></li>
                            <li><a href={{ route("operator.index") }}>Opérateurs</a></li>
                            <li><a href={{ route("lottery.index") }}>Lotterie</a></li>
                            <li><a href={{ route("draw.index") }}>Draw</a></li>
                        </ul>
                    </div>
                </nav>
            @yield("content")
            <script>
                function Menu(e) {
                    let list = document.querySelector("#header > ul");

                    if (e.className === "fa-solid fa-bars") {
                        e.className = "fa-solid fa-xmark";
                        list.classList.remove("absolute");
                    } else {
                        e.className = "fa-solid fa-bars";
                        list.classList.add("absolute");
                    }
                }
            </script>
            @yield("scripts")
        </div>
    </body> --}}
</html>
