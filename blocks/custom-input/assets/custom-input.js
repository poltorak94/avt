$(document).ready(function () {
    $('.custom-input--tel input').mask('+7 (999) 999-99-99');
    $('.custom-input--user .custom-input__field').on('focus', function () {
        let container = $(this).closest('.custom-input');
        container.addClass('custom-input--focused');
    });
    $('.custom-input--smartphone .custom-input__field').on('focus', function () {
        let container = $(this).closest('.custom-input');
        container.addClass('custom-input--focused');
    });
    $('.custom-input--user .custom-input__field').on('focusout', function () {
        let container = $(this).closest('.custom-input');
        container.removeClass('custom-input--focused');
    });
    $('.custom-input--smartphone .custom-input__field').on('focusout', function () {
        let container = $(this).closest('.custom-input');
        container.removeClass('custom-input--focused');
    });
});