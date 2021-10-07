$(document).ready(function () {
    $('.city-select__item').on('click', function (e) {
        e.preventDefault();
        let city = $(this).text();
        $('body').trigger('close.modal');
        $('body').trigger({
            type: 'change-city',
            namespace: 'header',
            city: city
        })
    })
});
