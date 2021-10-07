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
                'title' => 'Страница не найдена',
            ]
        ] ?>
        <?php $title = [
            'text' => 'Страница не найдена',
            'modificator' => 'title--md'
        ] ?>
        <?php $errorPage = [
            'description' => 'Неправильно набран адрес страницы или такая страница больше не существует.'
        ] ?>
        <?php include('./blocks/error-page/error-page.php') ?>
    </main>
    <?php include('./blocks/footer/footer.php') ?>
    <?php include('./assets/jsFiles.php') ?>
</body>

</html>