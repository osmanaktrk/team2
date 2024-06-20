
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

let graduaat_id = document.querySelector("#Graduaat");
let graduaat_class = document.querySelector(".Graduaat");

let bachelor_id = document.querySelector("#Bachelor");
let bachelor_class = document.querySelector(".Bachelor");

let lerarenopleiding_id = document.querySelector("#Lerarenopleiding");
let lerarenopleiding_class = document.querySelector(".Lerarenopleiding");

let kunstopleiding_id = document.querySelector("#Kunstopleiding");
let kunstopleiding_class = document.querySelector(".Kunstopleiding");

let postgraduaat_id = document.querySelector("#Postgraduaat");
let postgraduaat_class = document.querySelector("#Postgraduaat");

let bachelor_na_bachelor_id = document.querySelector("#Bachelor-na-bachelor");
let bachelor_na_bachelor_class = document.querySelector(".Bachelor-na-bachelor");

let year = document.querySelector("#education_year");
let edu = document.querySelectorAll(".edu");

edu_type.addEventListener("change", (e)=>{
    let val = e.target.value;
    
    

    switch (val) {
        case "Select":
            edu.forEach((e)=>{
                
                e.style.display = "none";
                

            });

            graduaat_id.setAttribute('name', '');
            bachelor_id.setAttribute('name', '');
            lerarenopleiding_id.setAttribute('name', '');
            kunstopleiding_id.setAttribute('name', '');
            postgraduaat_id.setAttribute('name', '');
            bachelor_na_bachelor_id.setAttribute('name', '');
            year.style.display = 'none';
        break;

        case "Graduaat":
            edu.forEach((e)=>{
                e.style.display = "none";

            });
            year.style.display = 'none';
            graduaat_class.style.display = "block";
            graduaat_id.setAttribute('name', 'education_name');
            bachelor_id.setAttribute('name', '');
            lerarenopleiding_id.setAttribute('name', '');
            kunstopleiding_id.setAttribute('name', '');
            postgraduaat_id.setAttribute('name', '');
            bachelor_na_bachelor_id.setAttribute('name', '');

            year.style.display = "block";

            break;

        case "Bachelor":
            edu.forEach((e)=>{
                e.style.display = "none";
              

            });
            year.style.display = 'none';
            bachelor_class.style.display = "block";
            graduaat_id.setAttribute('name', '');
            bachelor_id.setAttribute('name', 'education_name');
            lerarenopleiding_id.setAttribute('name', '');
            kunstopleiding_id.setAttribute('name', '');
            postgraduaat_id.setAttribute('name', '');
            bachelor_na_bachelor_id.setAttribute('name', '');
            year.style.display = "block";
            break;

        case "Lerarenopleiding":
            edu.forEach((e)=>{
                e.style.display = "none";
              

            });
            year.style.display = 'none';
            lerarenopleiding_class.style.display = "block";
            graduaat_id.setAttribute('name', '');
            bachelor_id.setAttribute('name', '');
            lerarenopleiding_id.setAttribute('name', 'education_name');
            kunstopleiding_id.setAttribute('name', '');
            postgraduaat_id.setAttribute('name', '');
            bachelor_na_bachelor_id.setAttribute('name', '');
            year.style.display = "block";
            
            break;

        case "Kunstopleiding":
            edu.forEach((e)=>{
                e.style.display = "none";

            });
            year.style.display = 'none';
            kunstopleiding_class.style.display = "block";
            graduaat_id.setAttribute('name', '');
            bachelor_id.setAttribute('name', '');
            lerarenopleiding_id.setAttribute('name', '');
            kunstopleiding_id.setAttribute('name', 'education_name');
            postgraduaat_id.setAttribute('name', '');
            bachelor_na_bachelor_id.setAttribute('name', '');
            year.style.display = "block";
            
            break;

        case "Postgraduaat":
            edu.forEach((e)=>{
                e.style.display = "none";

            });
            year.style.display = 'none';
            postgraduaat_class.style.display = "block";
            graduaat_id.setAttribute('name', '');
            bachelor_id.setAttribute('name', '');
            lerarenopleiding_id.setAttribute('name', '');
            kunstopleiding_id.setAttribute('name', '');
            postgraduaat_id.setAttribute('name', 'education_name');
            bachelor_na_bachelor_id.setAttribute('name', '');
            year.style.display = "block";
            
            break;

        case "Bachelor-na-bachelor":
            edu.forEach((e)=>{
                e.style.display = "none";

            });
            year.style.display = 'none';
            bachelor_na_bachelor_class.style.display = "block";
            graduaat_id.setAttribute('name', '');
            bachelor_id.setAttribute('name', '');
            lerarenopleiding_id.setAttribute('name', '');
            kunstopleiding_id.setAttribute('name', '');
            postgraduaat_id.setAttribute('name', '');
            bachelor_na_bachelor_id.setAttribute('name', 'education_name');
            year.style.display = "block";
            
            break;
    
        
    }

});


