<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" defer="defer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" defer="defer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/layout-main.css') }}">
    <link rel="icon" href="{{ asset('img/icon.ico') }}" type="image/icon">
    @yield('css')
    @yield('title')
</head>

<body>
    <header>

        <div class="header">

            <div class="header-left">



                <div class="header-logo">
                    <a href="{{ route('welcome') }}">

                        <img class="erasmus-logo" src="{{ asset('img/main/download.png') }}" alt="ehb-logo">

                    </a>

                </div>

            </div>

            <div class="header-middle">

                <div class="middle-bar-container">
                    <div class="text-center">
                        <div class="middle-bar">

                            <ul class="middle-links">
                                <a class="middle-links-btn" href="{{ route('main') }}">
                                    <li>MAIN</li>
                                </a>

                                @if (Auth::user()->usertype == 'admin' || Auth::user()->usertype == 'writer')
                                    <a class="middle-links-btn" href="{{ route('post-create') }}">
                                        <li>NEW POST</li>
                                    </a>
                                @endif

                                <a class="middle-links-btn" href="{{ route('faq') }}">
                                    <li>FAQ</li>
                                </a>
                                <a class="middle-links-btn" href="{{ route('contact-admin') }}">
                                    <li>CONTACT ADMIN</li>
                                </a>
                                <a class="middle-links-btn" href="{{ route('profile-index') }}">
                                    <li>PROFILE</li>
                                </a>

                                @if (Auth::user()->usertype == 'admin')
                                    <a class="middle-links-btn" href="">
                                        <li>ADMIN DASHBOARD</li>
                                    </a>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>

            </div>


            <div class="header-right">

                <span>Welcome {{ Auth::user()->username }}</span>



                <div class="ml-auto">
                    <div class="dropdown">

                        <button class="btn btn-link text-decoration-none" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="header-profile-button">
                                @if (Auth::user()->avatar)
                                <img class="profilebutton-asset" src="{{ asset(Auth::user()->avatar) }}"
                                alt="profile-button">
                                @else
                                <img class="profilebutton-asset" src="{{ asset('img/users/default.svg') }}"
                                    alt="profile-button">
                                    
                                @endif

                                
                            </div>
                        </button>


                        <!-- Logo will be added later -->
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="">{{ __('Dashboard') }}</a>
                            <a class="dropdown-item" href="">{{ __('FAQ') }}</a>
                            <a class="dropdown-item" href="{{ route('profile-index') }}">{{ __('Profile') }}</a>
                            <a class="dropdown-item"
                                href="{{ route('contact-admin') }}">{{ __('Contact With Admin') }}</a>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <input class="dropdown-item" type="submit" value="Log Out"
                                    onclick="return confirm('ARE YOU SURE YOU WANT TO LOG OUT?')">
                            </form>

                            <!-- Logout function is needed -->
                        </div>




                    </div>
                </div>

            </div>

        </div>


        <div class="status">
            @if (session('warm'))
                <h4 class="warm">{{ session('warm') }}</h4>
            @endif

            @if (session('accept'))
                <h4 class="accept">{{ session('accept') }}</h4>
            @endif



        </div>

    </header>

    <main>





        @yield('content')

    </main>




    @yield('js')
</body>

</html>
