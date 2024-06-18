// document.addEventListener("DOMContentLoaded", function () {
//     const educationLevel = document.getElementById("educationLevel");
//     const specializationGroup = document.getElementById("specializationGroup");
//     const specialization = document.getElementById("specialization");
//     const yearGroup = document.getElementById("yearGroup");

//     const specializations = {
//         Graduaat: [
//             "Accounting Administration",
//             "Accounting Administration (E-learning)",
//             "Basisverpleegkunde",
//             "Educatief Graduaat Secundair Onderwijs",
//             "Elektromechanische Systemen",
//             "Informatiebeheer",
//             "Internet of Things",
//             "Juridisch-Administratieve Ondersteuning (werktraject)",
//             "Juridisch-Administratieve Ondersteuning",
//             "Logies-, Restaurant- & Cateringmanagement",
//             "Marketing- & Communicatiesupport",
//             "Programmeren",
//             "Sociaal-Cultureel Werk",
//             "Systeem- & Netwerkbeheer",
//             "Winkelmanagement",
//         ],
//         Bachelor: [
//             "Biomedische Laboratoriumtechnologie",
//             "Communicatie",
//             "Hotelmanagement",
//             "Idea and Innovation Management",
//             "Journalistiek",
//             "Kleuteronderwijs",
//             "Lager Onderwijs",
//             "Landschaps- & Tuinarchitectuur",
//             "Multimedia & Creatieve Technologie",
//             "Organisatie & Management",
//             "Pedagogie van het Jonge Kind",
//             "Secundair Onderwijs",
//             "Sociaal Werk",
//             "Toegepaste Informatica",
//             "Toerisme- & Recreatiemanagement",
//             "Verkorte Educatieve Bachelor Lager Onderwijs",
//             "Verkorte Educatieve Bachelor Secundair Onderwijs",
//             "Verpleegkunde",
//             "Voedings- & Dieetkunde",
//             "Vroedkunde",
//         ],
//         Lerarenopleiding: [
//             "Educatief Graduaat Secundair Onderwijs",
//             "Kleuteronderwijs",
//             "Lager Onderwijs",
//             "Secundair Onderwijs",
//             "Verkorte Educatieve Bachelor Lager Onderwijs",
//             "Verkorte Educatieve Bachelor Secundair Onderwijs",
//         ],
//         Kunstopleiding: [
//             "Academische Bachelor/Master Audiovisuele Kunsten",
//             "Academische Bachelor/Master Drama",
//             "Academische Bachelor/Master Muziek",
//             "Educatieve Opleidingen in de Kunsten",
//             "Podium- en Eventtechnieken",
//             "Professionele Bachelor Audiovisuele Kunsten",
//             "Professionele Bachelor/Master Musical",
//         ],
//         Postgraduaat: [
//             "Applied Artificial Intelligence ('24-'25)",
//             "Applied Bio-Informatics in Research & Diagnostics",
//             "Bedrijfsverpleegkunde",
//             "Coding (Online)",
//             "Cosmetic Sciences",
//             "Diabeteseducator",
//             "Fiscaliteit ('24-'25)",
//             "Forensisch Hulpverlenend Expert",
//             "Forensisch Onderzoek - Volzet",
//             "Forensisch Verpleegkundig Expert",
//             "Health Coach",
//             "Informatiemanagement ('24-'25)",
//             "Musical",
//             "Muziek",
//             "Niet-Confessionele Zedenleer",
//             "Palliatieve Zorg",
//             "Pediatrie & Neonatologie",
//             "Peri-Operatieve Zorgen",
//             "Procesbegeleider Ethiek in Zorg en Welzijn",
//             "Technologisch Verpleegkundige",
//             "Toegepaste Artificiële Intelligentie",
//         ],
//         "Bachelor-na-bachelor": ["Zorgmanagement"],
//     };

//     educationLevel.addEventListener("change", function () {
//         const selectedLevel = educationLevel.value;

//         if (selectedLevel === "Select") {
//             specializationGroup.style.display = "none";
//             yearGroup.style.display = "none";
//         } else {
//             specializationGroup.style.display = "block";
//             yearGroup.style.display = "block";

//             specialization.innerHTML = "";

//             specializations[selectedLevel].forEach(function (spec) {
//                 const option = document.createElement("option");
//                 option.value = spec;
//                 option.textContent = spec;
//                 specialization.appendChild(option);
//             });
//         }
//     });

