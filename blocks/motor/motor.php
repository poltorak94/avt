<section class="motor">
    <?php $breadcrumbs = [
        [
            'title' => 'Главная',
            'url' => '/'
        ],
        [
            'title' => 'Чип-тюнинг',
            'url' => '/brand'
        ],
        [
            'title' => 'Audi',
            'url' => '/model'
        ],
        [
            'title' => 'A4',
            'url' => '/model-year'
        ],
        [
            'title' => 'B6 2001-2004'
        ]
    ] ?>
    <?php $title = [
        'text' => 'Чип-тюнинг Audi A4 B6 2001-2004',
        'modificator' => 'title--md'
    ] ?>
    <?php include('./blocks/substrate/substrate.php') ?>
    <?php $configurator = [
        'modificator' => 'configurator--with-title',
        'title' => 'Выберите ваш автомобиль'
    ] ?>
    <?php include('./blocks/configurator/configurator.php') ?>
    <?php $advantages = [
        'modificator' => 'advantages--chip'
    ] ?>
    <?php include('./blocks/advantages/advantages.php') ?>
    <?php $categories = [
        'mixin' => 'motor__categories',
        'modificator' => 'categories--motor',
        'title' => 'Выберите модификацию двигателя <span> вашего Audi A4 B6 2001-2004</span>',
        'switcher' => true,
        'switcherTitle1' => 'Бензиновый двигатель',
        'switcherTitle2' => 'Дизельный двигатель',
        'itmes' => [
            [
                'motor' => true,
                'image' => '',
                'url' => '/chip',
                'title' => '1.8 T 150 л.с.',
                'price' => 'от 20 000 ₽',
                'attr' => 'data-id="petrol"'
            ],
            [
                'motor' => true,
                'image' => '',
                'url' => '/chip',
                'title' => '1.8 T 163 л.с.',
                'price' => 'от 20 000 ₽',
                'attr' => 'data-id="petrol"'
            ],
            [
                'motor' => true,
                'image' => '',
                'url' => '/chip',
                'title' => '1.8 T 190 л.с.',
                'price' => 'от 20 000 ₽',
                'attr' => 'data-id="petrol"'
            ],
            [
                'motor' => true,
                'image' => '',
                'url' => '/chip',
                'title' => 'S4 4.2 V8 344 л.с.',
                'price' => 'от 20 000 ₽',
                'attr' => 'data-id="petrol"'
            ],
            [
                'motor' => true,
                'image' => '',
                'url' => '/chip',
                'title' => '1.8 D 150 л.с.',
                'price' => 'от 20 000 ₽',
                'attr' => 'data-id="diesel"'
            ],
            [
                'motor' => true,
                'image' => '',
                'url' => '/chip',
                'title' => '1.8 D 163 л.с.',
                'price' => 'от 20 000 ₽',
                'attr' => 'data-id="diesel"'
            ],
            [
                'motor' => true,
                'image' => '',
                'url' => '/chip',
                'title' => '2.2 D 220 л.с.',
                'price' => 'от 20 000 ₽',
                'attr' => 'data-id="diesel"'
            ],
            [
                'motor' => true,
                'image' => '',
                'url' => '/chip',
                'title' => 'S4 4.2 V8 344 л.с.',
                'price' => 'от 20 000 ₽',
                'attr' => 'data-id="diesel"'
            ]
        ],
        'notFoundText' => 'Не нашли своё авто? <br> Сделаем индивидуальный расчёт'

    ] ?>
    <?php include('./blocks/categories/categories.php') ?>
    <?php $consultation = [
        'mixin' => 'motor__consultation'
    ] ?>
    <?php include('./blocks/consultation/consultation.php') ?>
    <?php $categories = [
        'mixin' => 'motor__categories',
        'title' => 'Другие года выпуска <span>вашего Audi A4</span>',
        'description' => '',
        'itmes' => [
            [
                'image' => './blocks/categories/assets/images/car4.jpg',
                'url' => '/motor',
                'title' => 'B6 2001-2004',
                'price' => 'от 20 000 ₽'
            ],
            [
                'image' => './blocks/categories/assets/images/car4.jpg',
                'url' => '/motor',
                'title' => 'B7 2004-2008',
                'price' => 'от 20 000 ₽'
            ],
            [
                'image' => './blocks/categories/assets/images/car4.jpg',
                'url' => '/motor',
                'title' => 'B8 2008-2011 ',
                'price' => 'от 20 000 ₽'
            ],
            [
                'image' => './blocks/categories/assets/images/car4.jpg',
                'url' => '/motor',
                'title' => 'B8 2012-20015',
                'price' => 'от 20 000 ₽'
            ],
            [
                'image' => './blocks/categories/assets/images/car4.jpg',
                'url' => '/motor',
                'title' => 'B9 2015-',
                'price' => 'от 20 000 ₽'
            ],
        ],
        'notFoundText' => 'Не нашли своё авто? <br> Сделаем индивидуальный расчёт'
    ] ?>
    <?php include('./blocks/categories/categories.php') ?>
    <?php $services = [
        'mixin' => 'motor__more-services',
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
        'mixin' => 'motor__seo',
        'seoTitle' => 'Вся правда о <span>чип-тюнинге (SEO)</span>',
        'seoText' => '<p>Назначение чип-тюнинга заключается в оптимизации калибровок в программе электронного блока управления (ЭБУ), контролирующего работу двигателя.</p><p>Иными словами, чип-тюнинг позволяет изменять целый ряд параметров работы двигателя, таких как состав топливно-воздушной смеси, угол опережения зажигания, фаза окончания впрыска, давление наддува, обороты отключения топливоподачи или ограничение скорости, различные лимиты мощности и крутящего момента, без вмешательства в аппаратную часть мотора.</p><p>Также чип-тюнинг позволяет отключать часть вспомогательных систем, работа которых направлена на сооблюдение экологических стандартов и лишь ухудшает характеристики работы двигателя.</p>'
    ] ?>
    <?php include('./blocks/seo/seo.php') ?>
</section>