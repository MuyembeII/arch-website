<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@component('components.imports')
@slot('title')
Projects
@endslot
@endcomponent


<div>
    @component('components.navbar')
    @endcomponent
    <div class="project">
        <div class="container my-6 lg:px-64">
            <!-- project 1 -->
            <div class="proj flex flex-col align-center px-4 lg:flex-row md:px-0 ">
                <img src="{{url('/images/img7.jpg')}}" alt="image" class=" md:w-64 h-64 md:h-60" style="object-fit: cover"" />
                <div class=" text flex flex-col lg:ml-4">
                <h1 class="text-xl font-bold">Project 1</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere neque cum necessitatibus quod! Repellendus odit eligendi aperiam, a porro temporibus sed, vitae libero nisi quia consequatur vero! Vel, sed laudantium? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit est maiores reprehenderit! Possimus quia, et quae doloribus officiis at id voluptatibus reiciendis minus nulla cum repudiandae optio non reprehenderit quidem.</p>
            </div>
        </div>

        <!-- project 2 -->
        <div class="proj flex flex-col align-center px-4 pt-4 md:pt-12 lg:flex-row md:px-0 md:ml-8">
            <img src="{{url('/images/img2.jpg')}}" alt="image" class=" md:w-64 h-64 md:h-60" style="object-fit: cover" />
            <div class="text flex flex-col lg:ml-4">
                <h1 class="text-xl font-bold">Project 2</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere neque cum necessitatibus quod! Repellendus odit eligendi aperiam, a porro temporibus sed, vitae libero nisi quia consequatur vero! Vel, sed laudantium? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit est maiores reprehenderit! Possimus quia, et quae doloribus officiis at id voluptatibus reiciendis minus nulla cum repudiandae optio non reprehenderit quidem.</p>
            </div>
        </div>

        <!-- project 3 -->
        <div class="proj flex flex-col align-center px-4 pt-4 md:pt-12 lg:flex-row md:px-0 md:ml-24">
            <img src="{{url('/images/img4.jpg')}}" alt="image" class=" md:w-64 h-64 md:h-60" style="object-fit: cover" />
            <div class="text flex flex-col lg:ml-4">
                <h1 class="text-xl font-bold">Project 3</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere neque cum necessitatibus quod! Repellendus odit eligendi aperiam, a porro temporibus sed, vitae libero nisi quia consequatur vero! Vel, sed laudantium? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit est maiores reprehenderit! Possimus quia, et quae doloribus officiis at id voluptatibus reiciendis minus nulla cum repudiandae optio non reprehenderit quidem.</p>
            </div>
        </div>

        <!-- project 2 -->
        <div class="proj flex flex-col align-center px-4 pt-4 md:pt-12 lg:flex-row md:px-0 md:ml-8">
            <img src="{{url('/images/img3.jpg')}}" alt="image" class=" md:w-64 h-64 md:h-60" style="object-fit: cover" />
            <div class="text flex flex-col lg:ml-4">
                <h1 class="text-xl font-bold">Project 4</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere neque cum necessitatibus quod! Repellendus odit eligendi aperiam, a porro temporibus sed, vitae libero nisi quia consequatur vero! Vel, sed laudantium? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit est maiores reprehenderit! Possimus quia, et quae doloribus officiis at id voluptatibus reiciendis minus nulla cum repudiandae optio non reprehenderit quidem.</p>
            </div>
        </div>
    </div>
</div>
</div>