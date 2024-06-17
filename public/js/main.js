let inputSearch = document.querySelector(".input-search-bar");



inputSearch.addEventListener("input", () => {
    
    let posts = document.querySelectorAll(".post");
    
    if (inputSearch.value == "") {
        posts.forEach((post) => {
            post.style.display = "block";
        });
    } else {
        inputSearch.addEventListener("change", () => {
            console.log(inputSearch.value);
            posts.forEach((post) => {
                post.style.display = "none";
                if (
                    post.getAttribute("title").toLowerCase().includes(inputSearch.value.toLowerCase())             
                ) {
                    post.style.display = "block";
                } else if (inputSearch.value == "") {
                    post.style.display = "block";
                }
            });
        });
    }
});






let checkboxes = document.querySelectorAll(".all-categories");
let checkbox_all = document.querySelector("#all-posts");
let allPosts = document.querySelectorAll(".post");




if(checkbox_all.checked){
    checkboxes.forEach((e)=>{
        e.checked = true;
    });
    
}

checkbox_all.addEventListener('change', ()=>{
    if(checkbox_all.checked){
        checkboxes.forEach((e)=>{
            e.checked = true;
        });

        allPosts.forEach((post)=>{
            post.style.display = 'block';
        });
        
    }else{
        checkboxes.forEach((e)=>{
            e.checked = false;
        });

        allPosts.forEach((post)=>{
            post.style.display = 'none';
        });
    }
});


checkboxes.forEach((checkbox)=>{
    checkbox.addEventListener('change', ()=>{
        
        let allChecked = true;
        
        checkboxes.forEach((e)=>{
            if(!e.checked){
                allChecked = false;
            }
        });

        checkbox_all.checked = allChecked;

    });
});


checkboxes.forEach((checkbox)=>{
    checkbox.addEventListener('change', ()=>{
        

        allPosts.forEach((post)=>{
            
            if(post.getAttribute('category') == checkbox.value){
                
                if(!checkbox.checked){
                    post.style.display = "none";
            
                }else{
                    post.style.display = "block";
                }
                
            }
        });
        

        
    });
});




let postCover = document.querySelector('.post-cover');
let postInput = document.querySelector('#post-cover');
let post_src = postCover.src;

postInput.addEventListener('change', ()=>{
    let file = postInput.files[0];

    if(file){
        let fileReader = new FileReader();

        fileReader.onload = ()=>{
            postCover.src = fileReader.result;
        }
        fileReader.readAsDataURL(file);

    }else{
        postCover.src = post_src;
    }


});



let newCommentCover = document.querySelector('.comment-cover');
let newCommentInput = document.querySelector('#comment-cover');
let comment_src = newCommentCover.src;

newCommentInput.addEventListener('change', ()=>{
    let file = newCommentInput.files[0];

    if(file){
        let fileReader = new FileReader();

        fileReader.onload = ()=>{
            newCommentCover.src = fileReader.result;
        }
        fileReader.readAsDataURL(file);

    }else{
        newCommentCover.src = comment_src;
    }


});


















var collapsibleButtons = document.querySelectorAll('.collapsible');

collapsibleButtons.forEach(function(button) {
button.addEventListener('click', function() {
    this.classList.toggle('active');

    var content = this.nextElementSibling;

    content.classList.toggle('active');
});
});



/* ------------------------------------------------------------------- CREATE POST BUTTON SETTINGS */
document.addEventListener("DOMContentLoaded", function() {
const createPostBtn = document.querySelector('.createpostbutton');
const popup = document.getElementById('postPopup');
const closeBtn = document.querySelector('.popup-close');

createPostBtn.addEventListener('click', function() {
popup.style.display = 'flex';
});

closeBtn.addEventListener('click', function() {
popup.style.display = 'none';
});

window.addEventListener('click', function(event) {
if (event.target === popup) {
    popup.style.display = 'none';
}
});

const postForm = document.getElementById('postForm');
postForm.addEventListener('submit', function(event) {
event.preventDefault();
alert('Post submitted!');
popup.style.display = 'none';
});
});


document.addEventListener("DOMContentLoaded", function() {
const maxTitleLength = 300; // verander dit aantal om maximale lengte van de invoer voor de titel bij post-aanmaak te veranderen
const maxContentLength = 40000; // verander dit aantal om maximale lengte van de invoer voor de content bij post-aanmaak te veranderen

const titleInput = document.getElementById('postTitle');
const contentInput = document.getElementById('postContent');

titleInput.addEventListener('input', function() {
if (titleInput.value.length > maxTitleLength) {
    titleInput.value = titleInput.value.substring(0, maxTitleLength);
}
});

contentInput.addEventListener('input', function() {
if (contentInput.value.length > maxContentLength) {
    contentInput.value = contentInput.value.substring(0, maxContentLength);
}
});
});



/* ------------------------------------------------------------------- PAGINATION */
document.addEventListener('DOMContentLoaded', function() {
const posts = document.querySelectorAll('.posts-container .post');
const postsPerPage = 5;
const paginationContainer = document.getElementById('pagination');
let currentPage = 1;
const totalPages = Math.ceil(posts.length / postsPerPage);

function showPage(page) {
    const start = (page - 1) * postsPerPage;
    const end = start + postsPerPage;

    posts.forEach((post, index) => {
    post.style.display = (index >= start && index < end) ? 'block' : 'none';
    });

    document.querySelectorAll('.pagination button').forEach(button => {
    button.classList.remove('disabled');
    });

    if (page === 1) {
    document.getElementById('pagination-prev-btn').classList.add('disabled');
    }

    if (page === totalPages) {
    document.getElementById('pagination-next-btn').classList.add('disabled');
    }

    document.getElementById('pageNumber').textContent = `Page ${page} of ${totalPages}`;
}

function createPaginationButtons() {
    const prevButton = document.createElement('button');
    prevButton.id = 'pagination-prev-btn';
    prevButton.textContent = 'Prev';
    prevButton.addEventListener('click', () => {
    if (currentPage > 1) {
        currentPage--;
        showPage(currentPage);
    }
    });

    const nextButton = document.createElement('button');
    nextButton.id = 'pagination-next-btn';
    nextButton.textContent = 'Next';
    nextButton.addEventListener('click', () => {
    if (currentPage < totalPages) {
        currentPage++;
        showPage(currentPage);
    }
    });

    const pageNumber = document.createElement('span');
    pageNumber.id = 'pageNumber';
    pageNumber.style.margin = '0 10px';
    pageNumber.textContent = `Page 1 of ${totalPages}`;

    paginationContainer.appendChild(prevButton);
    paginationContainer.appendChild(pageNumber);
    paginationContainer.appendChild(nextButton);
}

createPaginationButtons();
showPage(currentPage);
});



let search = document.querySelector('.input-search-bar');

search.addEventListener('input', ()=>{
    console.log(search.value);
});
