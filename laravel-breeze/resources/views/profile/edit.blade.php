<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/profile-edit.css') }}">
</head>
<body>
@php
    use App\Models\Course;

    $courses = Course::all();
@endphp


    <div id="profil-foto">
        <div id="foto-div">
            <img id="profile-img" src="{{ asset('images/user-125.svg') }}" alt="profile foto" />
            <label id="foto-upload-label" for="foto-upload">&plus;</label>
        </div>
        <br />
        <input type="file" name="foto-upload" id="foto-upload" >
        <button id="btn-img-upload" type="submit">{{ __('Upload') }}</button>
    </div>
    <div id="profile-settings">
        <h2>{{ __('Profile Settings') }}</h2>
        <form action="/addCourse" method="POST">

        <div class="firstname">
            <label class="label-left" for="firstname">{{ __('First Name: ') }}</label>
            <input class="label-right" type="text" name="firstname" id="firstname" placeholder="{{ __('First name') }}" required/>
        </div>

        <div class="lastname">
            <label class="label-left" for="lastname">{{ __('Last Name: ') }}</label>
            <input class="label-right" type="text" name="lastname" id="lastname" placeholder="{{ __('Last Name') }}" required/>
        </div>

        <div class="username">
            <label class="label-left" for="username">{{ __('User Name: ') }}</label>
            <input class="label-right" type="text" name="username" id="username" placeholder="{{ __('User Name') }}" required/>
        </div>

        <div class="e-mail">
            <label class="label-left" for="e-mail">{{ __('E-mail: ') }}</label>
            <input class="label-right" type="text" name="e-mail" id="e-mail" placeholder="{{ __('E-mail') }}" readonly/>
        </div>

        <div class="mobilenumber">
            <label class="label-left" for="mobilenumber">{{ __('Mobile Number: ') }}</label>
            <input class="label-right" type="tel" name="mobilenumber" id="mobilenumber" placeholder="{{ __('0412345678') }}"/>
        </div>

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
                
        </div>

        <br>
        <br>
        <div id="submit">
            <button id="btn-submit" type="submit">{{ __('Submit') }}</button>
        </div>
        </form>
    </div>
    <script src="{{ asset('js/components/profile-edit.js') }}"></script>
</body>
</html>