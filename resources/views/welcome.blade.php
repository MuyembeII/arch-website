<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/js/app.js')
    <!-- Styles -->


    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <div class=" h-screen">
        <div class="flex items-center p-4 justify-between  md:p-8">
            <h1 class="">ARCH Projects</h1>
            <button class=" hamburger float-right  text-3xl  lg:hidden">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>

        <div class="menu dark:bg-gray-900  lg:h-14  ">
            <ul class="flex lg:flex-row justify-around lg:items-center dark:bg-gray-900 text-white h-full px-8   ">
                <li class="text-sm"> <a href="{{ url('/projects') }}">Projects</a></li>
                <li class="text-sm"> <a href="{{ url('/contact') }}"> Contact Us</a>
                <li class="text-sm"><a href="{{ url('/about') }}">About Us</a></li>
            </ul>
        </div>

    </div>

    </div>
</body>

</html>