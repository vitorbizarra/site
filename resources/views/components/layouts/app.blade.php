<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" 
    x-data="tallstackui_darkTheme('dark-theme', true)"
    x-bind:class="{ 'dark bg-zinc-900': darkTheme, 'bg-zinc-100': !darkTheme }">

<head>
    @include('googletagmanager::head')

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        [x-cloak] {
            display: none;
        }
    </style>

    <tallstackui:script />
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ isset($title) ? config('app.name') . " - $title" : config('app.name') }}</title>
    {!! seo() !!}
    @yield('seo')
</head>

<body>
    @include('googletagmanager::body')

    <x-dialog />

    <livewire:web.components.navbar />

    {{ $slot }}

    <livewire:web.components.footer />

    @livewireScripts
</body>

</html>
