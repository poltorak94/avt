$(document).ready(function () {
    $('.services-calc__button').on('click', function (e) {
        e.preventDefault();
        $('.services-calc__modal').trigger('open.modal');
    });
});