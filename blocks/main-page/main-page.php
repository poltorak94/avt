<section class="main-page">
    <?php include('./blocks/hero/hero.php') ?>
    <?php include('./blocks/tuning-steps/tuning-steps.php') ?>
    <?php $services = [
        'mixin' => 'main-page__services',
        'title' => 'Наши <span>услуги</span>',
        'modificator' => 'services--all',
        'items' => [
            [
                'img' => './blocks/services/assets/images/service1.jpg',
                'url' => '/power',
                'title' => 'Замер на мощностном стенде',
                'price' => '2000-7000 ₽'
            ],
            [
                'img' => './blocks/services/assets/images/service2.jpg',
                'url' => '/egr',
                'title' => 'Отключение системы рециркуляции ОГ (EGR)',
                'price' => '2000-7000 ₽'
            ],
            [
                'img' => './blocks/services/assets/images/service3.jpg',
                'url' => '/speed',
                'title' => 'Отключение лимита скорости',
                'price' => '2000-7000 ₽'
            ],
            [
                'img' => './blocks/services/assets/images/service4.jpg',
                'url' => '/scr',
                'title' => 'Отключение мочевины (SCR, AdBlue)',
                'price' => '2000-7000 ₽'
            ],
            [
                'img' => './blocks/services/assets/images/service5.jpg',
                'url' => '/brand',
                'title' => 'Чип-тюнинг авто',
                'price' => '2000-7000 ₽'
            ],
            [
                'img' => './blocks/services/assets/images/service6.jpg',
                'url' => '/dpf',
                'title' => 'Отключение сажевого фильтра (DPF)',
                'price' => '2000-7000 ₽'
            ],
            [
                'img' => './blocks/services/assets/images/service7.jpg',
                'url' => '/acpp',
                'title' => 'Чип-тюнинг АКПП',
                'price' => '2000-7000 ₽'
            ]
        ]
    ] ?>
    <?php include('./blocks/services/services.php') ?>
    <?php include('./blocks/dealers-preview/dealers-preview.php') ?>
    <?php include('./blocks/consultation/consultation.php') ?>
    <div class="main-page__news container">
        <div class="main-page__news-header">
            <div class="main-page__news-title">Новости <span>AVT Performance</span></div>
            <?php $button = [
                'mixin' => 'main-page__all-news',
                'modificator' => 'button--transparent button--small',
                'url' => '/news',
                'text' => 'Все новости'
            ] ?>
            <?php include('./blocks/button/button.php') ?>
        </div>
        <div class="main-page__news-items">
            <?php $mainPageNews = [
                [
                    'mixin' => 'main-page__news-item',
                    'modificator' => 'news-preview--main-page',
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
                    'mixin' => 'main-page__news-item',
                    'modificator' => 'news-preview--main-page',
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
                    'mixin' => 'main-page__news-item',
                    'modificator' => 'news-preview--main-page',
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
                    'mixin' => 'main-page__news-item',
                    'modificator' => 'news-preview--main-page',
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
                    'mixin' => 'main-page__news-item',
                    'modificator' => 'news-preview--main-page',
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
                    'mixin' => 'main-page__news-item',
                    'modificator' => 'news-preview--main-page',
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
            <?php foreach ($mainPageNews as $newsPreview) : ?>
                <?php include('./blocks/news-preview/news-preview.php') ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>