var collapsibleButtons = document.querySelectorAll('.collapsible');

collapsibleButtons.forEach(function(button) {
button.addEventListener('click', function() {
    this.classList.toggle('active');

    var content = this.nextElementSibling;

    content.classList.toggle('active');
});
});


// document.addEventListener("DOMContentLoaded", function() {
// const maxTitleLength = 100;  // verander dit aantal om maximale lengte van de weergegeven titel te veranderen (voordat het wordt afgebroken door '...')
// const maxContentLength = 200; // verander dit aantal om maximale lengte van de weergegeven content te veranderen (voordat het wordt afgebroken door '...')
// const titleElements = document.querySelectorAll('.post-header');
// const contentElements = document.querySelectorAll('.post-body');

// titleElements.forEach(titleElement => {
//     let titleText = titleElement.innerText;

//     if (titleText.length > maxTitleLength) {
//     titleText = titleText.substring(0, maxTitleLength) + '...';
//     titleElement.innerText = titleText;
//     }
// });

// contentElements.forEach(contentElement => {
//     let contentText = contentElement.innerText;

//     if (contentText.length > maxContentLength) {
//     contentText = contentText.substring(0, maxContentLength) + '...';
//     contentElement.innerText = contentText;
//     }
// });
// });

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
