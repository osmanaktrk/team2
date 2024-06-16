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




