$(document).ready(function () {
    $('.partners__switcher').on('change-switcher.partners', function () {
        let container = $('.partners');
        container.removeClass('partners--map')
        container.addClass('partners--list')
    })
    $('.partners__switcher').on('default-switcher.partners', function () {
        let container = $('.partners');
        container.removeClass('partners--list')
        container.addClass('partners--map')
    })
    $('.partners__list-items').scrollbar();

    let firstLat = $('.partners__item:first').attr('data-lat');
    let firstLong = $('.partners__item:first').attr('data-long');
    let coordinates = [];

    $('.partners__item').each(function () {
        let lat = $(this).attr('data-lat');
        let long = $(this).attr('data-long');
        coordinates.push([lat, long])
    });

    var myMap;

    ymaps.ready(mapInit);

    function mapInit() {

        myMap = new ymaps.Map("map", {
            center: [firstLat, firstLong],
            zoom: 16
        });


        var i;
        var place;
        for (i = 0; i < coordinates.length; ++i) {
            var myPoint = ymaps.templateLayoutFactory.createClass('<div class="partners__map-point"><span class="partners__map-point-num">' + Number(i + 1) + '</span></div>');
            place = new ymaps.Placemark(coordinates[i], {
            }, {
                iconLayout: myPoint,
            });
            myMap.geoObjects.add(place);
        }
        $('.partners__item-link').on('click', function (e) {
            e.preventDefault();
            let lat = $(this).closest('.partners__item').attr('data-lat');
            let long = $(this).closest('.partners__item').attr('data-long');
            myMap.setCenter([lat, long], 16);
        })

    };



})