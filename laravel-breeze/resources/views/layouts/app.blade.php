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
</head>
<body class="@yield('body-class')">
    @if(auth()->check())

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
    @else
        <!-- Redirect to login or display a message -->
        <div class="min-h-screen flex items-center justify-center bg-gray-100 py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-md w-full space-y-8">
                <div>
                    <img class="mx-auto h-12 w-auto" src="{{ asset('img/ehb.png') }}" alt="EraStudent">
                    <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                        Welcome to EraStudent
                    </h2>
                    <p class="mt-2 text-center text-sm text-gray-600">
                        Please login to continue
                    </p>
                    <a href="{{ route('register') }}" class="btn btn-outline-danger" style="margin-left: 10px; margin-top: 10px;">
                        {{ __('Join now!') }}
                    </a>
                </div>
            </div>
        </div>
    @endif
</body>
</html>