let popupOpen = document.querySelector('#popup-open');
let popup = document.querySelector('#popup');
let popupClose = document.querySelector('#popup-close');
let body = document.querySelector('body');
let popupContainer = document.querySelector('#popup-container');

popupOpen.onclick = ()=>{
    popup.style.display = "block";
    body.className = "pop";
    //body.style.backgroundColor = 'transparent';
    popupContainer.classList.add('popup-container');
    
}

popupClose.onclick = ()=>{
    popup.style.display = "none";
    body.style.backgroundColor = 'rgb(228,228,228)';
    popupContainer.classList.remove('popup-container');
}

let checkboxes = document.querySelectorAll("input[type='checkbox']");
let allTopics = document.querySelector("#all-topics");
let generalChecked = document.querySelector('#General');
let educationChecked = document.querySelector('#Education');
let gameChecked = document.querySelector('#Game');
let movieChecked = document.querySelector('#Movie');
let musicChecked = document.querySelector('#Music');
let natureChecked = document.querySelector('#Nature');
let politicChecked = document.querySelector('#Politic');
let socialChecked = document.querySelector('#Social');
let scienceChecked = document.querySelector('#Sience');

let closeSelected = document.querySelectorAll(".close-selected");


let generalSelected = document.querySelector('#general-selected');
let educationSelected = document.querySelector('#education-selected');
let gameSelected = document.querySelector('#game-selected');
let movieSelected = document.querySelector('#movie-selected');
let musicSelected = document.querySelector('#music-selected');
let natureSelected = document.querySelector('#nature-selected');
let politicSelected = document.querySelector('#politic-selected');
let socialSelected = document.querySelector('#social-selected');
let scienceSelected = document.querySelector('#science-selected');

let search = document.querySelector("#search");

search.addEventListener('input', (e)=>{
    let value = e.target.value;
    let topics = document.querySelectorAll(".topics");
    topics.forEach((topic)=>{
        if(topic.title.includes(value) || value == ""){
            topic.style.display = "flex"
        }else{
            topic.style.display = "none"

        }
    });
    
});



allTopics.addEventListener('click', ()=>{
    allTopics.checked = true;
    if(allTopics.checked == true){
        closeSelected.forEach((e)=>{
            e.style.display = "flex";
        });

        document.querySelectorAll("[category='General']").forEach((e)=>{
            e.style.display = 'flex';
        });
        document.querySelectorAll("[category='Education']").forEach((e)=>{
            e.style.display = 'flex';
        });
        document.querySelectorAll("[category='Game']").forEach((e)=>{
            e.style.display = 'flex';
        });
        document.querySelectorAll("[category='Movie']").forEach((e)=>{
            e.style.display = 'flex';
        });
        document.querySelectorAll("[category='Music']").forEach((e)=>{
            e.style.display = 'flex';
        });
        document.querySelectorAll("[category='Nature']").forEach((e)=>{
            e.style.display = 'flex';
        });
        document.querySelectorAll("[category='Politic']").forEach((e)=>{
            e.style.display = 'flex';
        });
        document.querySelectorAll("[category='Social']").forEach((e)=>{
            e.style.display = 'flex';
        });
        document.querySelectorAll("[category='Sience']").forEach((e)=>{
            e.style.display = 'flex';
        });

    }
});



// ---general----

generalChecked.addEventListener('click', ()=>{
    generalChecked.checked = true;
    let topicGeneral = document.querySelectorAll("[category='General']");
    if(generalChecked.checked == true){
        generalSelected.style.display = 'flex';
        topicGeneral.forEach((e)=>{
            e.style.display = 'flex';
        });
        
        

    }else{
        generalSelected.style.display = 'none';
        topicGeneral.forEach((e)=>{
            e.style.display = 'none';
        });

    }

});

