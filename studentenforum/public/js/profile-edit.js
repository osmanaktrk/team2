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