//     const profileForm = document.getElementById("profileForm");
//     profileForm.addEventListener("submit", function (e) {
//         e.preventDefault();
//         const name = document.getElementById("profileName").value;
//         const email = document.getElementById("profileEmail").value;
//         const educationLevelText =
//             educationLevel.options[educationLevel.selectedIndex].text;
//         const specializationText =
//             specialization.options[specialization.selectedIndex].text;
//         const yearText =
//             document.getElementById("year").options[
//                 document.getElementById("year").selectedIndex
//             ].text;

//         document.getElementById("editName").textContent = name;
//         document.getElementById("editEmail").textContent = email;
//         document.getElementById(
//             "editEducation"
//         ).textContent = `${yearText} of ${educationLevelText}, specializing in ${specializationText}`;

//         document.getElementById("dashboardName").textContent = name;
//         document.getElementById(
//             "dashboardFieldOfStudy"
//         ).textContent = `${yearText} of ${educationLevelText}, specializing in ${specializationText}`;

//         const profileImageSrc = document.getElementById("profileImage").src;
//         document.getElementById(
//             "dashboardProfilePhoto"
//         ).innerHTML = `<img src="${profileImageSrc}" class="rounded-circle" style="width: 100%; height: 100%;">`;

//         $("#customizeModal").modal("hide");
//     });

//     const profileImageInput = document.getElementById("profileImageInput");
//     profileImageInput.addEventListener("change", function () {
//         const file = profileImageInput.files[0];
//         const reader = new FileReader();
//         reader.onload = function (e) {
//             document.getElementById("profileImage").src = e.target.result;
//         };
//         reader.readAsDataURL(file);
//     });
// });




function toggleEditProfile() {
    document.getElementById("profileForm").classList.toggle("d-none");
}





let avatar = document.querySelector('.avatar-photo');
let avatar_input = document.querySelector('.avatar-photo-input');
let avatar_src = avatar.src;


avatar_input.addEventListener('change', ()=>{

    let file = avatar_input.files[0];

    if(file){
        let fileReader = new FileReader();

        fileReader.onload = ()=>{
            avatar.src = fileReader.result;
        }

        fileReader.readAsDataURL(file);

    }else{
        avatar.src = avatar_src;
    }





});



let edu_type = document.querySelector("#education_type");
let graduaat = document.querySelector("#Graduaat");
let bachelor = document.querySelector("#Bachelor");
let lerarenopleiding = document.querySelector("#Lerarenopleiding");
let kunstopleiding = document.querySelector("#Kunstopleiding");
let postgraduaat = document.querySelector("#Postgraduaat");
let bachelor_na_bachelor = document.querySelector("#Bachelor-na-bachelor");
let year = document.querySelector("#education_year");
let edu = document.querySelectorAll(".edu");

edu_type.addEventListener("change", (e)=>{
    let val = e.target.value;
    
    console.log(val);

    switch (val) {
        case "Select":
            edu.forEach((e)=>{
                e.style.display = "none";
                e.setAttribute('name', '');

            });
            year.style.display = 'none';
        break;

        case "Graduaat":
            edu.forEach((e)=>{
                e.style.display = "none";
                e.setAttribute('name', '');
            });
            year.style.display = 'none';
            graduaat.style.display = "block";
            graduaat.setAttribute('name', 'education_name');
            year.style.display = "block";

            break;

        case "Bachelor":
            edu.forEach((e)=>{
                e.style.display = "none";
                e.setAttribute('name', '');

            });
            year.style.display = 'none';
            bachelor.style.display = "block";
            bachelor.setAttribute('name', 'education_name');
            year.style.display = "block";
            break;

        case "Lerarenopleiding":
            edu.forEach((e)=>{
                e.style.display = "none";
                e.setAttribute('name', '');

            });
            year.style.display = 'none';
            lerarenopleiding.style.display = "block";
            lerarenopleiding.setAttribute('name', 'education_name');
            year.style.display = "block";
            
            break;

        case "Kunstopleiding":
            edu.forEach((e)=>{
                e.style.display = "none";
                e.setAttribute('name', '');

            });
            year.style.display = 'none';
            kunstopleiding.style.display = "block";
            kunstopleiding.setAttribute('name', 'education_name');
            year.style.display = "block";
            
            break;

        case "Postgraduaat":
            edu.forEach((e)=>{
                e.style.display = "none";
                e.setAttribute('name', '');

            });
            year.style.display = 'none';
            postgraduaat.style.display = "block";
            postgraduaat.setAttribute('name', 'education_name');
            year.style.display = "block";
            
            break;

        case "Bachelor-na-bachelor":
            edu.forEach((e)=>{
                e.style.display = "none";
                e.setAttribute('name', '');

            });
            year.style.display = 'none';
            bachelor_na_bachelor.style.display = "block";
            b.setAttribute('name', 'education_name');
            year.style.display = "block";
            
            break;
    
        
    }

});


