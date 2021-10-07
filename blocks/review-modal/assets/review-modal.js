$(document).ready(function () {
    $('.review-modal__submit').on('click', function (e) {
        e.preventDefault();
        $(this).closest('.review-modal').addClass('review-modal--success');
        $('body').trigger('close-delay.modal');
    })
})