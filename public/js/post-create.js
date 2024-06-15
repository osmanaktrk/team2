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



let commentCover = document.querySelector('.comment-cover');
let commentInput = document.querySelector('#comment-cover');
let comment_src = commentCover.src;

commentInput.addEventListener('change', ()=>{
    let file = commentInput.files[0];

    if(file){
        let fileReader = new FileReader();

        fileReader.onload = ()=>{
            commentCover.src = fileReader.result;
        }
        fileReader.readAsDataURL(file);

    }else{
        commentCover.src = comment_src;
    }


});




