<x-guest-layout>
@section('full-title', 'Registration')

@push('head')
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <style>
        *{
            box-sizing: border-box;
        }

        html, body{
            margin: 0;
            padding: 0;
        }
        body {
            height: 100dvh;
            width: auto;
            display: flex;
            flex-direction: column;
            justify-content: center;
            box-sizing: border-box;
            background-image: url("../img/ehb_logos/EhB-logo-transparant.png");
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain;
            background-attachment: fixed;
        }
    </style>
@endpush

@section('body-id', 'body-sign')
@section('div-id', 'main-sign')
    <h2 id="main-text">Sign Up Now</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- First Name -->
        <div class="mt-4">
            <x-input-label for="firstname" :value="__('First Name')" />
            <x-text-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" required autofocus autocomplete="firstname" />
            <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
        </div>

        <!-- Last Name -->
        <div class="mt-4">
            <x-input-label for="lastname" :value="__('Last Name')" />
            <x-text-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required autofocus autocomplete="lastname" />
            <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
        </div>

        <!-- User Name -->
        <div class="mt-4">
            <x-input-label for="username" :value="__('Username')" />
            <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-center mt-4">
            <a class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
            
            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>