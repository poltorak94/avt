$(document).ready(function(){
    $('.hero__info').on('click', function(e){
        e.preventDefault();
        $('.hero__modal').trigger('open.modal');
    })
})