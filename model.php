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
                'title' => 'Чип-тюнинг',
                'url' => '/brand'
            ],
            [
                'title' => 'Audi'
            ]
        ] ?>
        <?php $title = [
            'text' => 'Чип-тюнинг Audi',
            'modificator' => 'title--md'
        ] ?>
        <?php $categories = [
            'mixin' => 'category__models',
            'title' => 'Выберите модель <span>вашего Audi</span>',
            'description' => '',
            'nav' => true,
            'navFirstUrl' =>  '#',
            'navFirstText' =>  'Все модели',
            'navItems' => [
                'a' => '#',
                'q' => '#',
                'r' => '#',
                'rs' => '#',
                's' => '#',
                'sq' => '#',
                'tt' => '#',
            ],
            'itmes' => [
                [
                    'image' => './blocks/categories/assets/images/car.jpg',
                    'url' => '/model-year',
                    'title' => 'A1',
                    'price' => 'от 20 000 ₽'
                ],
                [
                    'image' => './blocks/categories/assets/images/car2.jpg',
                    'url' => '/model-year',
                    'title' => 'A2',
                    'price' => 'от 20 000 ₽'
                ],
                [
                    'image' => './blocks/categories/assets/images/car3.jpg',
                    'url' => '/model-year',
                    'title' => 'Grand Starex (H-1)',
                    'price' => 'от 20 000 ₽'
                ],
                [
                    'image' => './blocks/categories/assets/images/car4.jpg',
                    'url' => '/model-year',
                    'title' => 'A4',
                    'price' => 'от 20 000 ₽'
                ],
                [
                    'image' => './blocks/categories/assets/images/car.jpg',
                    'url' => '/model-year',
                    'title' => 'A1',
                    'price' => 'от 20 000 ₽'
                ],
                [
                    'image' => './blocks/categories/assets/images/car2.jpg',
                    'url' => '/model-year',
                    'title' => 'A2',
                    'price' => 'от 20 000 ₽'
                ],
                [
                    'image' => './blocks/categories/assets/images/car3.jpg',
                    'url' => '/model-year',
                    'title' => 'Grand Starex (H-1)',
                    'price' => 'от 20 000 ₽'
                ],
                [
                    'image' => './blocks/categories/assets/images/car4.jpg',
                    'url' => '/model-year',
                    'title' => 'Monte Carlo',
                    'price' => 'от 20 000 ₽'
                ],
                [
                    'image' => './blocks/categories/assets/images/car.jpg',
                    'url' => '/model-year',
                    'title' => 'A1',
                    'price' => 'от 20 000 ₽'
                ],
                [
                    'image' => './blocks/categories/assets/images/car2.jpg',
                    'url' => '/model-year',
                    'title' => 'A2',
                    'price' => 'от 20 000 ₽'
                ],
                [
                    'image' => './blocks/categories/assets/images/car3.jpg',
                    'url' => '/model-year',
                    'title' => 'Grand Starex (H-1)',
                    'price' => 'от 20 000 ₽'
                ],
                [
                    'image' => './blocks/categories/assets/images/car4.jpg',
                    'url' => '/model-year',
                    'title' => 'Monte Carlo',
                    'price' => 'от 20 000 ₽'
                ],
                [
                    'image' => './blocks/categories/assets/images/car.jpg',
                    'url' => '/model-year',
                    'title' => 'A1',
                    'price' => 'от 20 000 ₽'
                ],
                [
                    'image' => './blocks/categories/assets/images/car2.jpg',
                    'url' => '/model-year',
                    'title' => 'A2',
                    'price' => 'от 20 000 ₽'
                ],
                [
                    'image' => './blocks/categories/assets/images/car3.jpg',
                    'url' => '/model-year',
                    'title' => 'Grand Starex (H-1)',
                    'price' => 'от 20 000 ₽'
                ],
                [
                    'image' => './blocks/categories/assets/images/car4.jpg',
                    'url' => '/model-year',
                    'title' => 'Monte Carlo',
                    'price' => 'от 20 000 ₽'
                ],
                [
                    'image' => './blocks/categories/assets/images/car-unknow.jpg',
                    'url' => '/model-year',
                    'title' => 'A1',
                    'price' => 'от 20 000 ₽'
                ],
                [
                    'image' => './blocks/categories/assets/images/car-unknow.jpg',
                    'url' => '/model-year',
                    'title' => 'A2',
                    'price' => 'от 20 000 ₽'
                ],
            ],
            'notFoundText' => 'Не нашли своё авто? <br> Сделаем индивидуальный расчёт'
        ] ?>
        <?php include('./blocks/category/category.php') ?>
    </main>
    <?php include('./blocks/footer/footer.php') ?>
    <?php include('./assets/jsFiles.php') ?>
    <script src="./blocks/categories/assets/categories.js" async></script>
    <script src="./blocks/services/assets/services.js" async></script>
    <script src="./blocks/service-modal/assets/service-modal.js" async></script>
</body>

</html>