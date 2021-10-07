$(document).ready(function () {
    $('.switcher__button-container').on('click', function () {
        let container = $(this).closest('.switcher');
        if (container.hasClass('switcher--change')) {
            container.removeClass('switcher--change');
            container.trigger('default-switcher.partners');
            container.trigger('default-switcher.categories');
        } else {
            container.addClass('switcher--change');
            container.trigger('change-switcher.partners');
            container.trigger('change-switcher.categories');
        }
    });
})