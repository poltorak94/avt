<section class="category">
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
    <?php include('./blocks/categories/categories.php') ?>
    <?php $consultation = [
        'mixin' => 'category__consultation'
    ] ?>
    <?php include('./blocks/consultation/consultation.php') ?>
    <?php $services = [
        'mixin' => 'category__more-services',
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
        'mixin' => 'category__seo',
        'seoTitle' => 'Вся правда о <span>чип-тюнинге (SEO)</span>',
        'seoText' => '<p>Назначение чип-тюнинга заключается в оптимизации калибровок в программе электронного блока управления (ЭБУ), контролирующего работу двигателя.</p><p>Иными словами, чип-тюнинг позволяет изменять целый ряд параметров работы двигателя, таких как состав топливно-воздушной смеси, угол опережения зажигания, фаза окончания впрыска, давление наддува, обороты отключения топливоподачи или ограничение скорости, различные лимиты мощности и крутящего момента, без вмешательства в аппаратную часть мотора.</p><p>Также чип-тюнинг позволяет отключать часть вспомогательных систем, работа которых направлена на сооблюдение экологических стандартов и лишь ухудшает характеристики работы двигателя.</p>'
    ] ?>
    <?php include('./blocks/seo/seo.php') ?>
</section>