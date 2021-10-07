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
                'title' => 'Замер мощности авто',
            ]
        ] ?>
        <?php $service = [
            'modificator' => 'service--power',
            'title' => 'Замер мощности авто',
            'price' => 'от 2000₽',
            'description' => 'Производим замеры мощности автомобиля на современном, высококлассном, полноприводном стенде Dynostar W4X.',
            'reasonsTitle' => '3 причины сделать <span>замер мощности авто</span>',
            'reasonsDescription' => '<p><b>Сделали чип-тюнинг, но не знаете сколько мощности добавилось?</b></p><p><b>Вам кажется, что ваш автомобиль "не едет" на заявленную мощность?</b></p>',
            'reasons' => ['1' => 'Проверка результата чип-тюнинга', '2' => 'Возможность индивидуальной настройки автомобиля', '3' => 'Диагностика вашего автомобиля'],
            'reasonsAddInfo' => 'Замеры на мощностном стенде помогут проверить качество чип-тюнинга и показать реальную прибавку. Также замеры полезно проводить и для стоковых автомобилей, в этом случае можно проверить исправность двигателя, а в случае несоответствия мощности с паспортными данными будет понятно что в автомобиле имеются отклонения в системе управления мотором, в результате чего можно предотвратить возможные поломки в будущем.',
        ] ?>
        <?php $services = [
            'mixin' => 'service__more-services',
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