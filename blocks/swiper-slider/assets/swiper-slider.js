document.addEventListener("DOMContentLoaded", function () {
    $('.swiper-container').each(function () {
        let sliderContainer = $(this).closest('.swiper-slider');
        let next = sliderContainer.find('.swiper-slider__button--next')[0];
        let prev = sliderContainer.find('.swiper-slider__button--prev')[0];
        let pag = sliderContainer.find('.swiper-slider__pagination')[0];
        let slider = new Swiper($(this)[0], {
            loop: false,
            spaceBetween: 20,
            slidesPerView: 4,
            navigation: {
                nextEl: next,
                prevEl: prev,
            },
            breakpoints: {
                375: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                990: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
                1200: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                }
            }
        });
    });

});
