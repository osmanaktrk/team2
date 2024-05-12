<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <title>{{ __('EhB-Students') }}</title>
</head>
<body>
    <header class="header">
        <img src="{{ asset('images/ehb_logos/EhB-logo-transparant.png') }}" alt="ehb-logo" class="logo" width="150" height="90">


    @if (Route::has('login'))
    <nav class="-mx-3 flex flex-1 justify-end">
        @auth
            <a
                href="{{ url('/dashboard') }}"
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
            >
                Dashboard
            </a>
            @else
                <a
                    href="{{ route('login') }}"
                    class="button"
                >
                    {{ __('Inloggen') }}
                </a>

                @if (Route::has('register'))
                    <a
                        href="{{ route('register') }}"
                        class="button"
                    >
                        {{ __('Aanmelden') }}
                </a>
                @endif
        @endauth
    </nav>
    @endif

    <input type="text" placeholder="{{ __('Search...') }}" class="search-bar" >
    </header>

    <div class="sidenav">
        <a href="">{{ __('Home') }}</a>
        <a href="">{{ __('Contact') }}</a>
        <a href="">{{ __('About') }}</a>
        
      </div>


    <div class="forum">
        <div class="thread">
            <div class="thread-title">{{ __('Discussiethread 1') }}</div>
            <div class="thread-content">Inhoud van de discussie...</div>
        </div>
        <div class="thread">
            <div class="thread-title">{{ __('Discussiethread 2') }}</div>
            <div class="thread-content">Inhoud van de discussie...</div>
        </div>


    
    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
            &copy {{ config('app.name', 'EhB-Studenten') }}
        </footer>

</body>
</html>