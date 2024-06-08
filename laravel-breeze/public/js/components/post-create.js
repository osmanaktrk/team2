let category = document.querySelector("#category_select");
let general = document.querySelector('#General');
let education = document.querySelector('#Education');
let game = document.querySelector('#Game');
let movie = document.querySelector('#Movie');
let music = document.querySelector('#Music');
let nature = document.querySelector('#Nature');
let politic = document.querySelector('#Politic');
let social = document.querySelector('#Social');
let sience = document.querySelector('#Sience');


category.style.display = "none";

general.addEventListener('click', ()=>{
    category.style.display = "block";
    category.innerHTML = "SELECTED CATEGORY : GENERAL";
});




education.addEventListener('click', ()=>{
    category.style.display = "block";
    category.innerHTML = "SELECTED CATEGORY : EDUCATION";
});


game.addEventListener('click', ()=>{
    category.style.display = "block";
    category.innerHTML = "SELECTED CATEGORY : GAME";
});


movie.addEventListener('click', ()=>{
    category.style.display = "block";
    category.innerHTML = "SELECTED CATEGORY : MOVIE";
});


music.addEventListener('click', ()=>{
    category.style.display = "block";
    category.innerHTML = "SELECTED CATEGORY : MUSIC";
});


nature.addEventListener('click', ()=>{
    category.style.display = "block";
    category.innerHTML = "SELECTED CATEGORY : NATURE";
});


politic.addEventListener('click', ()=>{
    category.style.display = "block";
    category.innerHTML = "SELECTED CATEGORY : POLITIC";
});


social.addEventListener('click', ()=>{
    category.style.display = "block";
    category.innerHTML = "SELECTED CATEGORY : SOCIAL";
});


sience.addEventListener('click', ()=>{
    category.style.display = "block";
    category.innerHTML = "SELECTED CATEGORY : SIENCE";
});
