<div class="flex items-center p-4 justify-between  md:py-8 lg:px-60">
    <a href="{{('/')}}">
        <h1 class="">ARCH Projects</h1>
    </a>
    <button class=" hamburger float-right  text-3xl  lg:hidden">
        <i class="fa-solid fa-bars"></i>
    </button>
</div>
<div class="h-8 lg:h-0 dark:bg-gray-900"></div>
<div class="menu dark:bg-gray-900  lg:h-14  ">
    <ul class="flex lg:flex-row justify-around lg:justify-between  lg:items-center dark:bg-gray-900 text-white h-full px-8 lg:px-60  ">
        <li class="text-sm {{ request()->is('/projects') ? 'active' : ''}}"> <a href="{{ url('/projects') }}">Projects</a></li>
        <li class="text-sm"> <a href="{{ url('/contact') }}"> Contact Us</a>
        <li class="text-sm"><a href="{{ url('/about') }}">About Us</a></li>
    </ul>
</div>