<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <title>{{ __('Registration') }}</title>
</head>
<body>
    <div id="main-sign">
        <img src="{{ asset('images/ehb_logos/horizontaal_EhB-logo_(transparante_achtergrond).png') }}" alt="ehb-logo">
        <h2>Sign Up Now</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <!-- Name -->
            <x-text-input id="firstname" type="text" name="firstname" :value="old('firstname')" placeholder="{{ __('First Name') }}" required autofocus autocomplete="firstname" />
            <x-input-error :messages="$errors->get('name')" class="alert-danger" />
            <x-text-input id="lastname" type="text" name="lastname" :value="old('lastname')" placeholder="{{ __('Last Name') }}" required autofocus autocomplete="lastname" />
            <x-input-error :messages="$errors->get('name')" class="alert-danger" />
            <br>

            <!-- Email Address -->
            <x-text-input id="e-mail" type="email" name="email" placeholder="E-mail Address" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="alert-danger" />
            <br>

            <!-- Password -->
            <x-text-input id="password"
                                type="password"
                                name="password"
                                placeholder="{{ __('Enter Password') }}"
                                required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="alert-danger" />
            <br>

            <!-- Confirm Password -->
            <x-text-input id="password-check"
                                type="password"
                                name="password_confirmation"
                                placeholder="{{ __('Repeat Password') }}" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="alert-danger" />
            <br>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
            </div>
            <br>

            <x-primary-button type="submit" class="ms-4">
                {{ __('SIGN UP') }}
            </x-primary-button>
        </form>
    </div>
    
</body>
</html>