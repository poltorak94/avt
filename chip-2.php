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
        <?php $chip = [
            'stage1Link' => '/chip',
            'stage1LinkModificator' => '',
            'stage2Link' => '/chip-2',
            'stage2LinkModificator' => 'chip__chart-nav--active',
            'xValues' => '["0","500","1000","1500","2000","2500","3000","3500","4000","4500"]',
            'defaultPower' => '["0", "20", "50", "60", "70", "100", "110", "120", "150", "160"]',
            'defaultPowerLabel' => 'Заводская мощность (л.с.)',
            'addPower' => '["0", "40", "60", "80", "110", "130", "155", "160", "170", "200"]',
            'addPowerLabel' => 'Stage 1 мощность (л.с.)',
            'defaultTorque' => '["0", "100", "150", "200", "300", "350", "400", "500", "800", "900"]',
            'defaultTorqueLabel' => 'Заводской крутящий момент (Нм)',
            'addTorque' => '["0", "150", "250", "300", "400", "500", "550", "650", "1000", "1400"]',
            'addTorqueLabel' => 'Stage 1 крутящий момент (Нм)',
            'xLabel' => 'Об/мин',
            'yLabel' => 'Мощность (л.с.)',
            'y1Label' => 'Крутящий момент'

        ] ?>
        <?php include('./blocks/chip/chip.php') ?>
    </main>
    <?php include('./blocks/footer/footer.php') ?>
    <?php include('./assets/jsFiles.php') ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
    <script src="./blocks/chip/assets/chip.js" async></script>
    <script src="./blocks/services-calc/assets/services-calc.js" async></script>
    <script src="./blocks/service-modal/assets/service-modal.js" async></script>
    <script src="./blocks/categories/assets/categories.js" async></script>
    <script src="./blocks/switcher/assets/switcher.js" async></script>
</body>

</html>