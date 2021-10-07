$(document).ready(function () {
    $('.configurator__toggle').on('click', function (e) {
        e.preventDefault();
        if ($(this).closest('.configurator--for-catalog').hasClass('configurator--opened')) {
            $('.configurator').trigger('close.configurator');
        } else {
            $('.configurator').trigger('open.configurator');
        };
    });
    $('.configurator--for-catalog').on('open.configurator', function () {
        $(this).addClass('configurator--opened');
    });
    $('.configurator--for-catalog').on('close.configurator', function () {
        $(this).removeClass('configurator--opened');
    });
});