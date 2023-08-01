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
</div>