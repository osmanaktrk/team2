@extends('layouts.app')

@section('title', 'Contact')

@push('head')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" defer="defer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" defer="defer"></script>
@endpush

@section('content')

@section('body-class', 'bg-light')

@section('content')
<section class="contact-section py-5 mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="font-weight-lighter text-danger mb-3">{{ __('Contact Us') }}</h2>
                <div class="block" style="background-color: #1ABCB6;"></div>
                <p class="text-muted font-weight-light">{{ __('We\'d love to hear from you! Please fill out the form below and we will get in touch with you shortly.') }}</p>
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
                    <div class="form-group">
                        <label for="subject" class="font-weight-light">{{ __('Subject') }}</label>
                        <input type="text" class="form-control font-weight-lighter" id="subject" placeholder="{{ __('Enter the subject') }}">
                    </div>
                    <div class="form-group">
                        <label for="message" class="font-weight-light">{{ __('Message') }}</label>
                        <textarea class="form-control font-weight-lighter" id="message" rows="5" placeholder="{{ __('Enter your message') }}"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary mt-3">{{ __('Send Message') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
