<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/profile-edit.css') }} ">

    <title>Profile</title>
</head>

<body>

    <x-app-layout>
        <x-slot name="header">
            @if (session('status'))
                <h2 x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 5000)"
                    class="text-xl text-green-600">{{ session('status') }}</h2>
            @endif
        </x-slot>





        <div class="py-12">
            <div class="main-container">

                <div class="photo box p-4 sm:p-8  shadow sm:rounded-lg">

                    @include('profile.partials.update-profile-img-form')

                </div>

                <div class="password box p-4 sm:p-8  shadow sm:rounded-lg">
                    @include('profile.partials.update-password-form')


                </div>
                <div class="info box p-4 sm:p-8  shadow sm:rounded-lg">

                    @include('profile.partials.update-profile-information-form')

                </div>


                <div class="delete box p-4 sm:p-8  shadow sm:rounded-lg">


                    @include('profile.partials.update-education-form')
                    @include('profile.partials.delete-user-form')

                </div>

            </div>
        </div>
    </x-app-layout>



    <script src="{{ asset('js/profile-edit.js') }}"></script>
</body>

</html>
