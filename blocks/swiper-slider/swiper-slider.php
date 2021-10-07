<div class="swiper-slider <?= $swiperSlider['mixin'] ?>">
    <div class="swiper-container">
        <div class=" swiper-wrapper">
            <?php foreach ($swiperSlider['items'] as $swiperSliderItem) : ?>
                <div class="swiper-slide">
                    <a href="<?= $swiperSliderItem['image'] ?>" data-fancybox="<?= $swiperSliderItem['fancybox'] ?>" class="swiper-slider__image-holder">
                        <div class="swiper-slide__background">
                            <picture class="swiper-slide__background-picture">
                                <source srcset="./blocks/swiper-slider/assets/images/zoom.png.webp" type="image/webp">
                                <source srcset="./blocks/swiper-slider/assets/images/zoom.png">
                                <img class="swiper-slide__zoom-icon" src="./blocks/swiper-slider/assets/images/zoom.png" alt="" loading="lazy">
                            </picture>
                        </div>
                        <picture class="swiper-slide__background-picture">
                            <source srcset="<?= $swiperSliderItem['image'] ?>.webp" type="image/webp">
                            <source srcset="<?= $swiperSliderItem['image'] ?>">
                            <img class="swiper-slider__image" src="<?= $swiperSliderItem['image'] ?>" alt="" loading="lazy">
                        </picture>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="swiper-slider__buttons">
        <a href="#" class="swiper-slider__button swiper-slider__button--prev">
            <svg class="swiper-slider__button-icon" width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8 1L2 7L8 13" stroke="#1A1A1A" stroke-width="1.5" />
            </svg>
        </a>
        <a href="#" class="swiper-slider__button swiper-slider__button--next">
            <svg class="swiper-slider__button-icon" width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1L7 7L1 13" stroke="#1A1A1A" stroke-width="1.5" />
            </svg>
        </a>
    </div>
    <div class="swiper-slider__pagination"></div>
</div>