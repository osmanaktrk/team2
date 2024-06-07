@extends('layouts.app')

@section('title', 'FAQ')

@push('head')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" defer="defer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" defer="defer"></script>
@endpush

@section('content')
<nav id="main-nav" class="navbar navbar-expand-md navbar-light fixed-top bg-light">
    <div class="container">
        <a href="{{ route('welcome') }}" class="navbar-brand">
            <img class="text-danger" src="{{ asset('img/ehb_logos/horizontaal_EhB-logo_(transparante_achtergrond).png') }}" id="logo" alt="Logo" style="height: 50px;">
        </a>
        <div class="ml-auto">
            <div class="dropdown">
                @if (Route::has('login'))
                <button class="btn btn-link text-decoration-none" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @auth
                    <i class="fas fa-user-circle fa-lg"></i>
                </button>
                <!-- Logo will be added later -->
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                    <a class="dropdown-item" href="{{ route('profile.edit') }}">{{ __('Profile') }}</a>
                    <a class="dropdown-item" href="#">{{ __('Logout') }}</a>
                    <!-- Logout function is needed -->
                </div>
                @else
                <button class="btn btn-link text-decoration-none" type="button" aria-haspopup="true" aria-expanded="false">
                    <a class="dropdown-item" href="{{ route('contact') }}">{{ __('Contact') }}</a>
                </button>
                    @endauth
                @endif
            </div>
        </div>
    </div>
</nav>

<section class="faq-section mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-4">
                    <h2 class="font-weight-lighter text-danger mb-3">{{ __('Frequently Asked Questions') }}</h2>
                    <div class="block" style="background-color: #1ABCB6;"></div>
                    <p class="text-muted font-weight-light">{{ __('Got questions? We have answers! Check out our FAQ section below.') }}</p>
                    <!-- Need to change the questions and their answers - down below -->
                </div>
                <div class="accordion" id="faqAccordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link font-weight-light" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="color: #1ABCB6;">{{ __('
                                    Question 1: What is EraStudent?') }}
                                </button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse show font-weight-light" aria-labelledby="headingOne" data-parent="#faqAccordion">
                            <div class="card-body">{{ __('
                                Answer: Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam reiciendis ipsam laudantium doloribus reprehenderit, molestiae earum minima aut, iste, voluptas tempora ratione magni incidunt harum rem dolores similique itaque nulla!') }}
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link font-weight-light" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="color: #1ABCB6;">{{ __('
                                    Question 2: What is EraStudent?') }}
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse font-weight-light" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                            <div class="card-body">{{ __('
                                Answer: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam reiciendis ipsam laudantium doloribus reprehenderit, molestiae earum minima aut, iste, voluptas tempora ratione magni incidunt harum rem dolores similique itaque nulla!') }}
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link font-weight-light" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="color: #1ABCB6;">{{ __('
                                    Question 3: What is EraStudent?') }}
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse font-weight-light" aria-labelledby="headingThree" data-parent="#faqAccordion">
                            <div class="card-body">{{ __('
                                Answer: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam reiciendis ipsam laudantium doloribus reprehenderit, molestiae earum minima aut, iste, voluptas tempora ratione magni incidunt harum rem dolores similique itaque nulla!') }}
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                                <button class="btn btn-link font-weight-light" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="color: #1ABCB6;">{{ __('
                                    Question 4: What is EraStudent?') }}
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse font-weight-light" aria-labelledby="headingFour" data-parent="#faqAccordion">
                            <div class="card-body">{{ __('
                                Answer: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam reiciendis ipsam laudantium doloribus reprehenderit, molestiae earum minima aut, iste, voluptas tempora ratione magni incidunt harum rem dolores similique itaque nulla!') }}
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h5 class="mb-0">
                                <button class="btn btn-link font-weight-light" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" style="color: #1ABCB6;">{{ __('
                                    Question 5: What is EraStudent?') }}
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse font-weight-light" aria-labelledby="headingFive" data-parent="#faqAccordion">
                            <div class="card-body">{{ __('
                                Answer: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam reiciendis ipsam laudantium doloribus reprehenderit, molestiae earum minima aut, iste, voluptas tempora ratione magni incidunt harum rem dolores similique itaque nulla!') }}
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingSix">
                            <h5 class="mb-0">
                                <button class="btn btn-link font-weight-light" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix" style="color: #1ABCB6;">{{ __('
                                    Question 6: What is EraStudent?') }}
                                </button>
                            </h5>
                        </div>
                        <div id="collapseSix" class="collapse font-weight-light" aria-labelledby="headingSix" data-parent="#faqAccordion">
                            <div class="card-body">{{ __('
                                Answer: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam reiciendis ipsam laudantium doloribus reprehenderit, molestiae earum minima aut, iste, voluptas tempora ratione magni incidunt harum rem dolores similique itaque nulla!') }}
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingSeven">
                            <h5 class="mb-0">
                                <button class="btn btn-link font-weight-light" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven" style="color: #1ABCB6;">{{ __('
                                    Question 7: What is EraStudent?') }}
                                </button>
                            </h5>
                        </div>
                        <div id="collapseSeven" class="collapse font-weight-light" aria-labelledby="headingSeven" data-parent="#faqAccordion">
                            <div class="card-body">{{ __('
                                Answer: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam reiciendis ipsam laudantium doloribus reprehenderit, molestiae earum minima aut, iste, voluptas tempora ratione magni incidunt harum rem dolores similique itaque nulla!') }}
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingEight">
                            <h5 class="mb-0">
                                <button class="btn btn-link font-weight-light" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight" style="color: #1ABCB6;">{{ __('
                                    Question 8: What is EraStudent?') }}
                                </button>
                            </h5>
                        </div>
                        <div id="collapseEight" class="collapse font-weight-light" aria-labelledby="headingEight" data-parent="#faqAccordion">
                            <div class="card-body">{{ __('
                                Answer: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam reiciendis ipsam laudantium doloribus reprehenderit, molestiae earum minima aut, iste, voluptas tempora ratione magni incidunt harum rem dolores similique itaque nulla!') }}
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingNine">
                            <h5 class="mb-0">
                                <button class="btn btn-link font-weight-light" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine" style="color: #1ABCB6;">{{ __('
                                    Question 9: What is EraStudent?') }}
                                </button>
                            </h5>
                        </div>
                        <div id="collapseNine" class="collapse font-weight-light" aria-labelledby="headingNine" data-parent="#faqAccordion">
                            <div class="card-body">{{ __('
                                Answer: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam reiciendis ipsam laudantium doloribus reprehenderit, molestiae earum minima aut, iste, voluptas tempora ratione magni incidunt harum rem dolores similique itaque nulla!') }}
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTen">
                            <h5 class="mb-0">
                                <button class="btn btn-link font-weight-light" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen" style="color: #1ABCB6;">{{ __('
                                    Question 10: What is EraStudent?') }}
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTen" class="collapse font-weight-light" aria-labelledby="headingTen" data-parent="#faqAccordion">
                            <div class="card-body">{{ __('
                                Answer: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam reiciendis ipsam laudantium doloribus reprehenderit, molestiae earum minima aut, iste, voluptas tempora ratione magni incidunt harum rem dolores similique itaque nulla!') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="font-weight-lighter text-danger">{{ __('Contact Us') }}</h2>
                <div class="block" style="background-color: #1ABCB6;"></div>
                <p class="text-muted font-weight-light">{{ __('Have more questions or need assistance? Feel free to reach out to us.') }}</p>
                <a href="{{ route('contact') }}" class="btn btn-primary">{{ __('Contact Us') }}</a>
            </div>
        </div>
    </div>
</section>
@endsection