generalSelected.addEventListener('click', ()=>{
    generalChecked.checked = false;
    allTopics.checked = false;
    let topicGeneral = document.querySelectorAll("[category='General']");
    if(generalChecked.checked == true){
        generalSelected.style.display = 'flex';
        topicGeneral.forEach((e)=>{
            e.style.display = 'flex';
        });

    }else{
        generalSelected.style.display = 'none';
        topicGeneral.forEach((e)=>{
            e.style.display = 'none';
        });

    }
});

// ---education----
educationChecked.addEventListener('click', ()=>{
    educationChecked.checked = true;
    let topicEducation = document.querySelectorAll("[category='Education']");
    if(educationChecked.checked == true){
        educationSelected.style.display = 'flex';
        topicEducation.forEach((e)=>{
            e.style.display = 'flex';
        });

    }else{
        educationSelected.style.display = 'none';
        topicEducation.forEach((e)=>{
            e.style.display = 'none';
        });

    }

});




educationSelected.addEventListener('click', ()=>{
    educationChecked.checked = false;
    allTopics.checked = false;
    let topicEducation = document.querySelectorAll("[category='Education']");
    if(educationChecked.checked == true){
        educationSelected.style.display = 'flex';
        topicEducation.forEach((e)=>{
            e.style.display = 'flex';
        });

    }else{
        educationSelected.style.display = 'none';
        topicEducation.forEach((e)=>{
            e.style.display = 'none';
        });

    }
});

// ---game----

gameChecked.addEventListener('click', ()=>{
    gameChecked.checked = true;
    let topicGame = document.querySelectorAll("[category='Game']");
    if(gameChecked.checked == true){
        gameSelected.style.display = 'flex';
        topicGame.forEach((e)=>{
            e.style.display = 'flex';
        });

    }else{
        gameSelected.style.display = 'none';
        topicGame.forEach((e)=>{
            e.style.display = 'none';
        });

    }

});




gameSelected.addEventListener('click', ()=>{
    gameChecked.checked = false;
    allTopics.checked = false;
    let topicGame = document.querySelectorAll("[category='Game']");
    if(gameChecked.checked == true){
        gameSelected.style.display = 'flex';
        topicGame.forEach((e)=>{
            e.style.display = 'flex';
        });

    }else{
        gameSelected.style.display = 'none';
        topicGame.forEach((e)=>{
            e.style.display = 'none';
        });

    }
});

// ---movie----

movieChecked.addEventListener('click', ()=>{
    movieChecked.checked = true;
    let topicMovie = document.querySelectorAll("[category='Movie']");
    if(movieChecked.checked == true){
        movieSelected.style.display = 'flex';
        topicMovie.forEach((e)=>{
            e.style.display = 'flex';
        });

    }else{
        movieSelected.style.display = 'none';
        topicMovie.forEach((e)=>{
            e.style.display = 'none';
        });

    }

});




movieSelected.addEventListener('click', ()=>{
    movieChecked.checked = false;
    allTopics.checked = false;
    let topicMovie = document.querySelectorAll("[category='Movie']");
    if(movieChecked.checked == true){
        movieSelected.style.display = 'flex';
        topicMovie.forEach((e)=>{
            e.style.display = 'flex';
        });

    }else{
        movieSelected.style.display = 'none';
        topicMovie.forEach((e)=>{
            e.style.display = 'none';
        });

    }
});

// ---music----

musicChecked.addEventListener('click', ()=>{
    musicChecked.checked = true;
    let topicMusic = document.querySelectorAll("[category='Music']");
    if(musicChecked.checked == true){
        musicSelected.style.display = 'flex';
        topicMusic.forEach((e)=>{
            e.style.display = 'flex';
        });

    }else{
        musicSelected.style.display = 'none';
        topicMusic.forEach((e)=>{
            e.style.display = 'none';
        });

    }

});


musicSelected.addEventListener('click', ()=>{
    musicChecked.checked = false;
    allTopics.checked = false;
    let topicMusic = document.querySelectorAll("[category='Music']");
    if(musicChecked.checked == true){
        musicSelected.style.display = 'flex';
        topicMusic.forEach((e)=>{
            e.style.display = 'flex';
        });

    }else{
        musicSelected.style.display = 'none';
        topicMusic.forEach((e)=>{
            e.style.display = 'none';
        });

    }
});

