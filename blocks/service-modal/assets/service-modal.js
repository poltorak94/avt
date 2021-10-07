$(document).ready(function () {
    $('.service-modal__form-submit').on('click', function (e) {
        e.preventDefault();
        $(this).closest('.service-modal').addClass('service-modal--success');
        $('body').trigger('close-delay.modal')
    })
})