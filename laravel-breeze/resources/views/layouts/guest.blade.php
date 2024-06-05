<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>    
            @section('full-title')
                @yield('title') - {{ config('app.name', 'EraStudent') }}
            @show
        </title>
        <link rel="icon" type="image/png" href="{{ asset('img/ehb.png') }}" />
        @stack('head')
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        @yield('css')

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            body{
                background-color: rgb(228,228,228);
            }
        </style>
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <!-- Body content -->
        @yield('content')
    </body>
</html>
