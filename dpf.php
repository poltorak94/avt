<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <title>AVT - performance</title>
    <?php include('./assets/cssFiles.php') ?>
    <link rel="stylesheet" href="../assets/style.css">
</head>

<body>
    <?php include('./blocks/header/header.php') ?>
    <main>
        <?php $breadcrumbs = [
            [
                'title' => 'Главная',
                'url' => '/'
            ],
            [
                'title' => 'Отключение сажевого фильтра DPF',
            ]
        ] ?>
        <?php $service = [
            'modificator' => 'service--dpf',
            'title' => 'Отключение сажевого фильтра DPF',
            'price' => 'от 2000₽',
            'description' => 'Специлисты тюнинг ателье AVT Performance отключат сажевый фильтр быстро, качественно и с гарантией',
            'reasonsTitle' => 'Когда вам потребуется <span>удаление сажевого фильтра?</span>',
            'reasonsDescription' => '<p>Несмотря на довольно практичную способность сажевого фильтра к самоочищению, нельзя полностью исключить возможность засорения этого элемента. Фильтрующий элемент может забиться под воздействием следующих факторов:</p>',
            'reasons' => ['1' => 'Большой пробег автомобиля', '2' => 'Низкое качество горюче-смазочных материалов', '3' => 'Неполадки и сбои в системе управления двигателем'],
            'reasonsAddInfo' => '',
        ] ?>
        <?php $services = [
            'mixin' => 'service__more-services',
            'title' => 'Сопутствующие <span>услуги</span>',
            'items' => [
                [
                    'img' => './blocks/services/assets/images/service1.jpg',
                    'url' => '/power',
                    'title' => 'Замер на мощностном стенде',
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
                    'img' => './blocks/services/assets/images/service5.jpg',
                    'url' => '/brand',
                    'title' => 'Чип-тюнинг авто',
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
        <?php $seo = [
            'seoTitle' => 'Вся правда о <span>замере мощности (SEO)</span>',
            'seoText' => '<p>Назначение чип-тюнинга заключается в оптимизации калибровок в программе электронного блока управления (ЭБУ), контролирующего работу двигателя.</p><p>Иными словами, чип-тюнинг позволяет изменять целый ряд параметров работы двигателя, таких как состав топливно-воздушной смеси, угол опережения зажигания, фаза окончания впрыска, давление наддува, обороты отключения топливоподачи или ограничение скорости, различные лимиты мощности и крутящего момента, без вмешательства в аппаратную часть мотора.</p><p>Также чип-тюнинг позволяет отключать часть вспомогательных систем, работа которых направлена на сооблюдение экологических стандартов и лишь ухудшает характеристики работы двигателя.</p>'
        ] ?>
        <?php include('./blocks/service/service.php') ?>
    </main>
    <?php include('./blocks/footer/footer.php') ?>
    <?php include('./assets/jsFiles.php') ?>
    <script src="./blocks/speed/assets/speed.js" async></script>
    <script src="./blocks/services/assets/services.js" async></script>
    <script src="./blocks/service-modal/assets/service-modal.js" async></script>
</body>

</html>