<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body id="@yield('body-id')" class="font-sans text-gray-900 antialiased">
    <div id="@yield('div-id')">
        <div id="@yield('newdiv-id')">
            <div class=" flex flex-col sm:justify-center items-center pt-6 sm:pt-0 ">
                

                <div class="w-full sm:max-w-md  px-6 py-4   overflow-hidden sm:rounded-lg">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</body>
</html>
