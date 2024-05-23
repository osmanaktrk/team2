<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>{{ __('Login') }}</title>
</head>
<body>
    <div class="main-cart">
        <div id="login">
            <img src="{{ asset('images/ehb_logos/horizontaal_EhB-logo_(transparante_achtergrond).png') }}" alt="ehb-logo">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <!-- Username -->
                <x-text-input id="email"
                                type="email"
                                name="email"
                                :value="old('email')"
                                placeholder="Email"
                                required autofocus autocomplete="email" />

                <x-input-error :messages="$errors->get('email')" class="alert-danger" />
                <br>

                <!-- Password -->
                <x-text-input id="password"
                                type="password"
                                name="password"
                                placeholder="Password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="alert-danger" />
                <br>
                <br>
                
                <!-- Remember Me
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                        <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                    </label>
                </div>
                -->
                <x-primary-button id="login-btn">
                    {{ __('Log in') }}
                </x-primary-button>
                <x-primary-button id="signup-btn">
                    {{ __('Sign up') }}
                </x-primary-button>
                <br>
                @if (Route::has('password.request'))
                <x-primary-button id="forget-btn">
                    {{ __('Forgot your password?') }}
                </x-primary-button>
                @endif
            </form>
        </div>
        <div id="info"></div>
    </div>
    
    <script>
        document.getElementById('forget-btn').addEventListener('click', function() {
            // Prevent the default action of the click event
            event.preventDefault();

            // Redirect to the password reset page
            window.location.href = "{{ route('password.request') }}";
        });

        document.getElementById('signup-btn').addEventListener('click', function() {
            // Prevent the default action of the click event
            event.preventDefault();

            // Redirect to the register page
            window.location.href = "{{ route('register') }}";
        });
    </script>
</body>
</html>