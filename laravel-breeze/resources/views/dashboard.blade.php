@extends('layouts.app')

@section('title', 'Dashboard')

@push('head')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    <script
        src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        defer="defer"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        defer="defer"></script>
@endpush

@section('body-class', 'bg-light text-dark')

@section('content')
<section class="dashboard-section py-5 mt-5">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4 text-center mb-4">
                <div class="profile-photo mt-5">
                    <span class="text-dark">{{ __('Profile photo') }}</span>
                </div>
                <div class="mt-5">
                    <p class="font-weight-light">{{ __('Display name') }}</p>
                    <hr>
                    <p class="font-weight-light">{{ __('Field of study') }}</p>
                    <hr>
                    <a href="{{ route('profile.edit') }}">
                        <button class="btn btn-danger customize-button">{{ __('Customize') }}</button>
                    </a>
                </div>
            </div>
            <div class="col-lg-8 pl-5 mt-5">
                <div class="text-center">
                    <h5 class="font-weight-lighter text-info mb-3" style="font-size: 30px;">{{ __('Recent activities') }}</h5>
                    <div class="block" style="background-color: #d9534f;"></div>
                </div>
                <div class="activity-links mt-5">
                    <a href="#" class="bg-white text-primary border text-decoration-none">{{ __('a link') }}</a>
                    <a href="#" class="bg-white text-primary border text-decoration-none">{{ __('a link') }}</a>
                    <a href="#" class="bg-white text-primary border text-decoration-none">{{ __('a link') }}</a>
                    <a href="#" class="bg-white text-primary border text-decoration-none">{{ __('a link') }}</a>
                    <a href="#" class="bg-white text-primary border text-decoration-none">{{ __('a link') }}</a>
                    <a href="#" class="bg-white text-primary border text-decoration-none">{{ __('a link') }}</a>
                    <a href="#" class="bg-white text-primary border text-decoration-none">{{ __('a link') }}</a>
                </div>
            </div>
        </div>
        <div class="row text-center mt-4">
            <div class="col-md-3 col-6 action-buttons">
                <button class="btn btn-info">{{ __('Recent posts') }}</button>
            </div>
            <div class="col-md-3 col-6 action-buttons">
                <button class="btn btn-info">{{ __('Another button') }}</button>
            </div>
            <div class="col-md-3 col-6 action-buttons">
                <button class="btn btn-info">{{ __('Another button') }}</button>
            </div>
            <div class="col-md-3 col-6 action-buttons">
                <button class="btn btn-info">{{ __('Main page') }}</button>
            </div>
            <!-- These button should be functional + renamed -->
        </div>
    </div>
</section>
@endsection