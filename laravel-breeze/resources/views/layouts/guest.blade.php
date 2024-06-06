<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>    
            @section('full-title')
                @yield('title') - {{ config('app.name', 'EraStudent') }}
            @show
        </title>
        <link rel="icon" type="image/png" href="{{ asset('img/ehb.png') }}" />
        @stack('head')
    </head>
<body class="@yield('body-class')">
        <!-- Body content -->
        @yield('content')
    </body>
</html>
