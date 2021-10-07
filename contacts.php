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
        <?php include('./blocks/contacts/contacts.php') ?>
    </main>
    <?php include('./blocks/footer/footer.php') ?>
    <?php include('./assets/jsFiles.php') ?>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=17f1e596-0d46-4bcb-ac50-c26d139c07ca&lang=ru_RU" type="text/javascript">
    </script>
    <script src="./blocks/contacts/assets/contacts.js"></script>
    <script src="./blocks/modal-consultation/assets/modal-consultation.js"></script>
</body>

</html>