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

    <!-- Styles -->
    <style>

    </style>

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
            <input type="checkbox" id="check" hidden>
            <label for="check" class="float-right  text-3xl leading-[80px] lg:hidden">
                <i class="fa-solid fa-bars"></i>
            </label>
        </div>

        <div class=" dark:bg-gray-900 h-2/6 lg:h-14  ">
            <ul class=" flex flex-col lg:flex-row justify-around lg:items-center h-full px-8 leading-[80px]  ">
                <li class="text-sm text-gray-700 dark:text-gray-500 "> <a href="{{ url('/projects') }}">Projects</a></li>
                <li class="text-sm text-gray-700 dark:text-gray-500 "> <a href="{{ url('/contact') }}"> Contact Us</a>
                <li class="text-sm text-gray-700 dark:text-gray-500 "><a href="{{ url('/about') }}">About Us</a></li>
            </ul>
        </div>

    </div>

    </div>
</body>

</html>