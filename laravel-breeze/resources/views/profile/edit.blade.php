@extends('layouts.app')

@section('title', 'Profile')

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

@section('body-class', 'bg-light')

@section('content')
<section class="profile-section mt-5">
    <div class="container">
        <div class="row justify-content-center">
        @include('profile.partials.update-profile-img-form')
            <div class="col-lg-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-white text-center">
                        <img
                            src="https://via.placeholder.com/150"
                            alt="Profile Picture"
                            class="rounded-circle mb-3">
                        <h2 class="font-weight-light">{{ __('Unknown') }}</h2>
                        <p class="text-muted">{{ __('Unknown@example.com') }}</p>
                        <a href="#" class="btn btn-outline-primary btn-sm">{{ __('Edit Profile') }}</a>
                        <!-- Profile select function is needed -->
                    </div>

                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="profileName" class="font-weight-light">{{ __('Name') }}</label>
                                <input
                                    type="text"
                                    class="form-control font-weight-lighter"
                                    id="profileName"
                                    placeholder="{{ __('Enter your name') }}"
                                    value="">
                            </div>
                            <div class="form-group">
                                <label for="profileEmail" class="font-weight-light">{{ __('Email') }}</label>
                                <input
                                    type="email"
                                    class="form-control font-weight-lighter"
                                    id="profileEmail"
                                    placeholder="{{ __('Enter your email') }}"
                                    value="">
                            </div>
                            <div class="form-group">
                                <label for="profilePassword" class="font-weight-light">{{ __('Password') }}</label>
                                <input
                                    type="password"
                                    class="form-control font-weight-lighter"
                                    id="profilePassword"
                                    placeholder="{{ __('Enter new password') }}"
                                    value="">
                            </div>
                            <div class="form-group">
                                <label for="educationLevel" class="font-weight-light">{{ __('Education Level') }}</label>
                                <select class="form-control font-weight-lighter" id="educationLevel">
                                    <option>{{ __('Select Education Level') }}</option>
                                    <option value="Graduaat">{{ __('Graduaat') }}</option>
                                    <option value="Bachelor">{{ __('Bachelor') }}</option>
                                    <option value="Lerarenopleiding">{{ __('Lerarenopleiding') }}</option>
                                    <option value="Kunstopleiding">{{ __('Kunstopleiding') }}</option>
                                    <option value="Postgraduaat">{{ __('Postgraduaat') }}</option>
                                    <option value="Bachelor-na-bachelor">{{ __('Bachelor-na-bachelor') }}</option>
                                </select>
                            </div>
                            <div class="form-group specializationGroup" id="Graduaat" style="display: none;">
                            <label for="specializationGraduaat" class="font-weight-light">{{ __('Specialization') }}</label>
                                <select class="form-control font-weight-lighter" id="specializationGraduaat">
                                    @foreach($courses as $course)
                                        @if ($course->type == ["Graduaat"] || $course->type == ['Graduaat', 'Lerarenopleiding'])
                                        <option value="{{ $course->title }}">{{ $course->title }}</option>
                                        @endif
                                    @endforeach     
                                </select>
                            </div>
                            <div class="form-group specializationGroup" id="Bachelor" style="display: none;">
                            <label for="specializationBachelor" class="font-weight-light">{{ __('Specialization') }}</label>
                                <select class="form-control font-weight-lighter" id="specializationBachelor">
                                    @foreach($courses as $course)
                                        @if ($course->type == ["Bachelor"] || $course->type == ['Bachelor', 'Lerarenopleiding'])
                                        <option value="{{ $course->title }}">{{ $course->title }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group specializationGroup" id="Lerarenopleiding" style="display: none;">
                            <label for="specializationLerarenopleiding" class="font-weight-light">{{ __('Specialization') }}</label>
                                <select class="form-control font-weight-lighter" id="specializationLerarenopleiding">
                                    @foreach($courses as $course)
                                        @if ($course->type == ['Graduaat', 'Lerarenopleiding'] || $course->type == ['Bachelor', 'Lerarenopleiding'])
                                        <option value="{{ $course->title }}">{{ $course->title }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group specializationGroup" id="Kunstopleiding" style="display: none;">
                            <label for="specializationKunstopleiding" class="font-weight-light">{{ __('Specialization') }}</label>
                                <select class="form-control font-weight-lighter" id="specializationKunstopleiding">
                                    @foreach($courses as $course)
                                        @if ($course->type == ["Kunstopleiding"])
                                        <option value="{{ $course->title }}">{{ $course->title }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group specializationGroup" id="Postgraduaat" style="display: none;">
                            <label for="specializationPostgraduaat" class="font-weight-light">{{ __('Specialization') }}</label>
                                <select class="form-control font-weight-lighter" id="specializationPostgraduaat">
                                    @foreach($courses as $course)
                                        @if ($course->type == ["Postgraduaat"])
                                        <option value="{{ $course->title }}">{{ $course->title }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group specializationGroup" id="Bachelor-na-bachelor" style="display: none;">
                            <label for="specializationBnB" class="font-weight-light">{{ __('Specialization') }}</label>
                                <select class="form-control font-weight-lighter" id="specializationBnB">
                                    @foreach($courses as $course)
                                        @if ($course->type == ["Bachelor-na-bachelor"])
                                        <option value="{{ $course->title }}">{{ $course->title }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group" id="year" style="display: none;">
                                <label for="yearGroup" class="font-weight-light">{{ __('Year') }}</label>
                                <select class="form-control font-weight-lighter" id="yearGroup">
                                    <option value="2023">{{ __('2023-24') }}</option>
                                    <option value="2024">{{ __('2024-25') }}</option>
                                    <option value="2025">{{ __('2025-26') }}</option>
                                    <option value="2026">{{ __('2026-27') }}</option>
                                    <option value="2027">{{ __('2027-28') }}</option>
                                </select>
                            <div class="text-center pt-3 pb-2">
                                <button type="submit" class="btn btn-primary">{{ __('Save Changes') }}</button>
                                <!-- Success prompt is needed here -->
                            </div>
                        </form>
                    </div>
                    <div class="card-footer bg-white text-center">
                        <a href="#" class="btn btn-outline-danger btn-sm">{{ __('Logout') }}</a>
                        <!-- Logout function is needed -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="{{ asset('js/components/profile-edit.js') }}"></script>
@endsection