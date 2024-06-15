@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="{{asset('css/contact.css')}}">
@endsection

@section('title')
    <title>CONTACT</title>
@endsection

@section('content')
    
<div class="bg-light">
    <section class="contact-section py-5 mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="font-weight-lighter text-danger mb-3">{{ __('Contact With Admin') }}</h2>
                    <div class="block" style="background-color: #1ABCB6;"></div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <form id="contactForm">
                        <div class="form-group">
                            <label for="name" class="font-weight-light">{{ __('Name') }}</label>
                            <input type="text" class="form-control font-weight-lighter" id="name" placeholder="{{ __('Enter your name') }}">
                        </div>
                        <div class="form-group">
                            <label for="email" class="font-weight-light">{{ __('Email') }}</label>
                            <input type="email" class="form-control font-weight-lighter" id="email" placeholder="{{ __('Enter your email') }}">
                        </div>
                        {{-- <div class="form-group">
                            <label for="subject" class="font-weight-light">{{ __('Subject') }}</label>
                            <input type="text" class="form-control font-weight-lighter" id="subject" placeholder="{{ __('Enter the subject') }}">
                        </div> --}}
                        <div class="form-group">
                            <label for="message" class="font-weight-light">{{ __('Message') }}</label>
                            <textarea class="form-control font-weight-lighter" id="message" rows="10" placeholder="{{ __('Enter your message') }}"></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary mt-3">{{ __('Send Message') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection

@section('js')
    <script src=""></script>
@endsection