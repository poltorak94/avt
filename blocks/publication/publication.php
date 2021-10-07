<section class="publication">
    <?php $breadcrumbs = [
        [
            'title' => 'Главная',
            'url' => '/'
        ],
        [
            'title' => 'Новости',
            'url' => '/news'
        ],
        [
            'title' => 'Stage1 для BMW X6 G06 340hp, прибавка 77лс и 130Нм',
        ]
    ] ?>
    <?php $title = [
        'text' => 'Stage1 для BMW X6 G06 340hp, прибавка 77лс и 130Нм',
        'modificator' => 'title--md'
    ] ?>
    <?php include('./blocks/substrate/substrate.php') ?>
    <?php $configurator = [
        'title' => 'Выберите ваш автомобиль',
        'modificator' => 'configurator--with-title'
    ] ?>
    <?php include('./blocks/configurator/configurator.php') ?>
    <div class="publication__container container">
        <div class="publication__text">
            <div class="publication__date">2 окт. 2020 г.</div>
            <p>
                Впервые в мире, проведен чип-тюнинг нового дизельного мотора с индексом 40d и мощностью 340лс
            </p>
            <p>
                Испытания проходили на новеньком BMW X6 G06
            </p>
            <p>
                Автомобиль получил тюнинг уровня Stage1+ <br>
                Замеры ДО и ПОСЛЕ проведены на нашем новейшем полноприводном стенде Dynostar @dynostar_dynamometrs
            </p>
            <p> Результаты</p>
            <ul>
                <li> Штатные параметры: 340лс / 700Нм </li>
                <li> Фактический замер: 340лс / 727Нм </li>
                <li> Тюнинг AVT Stage2: 417лс / 855Нм </li>
            </ul>
            <p> Данное решение доступно на всей линейки BMW с данным мотором. </p>
            <p> Дополнительно доступны следующие опции:</p>
            <ul>
                <li>Отключение/удаление системы рециркуляции отработаннных газов (EGR, ЕГР)</li>
                <li> Отключение и удаление сажевого филитра (DPF) </li>
            </ul>
            <p>
                Перепрограммирование ЭБУ проходит через диагностический разъём, без съёма и разборки блока
            </p>
            <p>
                Все программное обеспечение разрабатывается нашими нижинерами индивидуально и мы можем внести любые необходимые корректировки в случае необходимости.
            </p>
        </div>
        <?php $swiperSlider = [
            'mixin' => 'publications__slider',
            'items' => [
                [
                    'image' => './blocks/swiper-slider/assets/images/image1.jpg',
                    'fancybox' => 'bmw'
                ],
                [
                    'image' => './blocks/swiper-slider/assets/images/image2.jpg',
                    'fancybox' => 'bmw'
                ],
                [
                    'image' => './blocks/swiper-slider/assets/images/image3.jpg',
                    'fancybox' => 'bmw'
                ],
                [
                    'image' => './blocks/swiper-slider/assets/images/image4.jpg',
                    'fancybox' => 'bmw'
                ],
                [
                    'image' => './blocks/swiper-slider/assets/images/image5.jpg',
                    'fancybox' => 'bmw'
                ]
            ]
        ] ?>
        <?php include('./blocks/swiper-slider/swiper-slider.php') ?>
        <div class="publication__tags">
            <a href="#" class="publication__tag">Stage1</a>
            <a href="#" class="publication__tag">Чип-тюнинг</a>
            <a href="#" class="publication__tag">Замеры на стенде</a>
            <a href="#" class="publication__tag">BMW</a>
            <a href="#" class="publication__tag">G06</a>
            <a href="#" class="publication__tag">40d</a>
            <a href="#" class="publication__tag">dyotested</a>
        </div>
        <div class="publication__recommended-news">
            <div class="publication__recommended-news-title">Похожие новости</div>
            <div class="publication__recommended-news-container">
                    <?php $publicationRecommendedNews = [
                        [
                            'mixin' => 'publication__recommended-news-item',
                            'modificator' => 'news-preview--recommended',
                            'image' => './blocks/news-preview/assets/images/stock.jpg',
                            'date' => '21.10.2019',
                            'title' => 'С Новым годом!',
                            'url' => '/publication',
                            'description' => 'Тюнинг ателье AVT Performance поздравляет с наступающим 2020 годом!',
                            'tags' => [
                                'Скидка 30%' => '#',
                                'SALE' => '#'
                            ]
                        ],
                        [
                            'mixin' => 'publication__recommended-news-item',
                            'modificator' => 'news-preview--recommended',
                            'image' => './blocks/news-preview/assets/images/car.jpg',
                            'date' => '21.10.2019',
                            'title' => 'KIA Optima 2.0T 245hp',
                            'url' => '/publication',
                            'description' => 'Программа чип-тюнинга stage1',
                            'tags' => [
                                'Kia' => '#',
                                'Stage 1' => '#'
                            ]
                        ],
                        [
                            'mixin' => 'publication__recommended-news-item',
                            'modificator' => 'news-preview--recommended',
                            'image' => './blocks/news-preview/assets/images/car.jpg',
                            'date' => '21.10.2019',
                            'title' => 'KIA Optima 2.0T 245hp',
                            'url' => '/publication',
                            'description' => 'Программа чип-тюнинга stage1',
                            'tags' => [
                                'Kia' => '#',
                                'Stage 1' => '#'
                            ]
                        ],
                        [
                            'mixin' => 'publication__recommended-news-item',
                            'modificator' => 'news-preview--recommended',
                            'image' => './blocks/news-preview/assets/images/car.jpg',
                            'date' => '21.10.2019',
                            'title' => 'KIA Optima 2.0T 245hp',
                            'url' => '/publication',
                            'description' => 'Программа чип-тюнинга stage1',
                            'tags' => [
                                'Kia' => '#',
                                'Stage 1' => '#'
                            ]
                        ],
                        [
                            'mixin' => 'publication__recommended-news-item',
                            'modificator' => 'news-preview--recommended',
                            'image' => './blocks/news-preview/assets/images/car.jpg',
                            'date' => '21.10.2019',
                            'title' => 'KIA Optima 2.0T 245hp',
                            'url' => '/publication',
                            'description' => 'Программа чип-тюнинга stage1',
                            'tags' => [
                                'Kia' => '#',
                                'Stage 1' => '#'
                            ]
                        ],
                    ] ?>
                    <?php foreach ($publicationRecommendedNews as $newsPreview) : ?>
                        <?php include('./blocks/news-preview/news-preview.php') ?>
                    <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>