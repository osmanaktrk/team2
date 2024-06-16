let cover = document.querySelector('.post-cover');
let input = document.querySelector('#post-cover');
let img_src = cover.src;


input.addEventListener('change', ()=>{
    let file = input.files[0];

    

    if(file){
        let fileReader = new FileReader();

        fileReader.onload = ()=>{
            cover.src = fileReader.result;
        }

        fileReader.readAsDataURL(file);

    }else{
        cover.src = img_src;
    }
    

});





let deleteBtn = document.querySelector("#delete");
let update_name = document.querySelector(".update-name");
let update_file = document.querySelector(".update-file");
let update = document.querySelector('.update');

deleteBtn.addEventListener("change", () => {
    console.log(deleteBtn.checked);

    if (deleteBtn.checked) {
        update_name.value = null;
        update_file.value = null;
    }
});

update.addEventListener("click", ()=>{
    deleteBtn.checked = false;
});


update_name.addEventListener('input', ()=>{
    deleteBtn.checked = false;
});

update_file.addEventListener('change', ()=>{
    deleteBtn.checked = false;
});


