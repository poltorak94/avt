$(document).ready(function () {

    let lat = $('.contacts__map').attr('data-lat');
    let long = $('.contacts__map').attr('data-long');
    ymaps.ready(function () {
        var myMap = new ymaps.Map('map', {
            center: [lat, long],
            zoom: 17
        }, {
            searchControlProvider: 'yandex#search'
        }),
            myPlacemark = new ymaps.Placemark([lat, long], {
            }, {
                iconLayout: 'default#image',
                iconImageHref: './blocks/contacts/assets/images/point.png',
                iconImageSize: [46, 53],
                iconImageOffset: [-15, -53]
            })
        myMap.geoObjects
            .add(myPlacemark)
    });

    $('.contacts__button').on('click', function (e) {
        e.preventDefault();
        $('.contacts__modal').trigger('open.modal');
    });
});