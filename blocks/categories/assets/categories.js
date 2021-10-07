$(document).ready(function () {
    $('.categories__not-found').on('click', function (e) {
        e.preventDefault();
        let container = $(this).closest('.categories');
        container.find('.categories__modal').trigger('open.modal');
    });
    $('.categories__switcher').on('default-switcher.categories', function () {
        $(this).closest('.categories').removeClass('categorie--diesel');
    });
    $('.categories__switcher').on('change-switcher.categories', function () {
        $(this).closest('.categories').addClass('categorie--diesel');

    });

});