$(document).ready(function () {
    //скрывать-показывать хедер при скролле
    // var tempScrollTop;
    // var currentScrollTop = 0;
    // var headerHeight = $('.header').height();
    // if ($(window).scrollTop() > 0) {
    //     $('.header').addClass('header--fixed');
    // };

    // if ($(window).width() >= 1080) {
    //     $(window).on('scroll', function () {
    //         currentScrollTop = $(window).scrollTop();
    //         if (tempScrollTop < currentScrollTop) {
    //             $('.header').removeClass('header--fixed');
    //             $('.header').addClass('header--hidden');
    //         } else if (tempScrollTop > currentScrollTop) {
    //             $('.header').addClass('header--fixed');
    //             $('.header').removeClass('header--hidden');
    //         }
    //         if (currentScrollTop == 0) {
    //             $('.header').removeClass('header--fixed');
    //         }
    //         tempScrollTop = currentScrollTop;
    //     });
    // }

    $('.header__burger').on('click', function (e) {
        e.preventDefault();
        if ($('.header').hasClass('header--opened')) {
            $('.header').removeClass('header--opened');
        } else {
            $('.header').addClass('header--opened')
        }
    });
    $('.header__location').on('click', function (e) {
        e.preventDefault();
        $('.header__modal').trigger('open.modal');
    });
    $('body').on('change-city.header', function (e) {
        $('.header__location').text(e.city);
    })

});