$(document).ready(function(){
    $('.services__item-sign').on('click', function(e){
        e.preventDefault();
        $('.services__modal').trigger('open.modal');
    });
})