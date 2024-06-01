<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <title>{{ config('app.name', 'EraStudent') }}</title>
    </head>
    <body class="bg-light">
    @php
        use App\Models\Course;
    
        $courses = Course::all();
    @endphp
        <nav
            id="main-nav"
            class="navbar navbar-expand-md navbar-light fixed-top bg-light">
            <div class="container">
                <a href="https://www.erasmushogeschool.be/nl" class="navbar-brand">
                    <img class="text-danger" src="{{ asset('images/ehb_logos/horizontaal_EhB-logo_(transparante_achtergrond).png') }}" id="logo" alt="Logo" style="height: 50px;">
                </a>
                <!-- Logo will be added later -->
                <div class="ml-auto">
                    <div class="dropdown">
                        <button
                            class="btn btn-link text-decoration-none"
                            type="button"
                            id="dropdownMenuButton"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fas fa-user-circle fa-lg"></i>
                        </button>
                        <div
                            class="dropdown-menu dropdown-menu-right"
                            aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                            <a class="dropdown-item" href="{{ route('FAQ') }}">{{ __('FAQ') }}</a>
                            <a class="dropdown-item" href="#">{{ __('Logout') }}</a>
                            <!-- Logout function is needed -->
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <section class="profile-section mt-5">
            <div class="container">
                <div class="row justify-content-center">
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
                                    <div class="form-group" id="specializationGroup" style="display: none;">
                                        <label for="specialization" class="font-weight-light">{{ __('Specialization') }}</label>
                                        <select class="form-control font-weight-lighter" id="specialization"></select>
                                    </div>
                                    <div class="form-group" id="yearGroup" style="display: none;">
                                        <label for="year" class="font-weight-light">{{ __('Year') }}</label>
                                        <select class="form-control font-weight-lighter" id="yearGroup">
                                            <option value="2016">{{ __('2016-17') }}</option>
                                            <option value="2017">{{ __('2017-18') }}</option>
                                            <option value="2018">{{ __('2018-19') }}</option>
                                            <option value="2019">{{ __('2019-20') }}</option>
                                            <option value="2020">{{ __('2020-21') }}</option>
                                            <option value="2021">{{ __('2021-22') }}</option>
                                            <option value="2022">{{ __('2022-23') }}</option>
                                            <option value="2023">{{ __('2023-24') }}</option>
                                            <option value="2024">{{ __('2024-25') }}</option>
                                            <option value="2025">{{ __('2025-26') }}</option>
                                            <option value="2026">{{ __('2026-27') }}</option>
                                            <option value="2027">{{ __('2027-28') }}</option>
                                        </select>
                                    <!-- </div>
                                    <div id="education-container">

                                        <div id="edu-label">
                                            <label class="label-left" for="edu-type">{{ __('Education: ') }}</label>
                                        </div>
                            
                                        <div class="educations">
                                            <select class="select-edu" name="edu-type" id="edu-type">
                                            <option value="Select">{{ __('Select') }}</option>
                                            <option value="Graduaat">{{ __('Graduaat') }}</option>
                                            <option value="Bachelor">{{ __('Bachelor') }}</option>
                                            <option value="Lerarenopleiding">{{ __('Lerarenopleiding') }}</option>
                                            <option value="Kunstopleiding">{{ __('Kunstopleiding') }}</option>
                                            <option value="Postgraduaat">{{ __('Postgraduaat') }}</option>
                                            <option value="Bachelor-na-bachelor">{{ __('Bachelor-na-bachelor') }}</option>
                                            </select>
                                            <br>
                                            <select class="select-edu edu" name="Graduaat" id="Graduaat" style="display: none;">
                                            @foreach($courses as $course)
                                                @if ($course->type == ["Graduaat"] || $course->type == ['Graduaat', 'Lerarenopleiding'])
                                                <option value="{{ $course->title }}">{{ $course->title }}</option>
                                                @endif
                                            @endforeach     
                                            
                                            </select>
                            
                                            <select class="select-edu edu" name="Bachelor" id="Bachelor" style="display: none;">
                                            @foreach($courses as $course)
                                                @if ($course->type == ["Bachelor"] || $course->type == ['Bachelor', 'Lerarenopleiding'])
                                                <option value="{{ $course->title }}">{{ $course->title }}</option>
                                                @endif
                                            @endforeach
                            
                                            </select>
                            
                                            <select class="select-edu edu" name="Lerarenopleiding" id="Lerarenopleiding" style="display: none;">
                                            @foreach($courses as $course)
                                                @if ($course->type == ['Graduaat', 'Lerarenopleiding'] || $course->type == ['Bachelor', 'Lerarenopleiding'])
                                                <option value="{{ $course->title }}">{{ $course->title }}</option>
                                                @endif
                                            @endforeach
                            
                                            </select>
                            
                                            <select class="select-edu edu" name="Kunstopleiding" id="Kunstopleiding" style="display: none;">
                                            @foreach($courses as $course)
                                                @if ($course->type == ["Kunstopleiding"])
                                                <option value="{{ $course->title }}">{{ $course->title }}</option>
                                                @endif
                                            @endforeach
                            
                                            </select>
                            
                                            <select class="select-edu edu" name="Postgraduaat" id="Postgraduaat" style="display: none;">
                                            @foreach($courses as $course)
                                                @if ($course->type == ["Postgraduaat"])
                                                <option value="{{ $course->title }}">{{ $course->title }}</option>
                                                @endif
                                            @endforeach
                            
                                            </select>
                            
                                            <select class="select-edu edu" name="Bachelor-na-bachelor" id="Bachelor-na-bachelor" style="display: none;">
                                            @foreach($courses as $course)
                                                @if ($course->type == ["Bachelor-na-bachelor"])
                                                <option value="{{ $course->title }}">{{ $course->title }}</option>
                                                @endif
                                            @endforeach
                            
                                            </select>
                                            <br>
                                            <input type="number" name="year" class="edu" id="year" placeholder="Year" style="display: none;">
                            
                                        </div>
                                            
                                    </div> -->
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
    </body>
</html>