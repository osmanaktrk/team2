<section>
    <div class="container mb-6">


        <header>
            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Education Information') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __("Update your account's education information.") }}
            </p>
        </header>
        <br>
        <form action="{{ route('profile-education.upload') }} " method="post">
            @method('patch')
            @csrf
            <div>
                <x-input-label for="education_type" :value="__('Education')" />
                <select id="education_type" name="education_type"
                    class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                    <option value="Select">Select</option>
                    <option value="Graduaat">Graduaat</option>
                    <option value="Bachelor">Bachelor</option>
                    <option value="Lerarenopleiding">Lerarenopleiding</option>
                    <option value="Kunstopleiding">Kunstopleiding</option>
                    <option value="Postgraduaat">Postgraduaat</option>
                    <option value="Bachelor-na-bachelor">Bachelor-na-bachelor</option>
                </select>
                <select
                    class="edu mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                    id="Graduaat" style="display: none;">
                    <option value="Accounting Administration">Accounting Administration </option>
                    <option value="Accounting Administration (E-learning)">Accounting Administration
                        (E-learning)
                    </option>
                    <option value="Basisverpleegkunde">Basisverpleegkunde </option>
                    <option value="Educatief Graduaat Secundair Onderwijs">Educatief Graduaat Secundair
                        Onderwijs
                    </option>
                    <option value="Elektromechanische Systemen">Elektromechanische Systemen </option>
                    <option value="Informatiebeheer">Informatiebeheer </option>
                    <option value="Internet Of Things">Internet Of Things </option>
                    <option value="Juridisch-Administratieve Ondersteuning (Werktraject)">
                        Juridisch-Administratieve
                        Ondersteuning (Werktraject) </option>
                    <option value="Juridisch-Administratieve Ondersteuning">Juridisch-Administratieve
                        Ondersteuning
                    </option>
                    <option value="Logies-, Restaurant- & Cateringmanagement">Logies-, Restaurant- &
                        Cateringmanagement
                    </option>
                    <option value="Marketing- & Communicatiesupport">Marketing- & Communicatiesupport </option>
                    <option value="Programmeren">Programmeren </option>
                    <option value="Sociaal-Cultureel Werk">Sociaal-Cultureel Werk </option>
                    <option value="Systeem- & Netwerkbeheer">Systeem- & Netwerkbeheer </option>
                    <option value="Winkelmanagement">Winkelmanagement </option>

                </select>

                <select
                    class="edu mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                    id="Bachelor" style="display: none;">

                    <option value="Biomedische Laboratoriumtechnologie">Biomedische Laboratoriumtechnologie
                    </option>
                    <option value="Communicatie">Communicatie </option>
                    <option value="Hotelmanagement">Hotelmanagement </option>
                    <option value="Idea And Innovation Management">Idea And Innovation Management </option>
                    <option value="Journalistiek">Journalistiek </option>
                    <option value="Kleuteronderwijs">Kleuteronderwijs </option>
                    <option value="Lager Onderwijs">Lager Onderwijs </option>
                    <option value="Landschaps- & Tuinarchitectuur">Landschaps- & Tuinarchitectuur </option>
                    <option value="Multimedia & Creatieve Technologie">Multimedia & Creatieve Technologie
                    </option>
                    <option value="Organisatie & Management">Organisatie & Management </option>
                    <option value="Pedagogie Van Het Jonge Kind">Pedagogie Van Het Jonge Kind </option>
                    <option value="Secundair Onderwijs">Secundair Onderwijs </option>
                    <option value="Sociaal Werk">Sociaal Werk </option>
                    <option value="Toegepaste Informatica">Toegepaste Informatica </option>
                    <option value="Toerisme- & Recreatiemanagement">Toerisme- & Recreatiemanagement </option>
                    <option value="Verkorte Educatieve Bachelor Lager Onderwijs">Verkorte Educatieve Bachelor
                        Lager
                        Onderwijs </option>
                    <option value="Verkorte Educatieve Bachelor Secundair Onderwijs">Verkorte Educatieve
                        Bachelor
                        Secundair
                        Onderwijs </option>
                    <option value="Verpleegkunde">Verpleegkunde </option>
                    <option value="Voedings-& Dieetkunde">Voedings-& Dieetkunde </option>
                    <option value="Vroedkunde">Vroedkunde </option>

                </select>

                <select
                    class="edu mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                    id="Lerarenopleiding" style="display: none;">

                    <option value="Educatief Graduaat Secundair Onderwijs">Educatief Graduaat Secundair
                        Onderwijs
                    </option>
                    <option value="Kleuteronderwijs">Kleuteronderwijs </option>
                    <option value="Lager Onderwijs">Lager Onderwijs </option>
                    <option value="Secundair Onderwijs">Secundair Onderwijs </option>
                    <option value="Verkorte Educatieve Bachelor Lager Onderwijs">Verkorte Educatieve Bachelor
                        Lager
                        Onderwijs </option>
                    <option value="Verkorte Educatieve Bachelor Secundair Onderwijs">Verkorte Educatieve
                        Bachelor
                        Secundair
                        Onderwijs </option>
                </select>

                <select
                    class="edu mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                    id="Kunstopleiding" style="display: none;">

                    <option value="Academische Bachelor/Master Audiovisuele Kunsten">Academische
                        Bachelor/Master
                        Audiovisuele Kunsten </option>
                    <option value="Academische Bachelor/Master Drama">Academische Bachelor/Master Drama
                    </option>
                    <option value="Academische Bachelor/Master Muziek">Academische Bachelor/Master Muziek
                    </option>
                    <option value="Educatieve Opleidingen In De Kunsten">Educatieve Opleidingen In De Kunsten
                    </option>
                    <option value="Podium-En Eventtechnieken">Podium-En Eventtechnieken </option>
                    <option value="Professionele Bachelor Audiovisuele Kunsten">Professionele Bachelor
                        Audiovisuele
                        Kunsten
                    </option>
                    <option value="Professionele Bachelor/Master Musical">Professionele Bachelor/Master Musical
                    </option>

                </select>

                <select
                    class="edu mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                    id="Postgraduaat" style="display: none;">

                    <option value="Applied Artificial Intelligence ('24-'25)">Applied Artificial Intelligence
                        ('24-'25)
                    </option>
                    <option value="Applied Bio-Informatics In Research & Diagnostics">Applied Bio-Informatics
                        In
                        Research &
                        Diagnostics </option>
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
                    <option value="Procesbegeleider Ethiek In Zorg En Welzijn">Procesbegeleider Ethiek In Zorg
                        En
                        Welzijn
                    </option>
                    <option value="Technologisch Verpleegkundige">Technologisch Verpleegkundige </option>
                    <option value="Toegepaste Artificiële Intelligentie">Toegepaste Artificiële Intelligentie
                    </option>
                </select>

                <select
                    class="edu mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                    id="Bachelor-na-bachelor" style="display: none;">
                    <option value="Zorgmanagement">Zorgmanagement </option>
                </select>
                <br>

                <input type="number" name="education_year"
                    class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                    id="education_year" placeholder="Year" style="display: none;">
            </div>

            <div class="flex items-center justify-center gap-4">
                <x-input-error :messages="$errors->get('education_year')" class="mt-2" />
                <x-primary-button>{{ __('Save') }}</x-primary-button>
                @if (session('status') === 'Education Informations Updated')
                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 5000)"
                        class="text-xl text-green-600">{{ __('Saved') }}</p>
                @endif
            </div>
        </form>

    </div>


</section>