// ---nature----

natureChecked.addEventListener('click', ()=>{
    natureChecked.checked = true;
    let topicNature = document.querySelectorAll("[category='Nature']");
    if(natureChecked.checked == true){
        natureSelected.style.display = 'flex';
        topicNature.forEach((e)=>{
            e.style.display = 'flex';
        });

    }else{
        natureSelected.style.display = 'none';
        topicNature.forEach((e)=>{
            e.style.display = 'none';
        });

    }

});


natureSelected.addEventListener('click', ()=>{
    natureChecked.checked = false;
    allTopics.checked = false;
    let topicNature = document.querySelectorAll("[category='Nature']");
    if(natureChecked.checked == true){
        natureSelected.style.display = 'flex';
        topicNature.forEach((e)=>{
            e.style.display = 'flex';
        });

    }else{
        natureSelected.style.display = 'none';
        topicNature.forEach((e)=>{
            e.style.display = 'none';
        });

    }
});

// ---politic----

politicChecked.addEventListener('click', ()=>{
    politicChecked.checked = true;
    let topicPolitic = document.querySelectorAll("[category='Politic']");
    if(politicChecked.checked == true){
        politicSelected.style.display = 'flex';
        topicPolitic.forEach((e)=>{
            e.style.display = 'flex';
        });

    }else{
        politicSelected.style.display = 'none';
        topicPolitic.forEach((e)=>{
            e.style.display = 'none';
        });

    }

});




politicSelected.addEventListener('click', ()=>{
    politicChecked.checked = false;
    allTopics.checked = false;
    let topicPolitic = document.querySelectorAll("[category='Politic']");
    if(politicChecked.checked == true){
        politicSelected.style.display = 'flex';
        topicPolitic.forEach((e)=>{
            e.style.display = 'flex';
        });

    }else{
        politicSelected.style.display = 'none';
        topicPolitic.forEach((e)=>{
            e.style.display = 'none';
        });

    }
});

// ---social----

socialChecked.addEventListener('click', ()=>{
    socialChecked.checked = true;
    let topicSocial = document.querySelectorAll("[category='Social']");
    if(socialChecked.checked == true){
        socialSelected.style.display = 'flex';
        topicSocial.forEach((e)=>{
            e.style.display = 'flex';
        });

    }else{
        socialSelected.style.display = 'none';
        topicSocial.forEach((e)=>{
            e.style.display = 'none';
        });

    }

});


socialSelected.addEventListener('click', ()=>{
    socialChecked.checked = false;
    allTopics.checked = false;
    let topicSocial = document.querySelectorAll("[category='Social']");
    if(socialChecked.checked == true){
        socialSelected.style.display = 'flex';
        topicSocial.forEach((e)=>{
            e.style.display = 'flex';
        });

    }else{
        socialSelected.style.display = 'none';
        topicSocial.forEach((e)=>{
            e.style.display = 'none';
        });

    }
});


// ---science----


scienceChecked.addEventListener('click', ()=>{
    scienceChecked.checked = true;
    let topicScience = document.querySelectorAll("[category='Science']");
    if(scienceChecked.checked == true){
        scienceSelected.style.display = 'flex';
        topicScience.forEach((e)=>{
            e.style.display = 'flex';
        });

    }else{
        scienceSelected.style.display = 'none';
        topicScience.forEach((e)=>{
            e.style.display = 'none';
        });

    }

});


scienceSelected.addEventListener('click', ()=>{
    scienceChecked.checked = false;
    allTopics.checked = false;
    let topicScience = document.querySelectorAll("[category='Science']");
    if(scienceChecked.checked == true){
        scienceSelected.style.display = 'flex';
        topicScience.forEach((e)=>{
            e.style.display = 'flex';
        });

    }else{
        scienceSelected.style.display = 'none';
        topicScience.forEach((e)=>{
            e.style.display = 'none';
        });

    }
});
