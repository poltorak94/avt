$(document).ready(function () {
    $('.modal-consultation__submit').on('click', function (e) {
        e.preventDefault();
        let container = $(this).closest('.modal-consultation');
        container.addClass('modal-consultation--success');
        $('body').trigger('close-delay.modal');
    });
});