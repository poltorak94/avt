<section class="news">
    <?php $breadcrumbs = [
        [
            'title' => 'Главная',
            'url' => '/'
        ],
        [
            'title' => 'Новости'
        ]
    ] ?>
    <?php $title = [
        'text' => 'Новости AVT Performance',
        'modificator' => 'title--md'
    ] ?>
    <?php include('./blocks/substrate/substrate.php') ?>
    <?php $configurator = [
        'modificator' => 'configurator--with-title',
        'title' => 'Выберите ваш автомобиль'
    ] ?>
    <?php include('./blocks/configurator/configurator.php') ?>
    <div class="news__container container">
        <div class="news__tags">
            <a href="/news" class="news__tag">Все новости</a>
            <a href="/news" class="news__tag">1.5 GDIT</a>
            <a href="/news" class="news__tag">Audi</a>
            <a href="/news" class="news__tag">Bosch</a>
            <a href="/news" class="news__tag">China</a>
            <a href="/news" class="news__tag">Continental</a>
            <a href="/news" class="news__tag">CVN fix</a>
            <a href="/news" class="news__tag">DPF off</a>
            <a href="/news" class="news__tag">Dodge</a>
            <a href="/news" class="news__tag">Lexus</a>
            <a href="/news" class="news__tag">MOD</a>
            <a href="/news" class="news__tag">Все новости</a>
            <a href="/news" class="news__tag">1.5 GDIT</a>
            <a href="/news" class="news__tag">Audi</a>
            <a href="/news" class="news__tag">Bosch</a>
            <a href="/news" class="news__tag">China</a>
            <a href="/news" class="news__tag">Continental</a>
            <a href="/news" class="news__tag">CVN fix</a>
            <a href="/news" class="news__tag">DPF off</a>
            <a href="/news" class="news__tag">Dodge</a>
            <a href="/news" class="news__tag">Lexus</a>
            <a href="/news" class="news__tag">MOD</a>
            <a href="/news" class="news__tag">Все новости</a>
            <a href="/news" class="news__tag">1.5 GDIT</a>
            <a href="/news" class="news__tag">Audi</a>
            <a href="/news" class="news__tag">Bosch</a>
            <a href="/news" class="news__tag">China</a>
            <a href="/news" class="news__tag">Continental</a>
            <a href="/news" class="news__tag">CVN fix</a>
            <a href="/news" class="news__tag">DPF off</a>
            <a href="/news" class="news__tag">Dodge</a>
            <a href="/news" class="news__tag">Lexus</a>
            <a href="/news" class="news__tag">MOD</a>
        </div>
        <div class="news__items">
            <?php $newsPreviews = [
                [
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
            <?php foreach ($newsPreviews as $newsPreview) : ?>
                <?php include('./blocks/news-preview/news-preview.php') ?>
            <?php endforeach; ?>
        </div>
        <?php include('./blocks/pagination/pagination.php') ?>
    </div>
</section>