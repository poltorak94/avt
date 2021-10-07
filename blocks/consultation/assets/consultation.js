$(document).ready(function () {
    $('.consultation__submit').on('click', function (e) {
        e.preventDefault();
        $('.consultation__modal').trigger('open.modal');
        $('body').trigger('close-delay.modal');
    });
})