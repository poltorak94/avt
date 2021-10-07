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
                'title' => 'Чип-тюнинг АКПП',
            ]
        ] ?>
        <?php $service = [
            'modificator' => 'service--acpp',
            'title' => 'Чип-тюнинг АКПП',
            'price' => 'от 8000₽ ',
            'description' => 'Потенциал современных автомобилей ограничен заводом изготовителем при помощи различных лимитеров',
            'reasonsTitle' => '3 причины сделать <span>чип-тюнинг АКПП</span>',
            'reasonsDescription' => '<p><b>Чип-тюнинг AKПП — нoвыe вoзмoжнocти штaтнoй кopoбки</b></p><p>Сокращение реакции при переключении передач, настройка включения передач, снятие ограничений и лимитеров крутящего момента, а также активация Launch control</p>',
            'reasons' => ['1' => 'Снятие ограничения крутящего момента', '2' => 'Настройка включения передач', '3' => 'Активация Launch control (контроль старта)'],
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