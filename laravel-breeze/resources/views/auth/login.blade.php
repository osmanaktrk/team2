<x-guest-layout>
@section('full-title', 'Login')

@push('head')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <style>
        *{
            box-sizing: border-box;
        }

        html, body{
            margin: 0;
            padding: 0;
        }

        body{
            height: 100dvh;
            width: 100dvw;
            background-color: rgb(228,228,228);
        }
    </style>
@endpush

@section('body-id', 'body-sign')
@section('div-id', 'main-cart')
@section('newdiv-id', 'login')
    <img src="{{ asset('img/ehb_logos/horizontaal_EhB-logo_(transparante_achtergrond).png') }}" alt="ehb-logo">
    <!-- Session Status -->
    <x-auth-session-status class="" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-center mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>
    <br>
    <div class="flex items-center justify-center">
        <x-primary-button class="ms-3 flex items-center gap-4">
            {{ __('Log in') }}
        </x-primary-button>
        <div style="width: 16px;"></div>
        <a class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150" href="{{ route('register') }}">
            {{ __('REGISTER') }}
        </a>
    </div>
    </form>     
</x-guest-layout>