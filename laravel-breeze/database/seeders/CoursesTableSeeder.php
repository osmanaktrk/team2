<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $courses = [
            
            // Graduaatsopleiding
            ['title' => 'Accounting Administration', 'type' => json_encode(['Graduaat'])],
            ['title' => 'Accounting Administration (E-learning)', 'type' => json_encode(['Graduaat'])],
            ['title' => 'Basisverpleegkunde', 'type' => json_encode(['Graduaat'])],
            ['title' => 'Educatief Graduaat Secundair Onderwijs', 'type' => json_encode(['Graduaat', 'Lerarenopleiding'])],
            ['title' => 'Elektromechanische Systemen', 'type' => json_encode(['Graduaat'])],
            ['title' => 'Informatiebeheer', 'type' => json_encode(['Graduaat'])],
            ['title' => 'Internet of Things', 'type' => json_encode(['Graduaat'])],
            ['title' => 'Juridisch-Administratieve Ondersteuning (werktraject)', 'type' => json_encode(['Graduaat'])],
            ['title' => 'Juridisch-Administratieve Ondersteuning', 'type' => json_encode(['Graduaat'])],
            ['title' => 'Logies-, Restaurant- & Cateringmanagement', 'type' => json_encode(['Graduaat'])],
            ['title' => 'Marketing- & Communicatiesupport', 'type' => json_encode(['Graduaat'])],
            ['title' => 'Programmeren', 'type' => json_encode(['Graduaat'])],
            ['title' => 'Sociaal-Cultureel Werk', 'type' => json_encode(['Graduaat'])],
            ['title' => 'Systeem- & Netwerkbeheer', 'type' => json_encode(['Graduaat'])],
            ['title' => 'Winkelmanagement', 'type' => json_encode(['Graduaat'])],

            // Bacheloropleiding (+ Lerarenopleiding)
            ['title' => 'Biomedische Laboratoriumtechnologie', 'type' => json_encode(['Bachelor'])],
            ['title' => 'Communicatie', 'type' => json_encode(['Bachelor'])],
            ['title' => 'Hotelmanagement', 'type' => json_encode(['Bachelor'])],
            ['title' => 'Idea and Innovation Management', 'type' => json_encode(['Bachelor'])],
            ['title' => 'Journalistiek', 'type' => json_encode(['Bachelor'])],
            ['title' => 'Kleuteronderwijs', 'type' => json_encode(['Bachelor', 'Lerarenopleiding'])],
            ['title' => 'Lager Onderwijs', 'type' => json_encode(['Bachelor', 'Lerarenopleiding'])],
            ['title' => 'Landschaps- & Tuinarchitectuur', 'type' => json_encode(['Bachelor'])],
            ['title' => 'Multimedia & Creatieve Technologie', 'type' => json_encode(['Bachelor'])],
            ['title' => 'Organisatie & Management', 'type' => json_encode(['Bachelor'])],
            ['title' => 'Pedagogie van het Jonge Kind', 'type' => json_encode(['Bachelor'])],
            ['title' => 'Secundair Onderwijs', 'type' => json_encode(['Bachelor', 'Lerarenopleiding'])],
            ['title' => 'Sociaal Werk', 'type' => json_encode(['Bachelor'])],
            ['title' => 'Toegepaste Informatica', 'type' => json_encode(['Bachelor'])],
            ['title' => 'Toerisme- & Recreatiemanagement', 'type' => json_encode(['Bachelor'])],
            ['title' => 'Verkorte Educatieve Bachelor Lager Onderwijs', 'type' => json_encode(['Bachelor', 'Lerarenopleiding'])],
            ['title' => 'Verkorte Educatieve Bachelor Secundair Onderwijs', 'type' => json_encode(['Bachelor', 'Lerarenopleiding'])],
            ['title' => 'Verpleegkunde', 'type' => json_encode(['Bachelor'])],
            ['title' => 'Voedings-& Dieetkunde', 'type' => json_encode(['Bachelor'])],
            ['title' => 'Vroedkunde', 'type' => json_encode(['Bachelor'])],

            // Kunstopleiding
            ['title' => 'Academische Bachelor/Master Audiovisuele Kunsten', 'type' => json_encode(['Kunstopleiding'])],
            ['title' => 'Academische Bachelor/Master Drama', 'type' => json_encode(['Kunstopleiding'])],
            ['title' => 'Academische Bachelor/Master Muziek', 'type' => json_encode(['Kunstopleiding'])],
            ['title' => 'Educatieve Opleidingen in de Kunsten', 'type' => json_encode(['Kunstopleiding'])],
            ['title' => 'Podium- en Eventtechnieken', 'type' => json_encode(['Kunstopleiding'])],
            ['title' => 'Professionele Bachelor Audiovisuele Kunsten', 'type' => json_encode(['Kunstopleiding'])],
            ['title' => 'Professionele Bachelor/Master Musical', 'type' => json_encode(['Kunstopleiding'])],

            // Postgraduaatsopleiding
            ['title' => 'Applied Artificial Intelligence (\'24-\'25)', 'type' => json_encode(['Postgraduaat'])],
            ['title' => 'Applied Bio-Informatics in Research & Diagnostics', 'type' => json_encode(['Postgraduaat'])],
            ['title' => 'Bedrijfsverpleegkunde', 'type' => json_encode(['Postgraduaat'])],
            ['title' => 'Coding (Online)', 'type' => json_encode(['Postgraduaat'])],
            ['title' => 'Cosmetic Sciences', 'type' => json_encode(['Postgraduaat'])],
            ['title' => 'Diabeteseducator', 'type' => json_encode(['Postgraduaat'])],
            ['title' => 'Fiscaliteit (\'24-\'25)', 'type' => json_encode(['Postgraduaat'])],
            ['title' => 'Forensisch Hulpverlenend Expert', 'type' => json_encode(['Postgraduaat'])],
            ['title' => 'Forensisch Onderzoek - Volzet', 'type' => json_encode(['Postgraduaat'])],
            ['title' => 'Forensisch Verpleegkundig Expert', 'type' => json_encode(['Postgraduaat'])],
            ['title' => 'Health Coach', 'type' => json_encode(['Postgraduaat'])],
            ['title' => 'Informatiemanagement (\'24-\'25)', 'type' => json_encode(['Postgraduaat'])],
            ['title' => 'Musical', 'type' => json_encode(['Postgraduaat'])],
            ['title' => 'Muziek', 'type' => json_encode(['Postgraduaat'])],
            ['title' => 'Niet-Confessionele Zedenleer', 'type' => json_encode(['Postgraduaat'])],
            ['title' => 'Palliatieve Zorg', 'type' => json_encode(['Postgraduaat'])],
            ['title' => 'Pediatrie & Neonatologie', 'type' => json_encode(['Postgraduaat'])],
            ['title' => 'Peri-Operatieve Zorgen', 'type' => json_encode(['Postgraduaat'])],
            ['title' => 'Procesbegeleider Ethiek in Zorg en Welzijn', 'type' => json_encode(['Postgraduaat'])],
            ['title' => 'Technologisch Verpleegkundige', 'type' => json_encode(['Postgraduaat'])],
            ['title' => 'Toegepaste Artificiële Intelligentie', 'type' => json_encode(['Postgraduaat'])],

            // Bachelor-na-bacheloropleiding
            ['title' => 'Zorgmanagement', 'type' => json_encode(['Bachelor-na-bachelor'])],
        ];

        Course::insert($courses);
    }
}
