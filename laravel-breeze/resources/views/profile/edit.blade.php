@yield('css')
<link rel="stylesheet" href="{{ asset('css/profile-edit.css') }}">

@php
    // use App\Models\Course;

    // $courses = Course::all();
@endphp

<x-app-layout>
    <x-slot name="header">
        <!-- Does this show up all the way at the bottom? -->
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

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
                <option value="{{ $course->id }}" {{ $user->course? ($user->course->id == $course->id? 'selected' : '') : '' }}>{{ $course->title }}</option>
                @endforeach
                <!-- <option value="Accounting Administration">Accounting Administration </option>
                <option value="Accounting Administration (E-learning)">Accounting Administration (E-learning) </option>
                <option value="Basisverpleegkunde">Basisverpleegkunde </option>
                <option value="Educatief Graduaat Secundair Onderwijs">Educatief Graduaat Secundair Onderwijs </option>
                <option value="Elektromechanische Systemen">Elektromechanische Systemen </option>
                <option value="Informatiebeheer">Informatiebeheer </option>
                <option value="Internet Of Things">Internet Of Things </option>
                <option value="Juridisch-Administratieve Ondersteuning (Werktraject)">Juridisch-Administratieve Ondersteuning (Werktraject) </option>
                <option value="Juridisch-Administratieve Ondersteuning">Juridisch-Administratieve Ondersteuning </option>
                <option value="Logies-, Restaurant- & Cateringmanagement">Logies-, Restaurant- & Cateringmanagement </option>
                <option value="Marketing- & Communicatiesupport">Marketing- & Communicatiesupport </option>
                <option value="Programmeren">Programmeren </option>
                <option value="Sociaal-Cultureel Werk">Sociaal-Cultureel Werk </option>
                <option value="Systeem- & Netwerkbeheer">Systeem- & Netwerkbeheer </option>
                <option value="Winkelmanagement">Winkelmanagement </option> -->              
                
                </select>

                <select class="select-edu edu" name="Bachelor" id="Bachelor" style="display: none;">
                @foreach($courses as $course)
                <option value="{{ $course->id }}" {{ $user->course? ($user->course->id == $course->id? 'selected' : '') : '' }}>{{ $course->title }}</option>
                @endforeach
                <!-- <option value="Biomedische Laboratoriumtechnologie">Biomedische Laboratoriumtechnologie </option>
                <option value="Communicatie">Communicatie </option>
                <option value="Hotelmanagement">Hotelmanagement </option>
                <option value="Idea And Innovation Management">Idea And Innovation Management </option>
                <option value="Journalistiek">Journalistiek </option>
                <option value="Kleuteronderwijs">Kleuteronderwijs </option>
                <option value="Lager Onderwijs">Lager Onderwijs </option>
                <option value="Landschaps- & Tuinarchitectuur">Landschaps- & Tuinarchitectuur </option>
                <option value="Multimedia & Creatieve Technologie">Multimedia & Creatieve Technologie </option>
                <option value="Organisatie & Management">Organisatie & Management </option>
                <option value="Pedagogie Van Het Jonge Kind">Pedagogie Van Het Jonge Kind </option>
                <option value="Secundair Onderwijs">Secundair Onderwijs </option>
                <option value="Sociaal Werk">Sociaal Werk </option>
                <option value="Toegepaste Informatica">Toegepaste Informatica </option>
                <option value="Toerisme- & Recreatiemanagement">Toerisme- & Recreatiemanagement </option>
                <option value="Verkorte Educatieve Bachelor Lager Onderwijs">Verkorte Educatieve Bachelor Lager Onderwijs </option>
                <option value="Verkorte Educatieve Bachelor Secundair Onderwijs">Verkorte Educatieve Bachelor Secundair Onderwijs </option>
                <option value="Verpleegkunde">Verpleegkunde </option>
                <option value="Voedings-& Dieetkunde">Voedings-& Dieetkunde </option>
                <option value="Vroedkunde">Vroedkunde </option> -->
                
                </select>

                <select class="select-edu edu" name="Lerarenopleiding" id="Lerarenopleiding" style="display: none;">
                @foreach($courses as $course)
                <option value="{{ $course->id }}" {{ $user->course? ($user->course->id == $course->id? 'selected' : '') : '' }}>{{ $course->title }}</option>
                @endforeach
                <!-- <option value="Educatief Graduaat Secundair Onderwijs">Educatief Graduaat Secundair Onderwijs </option>
                <option value="Kleuteronderwijs">Kleuteronderwijs </option>
                <option value="Lager Onderwijs">Lager Onderwijs </option>
                <option value="Secundair Onderwijs">Secundair Onderwijs </option>
                <option value="Verkorte Educatieve Bachelor Lager Onderwijs">Verkorte Educatieve Bachelor Lager Onderwijs </option>
                <option value="Verkorte Educatieve Bachelor Secundair Onderwijs">Verkorte Educatieve Bachelor Secundair Onderwijs </option> -->

                </select>

                <select class="select-edu edu" name="Kunstopleiding" id="Kunstopleiding" style="display: none;">
                @foreach($courses as $course)
                <option value="{{ $course->id }}" {{ $user->course? ($user->course->id == $course->id? 'selected' : '') : '' }}>{{ $course->title }}</option>
                @endforeach
                <!-- <option value="Academische Bachelor/Master Audiovisuele Kunsten">Academische Bachelor/Master Audiovisuele Kunsten </option>
                <option value="Academische Bachelor/Master Drama">Academische Bachelor/Master Drama </option>
                <option value="Academische Bachelor/Master Muziek">Academische Bachelor/Master Muziek </option>
                <option value="Educatieve Opleidingen In De Kunsten">Educatieve Opleidingen In De Kunsten </option>
                <option value="Podium-En Eventtechnieken">Podium-En Eventtechnieken </option>
                <option value="Professionele Bachelor Audiovisuele Kunsten">Professionele Bachelor Audiovisuele Kunsten </option>
                <option value="Professionele Bachelor/Master Musical">Professionele Bachelor/Master Musical </option> -->

                </select>

                <select class="select-edu edu" name="Postgraduaat" id="Postgraduaat" style="display: none;">
                @foreach($courses as $course)
                <option value="{{ $course->id }}" {{ $user->course? ($user->course->id == $course->id? 'selected' : '') : '' }}>{{ $course->title }}</option>
                @endforeach
                <!-- <option value="Applied Artificial Intelligence ('24-'25)">Applied Artificial Intelligence ('24-'25) </option>
                <option value="Applied Bio-Informatics In Research & Diagnostics">Applied Bio-Informatics In Research & Diagnostics </option>
                <option value="Bedrijfsverpleegkunde">Bedrijfsverpleegkunde </option>
                <option value="Coding (Online)">Coding (Online) </option>
                <option value="Cosmetic Sciences">Cosmetic Sciences </option>
                <option value="Diabeteseducator">Diabeteseducator </option>
                <option value="Fiscaliteit ('24-'25)">Fiscaliteit ('24-'25) </option>
                <option value="Forensisch Hulpverlenend Expert">Forensisch Hulpverlenend Expert </option>
                <option value="Forensisch Onderzoek - Volzet">Forensisch Onderzoek - Volzet </option>
                <option value="Forensisch Verpleegkundig Expert">Forensisch Verpleegkundig Expert </option>
                <option value="Health Coach">Health Coach </option>
                <option value="Informatiemanagement ('24-'25)">Informatiemanagement ('24-'25) </option>
                <option value="Musical">Musical </option>
                <option value="Muziek">Muziek </option>
                <option value="Niet-Confessionele Zedenleer">Niet-Confessionele Zedenleer </option>
                <option value="Palliatieve Zorg">Palliatieve Zorg </option>
                <option value="Pediatrie & Neonatologie">Pediatrie & Neonatologie </option>
                <option value="Peri-Operatieve Zorgen">Peri-Operatieve Zorgen </option>
                <option value="Procesbegeleider Ethiek In Zorg En Welzijn">Procesbegeleider Ethiek In Zorg En Welzijn </option>
                <option value="Technologisch Verpleegkundige">Technologisch Verpleegkundige </option>
                <option value="Toegepaste Artificiële Intelligentie">Toegepaste Artificiële Intelligentie </option> -->

                </select>

                <select class="select-edu edu" name="Bachelor-na-bachelor" id="Bachelor-na-bachelor" style="display: none;">
                @foreach($courses as $course)
                <option value="{{ $course->id }}" {{ $user->course? ($user->course->id == $course->id? 'selected' : '') : '' }}>{{ $course->title }}</option>
                @endforeach
                <!-- <option value="Zorgmanagement">Zorgmanagement </option> -->

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

    @yield('js')
    <script src="{{ asset('js/components/profile-edit.js') }}"></script>
</x-app-layout>

