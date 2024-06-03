let postEditBtn = document.querySelectorAll(".post-edit-btn");
let postEdit = document.querySelectorAll(".post-edit");
let postEditCancel = document.querySelectorAll(".post-edit-cancel-btn");



postEditBtn.forEach((btn) => {
    btn.addEventListener("click", (e) => {
        let edit = e.currentTarget.parentNode.nextSibling.nextSibling;
        if (edit.style.display == "none") {
            edit.style.display = "block";
        } else {
            edit.style.display = "none";
        }
    });
});

postEditCancel.forEach((cancel) => {
    cancel.addEventListener("click", () => {
        cancel.parentNode.parentNode.style.display = 'none';
        
    });
});
