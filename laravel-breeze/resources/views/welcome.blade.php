<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" defer="defer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" defer="defer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    <title>{{ __('EraStudent') }}</title>
</head>
<body>
    <nav id="main-nav" class="navbar navbar-expand-md navbar-light fixed-top" style="background-color: #e8e8e8; height: 80px;">
        <div class="container">
            <a href="https://www.erasmushogeschool.be/nl" class="navbar-brand fa-3x">
                <img src="{{ asset('images/ehb_logos/EhB-logo-transparant.png') }}" id="logo" class="mb-3">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                    @if (Route::has('login'))
                    @auth
                    @else
                        <a href="#" class="nav-link text-danger">{{ __('Sign In') }}</a>
                    @endauth
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link text-info">{{ __('Contact') }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="home">
        <div class="container">
            <div class="row">
                <div class="col custom-col">
                    <h2 class="lead font-weight-light text-danger" style="font-size: 22px;">{{ __('EraStudent') }}</h2>
                    <h3 class="display-4 font-weight-lighter" style="color: #1ABCB6;">{{ __('Discover Connect Grow') }}</h3>
                    <p class="lead font-weight-light text-dark" style="margin-top: 15px;">{{ __('Your community for academic progress.') }}</p>
                    <div class="d-flex">
                        <a href="#about" class="btn btn-outline-danger" style="margin-right: 10px; margin-top: 10px;">{{ __('More info') }}</a>
                        @if (Route::has('register'))
                        <a href="#join-now" class="btn btn-outline-danger" style="margin-left: 10px; margin-top: 10px;">{{ __('Join now!') }}</a>
                        @endif
                    @endauth
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="pt-5" style="background-color: #f3f2f2;">
        <div class="container">
            <div class="text-center">
                <h2 class="display-4 font-weight-lighter mt-5">{{ __('Why?') }}</h2>
                <div class="block" style="background-color: #1ABCB6;"></div>
            </div>
            <div class="row align-items-center mt-5">
                <div class="col-lg-6">
                    <img src="{{ asset('images/home/Girl.png') }}"  class="pb-5" style="height: 700px; margin-left: 40px;" alt="Girl Image">
                </div>
                <div class="col-lg-6">
                    <h2 class="font-weight-lighter" style="color: #1ABCB6;">{{ __('The key to your academic success') }}</h2>
                    <p class="lead mt-4">
                        {{ __('Discover a vibrant community of like minded students, share knowledge and
                        experiences, and support each other on your journey to success.') }}
                        <br><br>
                        {{ __('Whether you\'re new to campus or a seasoned student, EraStudent provides the
                        tools you need to thrive. Find study partners, make friends, and let your
                        academic journey begin with EraStudent.') }}
                    </p>
                    <a href="#Read-more" class="btn btn-outline-danger mt-3">{{ __('Read more') }}</a>
                </div>
            </div>
        </div>
    </section>

    <section id="Read-more" class="bg-light">
        <div class="container">
            <div class="text-center pb-5">
                <h2 class="display-4 font-weight-lighter">{{ __('Goals?') }}</h2>
                <div class="block" style="background-color: #1ABCB6;"></div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4 mb-4">
                    <div class="box">
                        <i class="fas fa-users fa-2x text-danger mb-3"></i>
                        <h3 class="font-weight-lighter" style="color: #1ABCB6;">{{ __('Social Connection') }}</h3>
                        <p class="lead">{{ __('Connect with peers, share experiences, and build meaningful relationships.') }}</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="box">
                        <i class="fas fa-book fa-2x text-danger mb-3"></i>
                        <h3 class="font-weight-lighter" style="color: #1ABCB6;">{{ __('Academic Support') }}</h3>
                        <p class="lead">{{ __('Access study resources, share insights, and excel academically together.') }}</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="box">
                        <i class="fas fa-desktop fa-2x text-danger mb-3"></i>
                        <h3 class="font-weight-lighter" style="color: #1ABCB6;">{{ __('User Friendly Platform ') }}</h3>
                        <p class="lead">{{ __('Navigate effortlessly, engage seamlessly, and enjoy a user-friendly experience.') }}</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="box">
                        <i class="fas fa-graduation-cap fa-2x text-danger mb-3"></i>
                        <h3 class="font-weight-lighter" style="color: #1ABCB6;">{{ __('Subject Specific Assistance') }}</h3>
                        <p class="lead">{{ __('Get subject-specific help, collaborate with peers, and excel in your studies.') }}</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="box">
                        <i class="fas fa-comments fa-2x text-danger mb-3"></i>
                        <h3 class="font-weight-lighter" style="color: #1ABCB6;">{{ __('Feedback & Continuous Improvement') }}</h3>
                        <p class="lead">{{ __('Share your feedback, shape the platform, and help us improve together.') }}</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="box">
                        <i class="fas fa-handshake fa-2x text-danger mb-3"></i>
                        <h3 class="font-weight-lighter" style="color: #1ABCB6;">{{ __('Transparency & Collaboration') }}</h3>
                        <p class="lead">{{ __('Join the collaboration, contribute to transparency, and shape the future together.') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    

    <section id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="display-4 font-weight-lighter">{{ __('Contact Us') }}</h2>
                <div class="block mb-5" style="background-color: #1ABCB6;"></div>
            </div>
            <div class="row justify-content-center pt-5">
                <div class="col-md-12 mx-auto">
                    <div class="viewer-inputs">
                        <h3 class="font-weight-lighter pb-3" style="font-size: 35px; color: #1ABCB6;">{{ __('Get in Touch') }}</h3>
                        <form action="#" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="{{ __('Your Name') }}" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="{{ __('Your Email') }}" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" placeholder="{{ __('Your Message') }}" required></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-outline-danger">{{ __('Submit') }}</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
        &copy {{ config('app.name', 'EhB-Studenten') }}
    </footer>
    
</body>
</html>
