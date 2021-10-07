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
                'title' => 'Отключение мочевины (SCR, AdBlue)',
            ]
        ] ?>
        <?php $service = [
            'modificator' => 'service--scr',
            'title' => 'Отключение мочевины (SCR, AdBlue)',
            'price' => 'от 8000₽ ',
            'description' => 'Специлисты тюнинг ателье AVT Performance отключат мочевину быстро, качественно и с гарантией',
            'reasonsTitle' => 'Зачем <span>отключать систему SCR (AdBlue)?</span>',
            'reasonsDescription' => '<p>Нет необходимости заливать дорогую топливную присадку - мочевину (AdBlue).</p><p>- Низкая стоимость отключения. Ремот системы SCR может выйти в разы, а то и в десятки раз дороже чем отключение. </p><p> - Надежность, после отключения системы SCR владелец автомобиля раз и навсегда забудет об этой сложной и дорогой системе. Чего нельзя сказать о ремонте, так как после ремонта, как правило, надежность системы наоборот значительно снижается и может подвести в самый не подходящий момент.</p><p>- Быстрота. В отличии от сложного и долгого ремонта, отключение системы происходит в течении 1-3 часов.</p>',
            'reasons' => ['1' => 'Дорогой и сложный ремонт', '2' => 'Низкая надежность после ремонта', '3' => 'Дорогостоящая присадка'],
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