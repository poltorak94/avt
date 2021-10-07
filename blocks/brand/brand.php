<section class="brand">
    <div class="brand__hero">
        <div class="brand__hero-container container">
            <?php $breadcrumbs = [
                [
                    'title' => 'Главная',
                    'url' => '/'
                ],
                [
                    'title' => 'Чип-тюнинг авто',
                ]
            ] ?>
            <?php include('./blocks/breadcrumbs/breadcrumbs.php') ?>
            <?php $title = [
                'mixin' => 'brand__hero-title',
                'text' => 'Чип-тюнинг авто'
            ] ?>
            <?php include('./blocks/title/title.php') ?>
            <div class="brand__hero-price">от 9000₽</div>
            <div class="brand__hero-description">
                Выберите подходящий вариант прошивки <br>
                с помощью конфигуратора
            </div>
            <div class="brand__hero-advantages">
                <div class="brand__hero-advantage">
                    <span class="brand__hero-advantage-title">+20%</span>
                    <span class="brand__hero-advantage-description">к мощности <br> двигателя</span>
                </div>
                <div class="brand__hero-advantage">
                    <span class="brand__hero-advantage-title">+25%</span>
                    <span class="brand__hero-advantage-description">к крутящему <br> моменту</span>
                </div>
            </div>
            <?php include('./blocks/configurator/configurator.php') ?>
            <?php include('./blocks/speed/speed.php') ?>
        </div>
        <?php include('./blocks/advantages/advantages.php') ?>
    </div>
    <?php $categories = [
        'mixin' => 'brand__categories',
        'modificator' => 'categories--brands',
        'title' => 'Выберите марку <span>вашего авто</span>',
        'description' => 'Мы не обещаем невозможное, но гарантируем максимальную эффективность предложенного нами решения!',
        'nav' => true,
        'navFirstUrl' =>  '#',
        'navFirstText' =>  'Все марки',
        'navItems' => [
            'a' => '#',
            'b' => '#',
            'c' => '#',
            'd' => '#',
            'f' => '#',
            'g' => '#',
            'h' => '#',
            'i' => '#',
            'j' => '#',
            'k' => '#',
            'l' => '#',
            'm' => '#',
            'n' => '#',
            'o' => '#',
            'p' => '#',
            'r' => '#',
            's' => '#',
            't' => '#',
            'v' => '#',
            'w' => '#',
            'z' => '#',
        ],
        'itmes' => [
            [
                'image' => './blocks/categories/assets/images/acura.jpg',
                'url' => '/model',
                'title' => 'Acura',
            ],
            [
                'image' => './blocks/categories/assets/images/alpha.jpg',
                'url' => '/model',
                'title' => 'Alfa Romeo'
            ],
            [
                'image' => './blocks/categories/assets/images/aston.jpg',
                'url' => '/model',
                'title' => 'Aston Martin'
            ],
            [
                'image' => './blocks/categories/assets/images/audi.jpg',
                'url' => '/model',
                'title' => 'Audi'
            ],
            [
                'image' => './blocks/categories/assets/images/bentley.jpg',
                'url' => '/model',
                'title' => 'Bentley'
            ],
            [
                'image' => './blocks/categories/assets/images/bmw.jpg',
                'url' => '/model',
                'title' => 'BMW'
            ],
            [
                'image' => './blocks/categories/assets/images/brabus.jpg',
                'url' => '/model',
                'title' => 'Brabus'
            ],
            [
                'image' => './blocks/categories/assets/images/bugati.jpg',
                'url' => '/model',
                'title' => 'Bugatti'
            ],
            [
                'image' => './blocks/categories/assets/images/cadilac.jpg',
                'url' => '/model',
                'title' => 'Cadillac'
            ],
            [
                'image' => './blocks/categories/assets/images/changan.jpg',
                'url' => '/model',
                'title' => 'Changan'
            ],
            [
                'image' => './blocks/categories/assets/images/chery.jpg',
                'url' => '/model',
                'title' => 'Chery'
            ],
            [
                'image' => './blocks/categories/assets/images/chevrolet.jpg',
                'url' => '/model',
                'title' => 'Chevrolet'
            ]
        ],
        'notFoundText' => 'Не нашли своё авто? <br> Сделаем индивидуальный расчёт'
    ] ?>
    <?php include('./blocks/categories/categories.php') ?>
    <?php $consultation = [
        'mixin' => 'brand__consultation'
    ] ?>
    <?php include('./blocks/consultation/consultation.php') ?>
    <?php $services = [
        'mixin' => 'brand__more-services',
        'title' => 'Сопутствующие <span>услуги</span>',
        'items' => [
            [
                'img' => './blocks/services/assets/images/service6.jpg',
                'url' => '/dpf',
                'title' => 'Отключение сажевого фильтра (DPF)',
                'price' => '2000-7000 ₽'
            ],
            [
                'img' => './blocks/services/assets/images/service4.jpg',
                'url' => '/scr',
                'title' => 'Отключение мочевины (SCR, AdBlue)',
                'price' => '2000-7000 ₽'
            ],
            [
                'img' => './blocks/services/assets/images/service7.jpg',
                'url' => '/acpp',
                'title' => 'Чип-тюнинг АКПП',
                'price' => '2000-7000 ₽'
            ],
            [
                'img' => './blocks/services/assets/images/service3.jpg',
                'url' => '/speed',
                'title' => 'Отключение лимита скорости',
                'price' => '2000-7000 ₽'
            ],
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
        ]
    ] ?>
    <?php include('./blocks/services/services.php') ?>
    <?php $seo = [
        'mixin' => 'brand__seo',
        'seoTitle' => 'Вся правда о <span>чип-тюнинге (SEO)</span>',
        'seoText' => '<p>Назначение чип-тюнинга заключается в оптимизации калибровок в программе электронного блока управления (ЭБУ), контролирующего работу двигателя.</p><p>Иными словами, чип-тюнинг позволяет изменять целый ряд параметров работы двигателя, таких как состав топливно-воздушной смеси, угол опережения зажигания, фаза окончания впрыска, давление наддува, обороты отключения топливоподачи или ограничение скорости, различные лимиты мощности и крутящего момента, без вмешательства в аппаратную часть мотора.</p><p>Также чип-тюнинг позволяет отключать часть вспомогательных систем, работа которых направлена на сооблюдение экологических стандартов и лишь ухудшает характеристики работы двигателя.</p>'
    ] ?>
    <?php include('./blocks/seo/seo.php') ?>
</section>