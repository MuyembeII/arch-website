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
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased ">

    <!-- Navbar -->
    <div class=" h-screen ">
        <div class="flex items-center p-4 justify-between  md:py-8 lg:px-60">
            <h1 class="">ARCH Projects</h1>
            <button class=" hamburger float-right  text-3xl  lg:hidden">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
        <div class="h-8 lg:h-0 dark:bg-gray-900"></div>
        <div class="menu dark:bg-gray-900  lg:h-14  ">
            <ul class="flex lg:flex-row justify-around lg:justify-between  lg:items-center dark:bg-gray-900 text-white h-full px-8 lg:px-60  ">
                <li class="text-sm"> <a href="{{ url('/projects') }}">Projects</a></li>
                <li class="text-sm"> <a href="{{ url('/contact') }}"> Contact Us</a>
                <li class="text-sm"><a href="{{ url('/about') }}">About Us</a></li>
            </ul>
        </div>

        <!-- Hero -->
        <div class=" flex mt-6 px-2 lg:px-60 flex-col md:flex-row">
            <div x-data="imageSlider" class="relative  max-w-2xl overflow-hidden rounded-md bg-gray-100 p-2 sm:p-4">
                <div class="absolute right-5 top-5 z-10 rounded-full bg-gray-600 px-2 text-center text-sm text-white">
                    <span x-text="currentIndex"></span>/<span x-text="images.length"></span>
                </div>

                <button @click="previous()" class="absolute left-5 top-1/2 z-10 flex h-11 w-11 -translate-y-1/2 items-center justify-center rounded-full bg-gray-100 shadow-md">
                    <i class="fas fa-chevron-left text-2xl font-bold text-gray-500"></i>
                </button>

                <button @click="forward()" class="absolute right-5 top-1/2 z-10 flex h-11 w-11 -translate-y-1/2 items-center justify-center rounded-full bg-gray-100 shadow-md">
                    <i class="fas fa-chevron-right text-2xl font-bold text-gray-500"></i>
                </button>

                <div class="relative md:w-130 h-60 md:h-80 ">
                    <template x-for="(image, index) in images">
                        <div x-show="currentIndex == index + 1" x-transition:enter="transition transform duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition transform duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="absolute top-0">
                            <img :src="image" alt="image" class="rounded-sm" />
                        </div>
                    </template>
                </div>

            </div>

            <div class=" mt-4 md:mt-0 md:pl-20 md:w-130">
                <h2>Some Tile</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem voluptates vel perspiciatis repellat recusandae minima, iusto rerum? Facere repellendus voluptas perferendis veniam, molestiae est eligendi ducimus harum ut amet quisquam!</p>
            </div>

        </div>

    </div>
</body>

</html>