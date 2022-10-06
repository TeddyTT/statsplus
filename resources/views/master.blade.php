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
        @vite(['resources/css/reset.css', 'resources/css/all.min.css', 'resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-sky-400 font-[Quicksand]">
            <nav id="header" class="bg-sky-500 p-3 mx-auto max-w-screen-xl md:flex md:items-center md:justify-between">
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
    </body>
</html>
