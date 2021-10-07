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
                'title' => 'Audi',
                'url' => '/model'
            ],
            [
                'title' => 'A4',
            ]
        ] ?>
        <?php $title = [
            'text' => 'Чип-тюнинг Audi A4',
            'modificator' => 'title--md'
        ] ?>
        <?php $categories = [
            'mixin' => 'category__models',
            'title' => 'Выберите год выпуска <span>вашего Audi A4</span>',
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
        <?php include('./blocks/category/category.php') ?>
    </main>
    <?php include('./blocks/footer/footer.php') ?>
    <?php include('./assets/jsFiles.php') ?>
    <script src="./blocks/categories/assets/categories.js" async></script>
    <script src="./blocks/services/assets/services.js" async></script>
    <script src="./blocks/service-modal/assets/service-modal.js" async></script>
</body>

</html>