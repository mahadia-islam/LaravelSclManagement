$(document).ready(function(){
    let counter = 0;
    $(document).on('click', '.addEventMore', function () {
        let whole_extra_item = $('#whole_extra_item_add').html();
        $(this).closest('.add_item').append(whole_extra_item);
        counter++;
    });
    $(document).on('click', '.removeEvent', function () {
        $(this).closest('#delete_whole_extra_item_add').remove();
        counter -= 1;
    })
})

let randomNumber = Math.random();

let newArray = String(randomNumber).split('.');

const random_code = document.querySelector('.random_code');
const id_no = document.querySelector('.id_no');

random_code.value = newArray[1].slice(0,4);
id_no.value = newArray[1];
