let newCommentCover = document.querySelector(".new-comment-cover");
let newCommentInput = document.querySelector("#new-comment-cover");
let new_comment_src = newCommentCover.src;


newCommentInput.addEventListener("change", () => {
    let file = newCommentInput.files[0];

    if (file) {
        let fileReader = new FileReader();

        fileReader.onload = () => {
            newCommentCover.src = fileReader.result;
        };
        fileReader.readAsDataURL(file);
    } else {

        newCommentCover.src = new_comment_src;
    }
});

let post_edit_btns = document.querySelectorAll(".edit-comment");






post_edit_btns.forEach((editBtn) => {
    editBtn.addEventListener("click", () => {
        let cover =
            editBtn.parentNode.parentNode.parentNode.lastElementChild
                .firstElementChild.firstElementChild.firstElementChild
                .nextElementSibling.nextElementSibling.nextElementSibling
                .nextElementSibling.firstElementChild.firstElementChild;
        let input =
            editBtn.parentNode.parentNode.parentNode.lastElementChild
                .firstElementChild.firstElementChild.firstElementChild
                .nextElementSibling.nextElementSibling.nextElementSibling
                .nextElementSibling.firstElementChild.nextElementSibling
                .firstElementChild;
                
        let img_src = cover.src;

        input.addEventListener("change", () => {
            let file = input.files[0];
            if (file) {
                let fileReader = new FileReader();

                fileReader.onload = () => {
                    cover.src = fileReader.result;
                };

                fileReader.readAsDataURL(file);
            } else {
                cover.src = img_src;
            }
        });

     
    });
});






post_edit_btns.forEach((editBtn) => {
    editBtn.addEventListener("click", () => {
        let deleteBtn = editBtn.parentNode.parentNode.parentNode.lastElementChild
        .firstElementChild.firstElementChild.lastElementChild
        .previousElementSibling.firstElementChild.lastElementChild.firstElementChild.firstElementChild;

        let updateBtn = editBtn.parentNode.parentNode.parentNode.lastElementChild
        .firstElementChild.firstElementChild.lastElementChild
        .previousElementSibling.firstElementChild.firstElementChild.firstElementChild;

        let file_name = editBtn.parentNode.parentNode.parentNode.lastElementChild
        .firstElementChild.firstElementChild.lastElementChild
        .previousElementSibling.firstElementChild.nextElementSibling.firstElementChild.firstElementChild.firstElementChild;

        let file = editBtn.parentNode.parentNode.parentNode.lastElementChild
        .firstElementChild.firstElementChild.lastElementChild
        .previousElementSibling.firstElementChild.nextElementSibling.firstElementChild.lastElementChild;


        deleteBtn.addEventListener('change', ()=>{
            console.log(deleteBtn.checked);

            if(deleteBtn.checked){
                file_name.value = null;
                file.value = null;

            }
        });



        updateBtn.addEventListener('click', ()=>{
            deleteBtn.checked = false;
        });


        file_name.addEventListener('input', ()=>{
            deleteBtn.checked = false;
        });


        file.addEventListener('input', ()=>{
            deleteBtn.checked = false;
        });

        
    });
});
