<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - {{ config('app.name', 'EraStudent') }}</title>
    <link rel="icon" type="image/png" href="{{ asset('img/ehb.png') }}" />
    @stack('head')
</head>
<body>
    <!-- Body content -->

    @yield('content')
</body>
</html>