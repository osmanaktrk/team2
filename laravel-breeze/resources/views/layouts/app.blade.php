<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            box-sizing: border-box
            background-color: rgb(228, 228, 228);
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: contain;
        }
    </style>
</head>
<body class="@yield('body-class')">

    <div class="min-h-screen" style="width:100%; ">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif
    <!-- Body content -->

    @yield('content')
    </div>
</body>
</html>