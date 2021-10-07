<div class="configurator <?= $configurator['modificator'] ?>">
    <div class="configurator__form">
        <div class="configurator__form-title">
            <?= $configurator['title'] ?>
        </div>
        <div class="configurator__form-container">
            <?php $select = [
                'mixin' => 'configurator__select',
                'placeholder' => 'Марка',
                'options' => [
                    'audi' => 'audi',
                    'Aston Martin' => 'Aston Martin',
                    'Alfa Romeo' => 'Alfa Romeo',
                    'Acura' => 'Acura',
                ]
            ] ?>
            <?php include('./blocks/select/select.php') ?>
            <?php $select = [
                'mixin' => 'configurator__select',
                'placeholder' => 'Модель',
                'options' => [
                    'A4' => 'A4',
                    'A5' => 'A5',
                    'R8' => 'R8',
                    'Q7' => 'Q7',
                ]
            ] ?>
            <?php include('./blocks/select/select.php') ?>
            <?php $select = [
                'mixin' => 'configurator__select',
                'placeholder' => 'Год выпуска',
                'options' => [
                    '2011' => '2011',
                    '2012' => '2012',
                    '2013' => '2013',
                    '2014' => '2014',
                    '2015' => '2015',
                    '2016' => '2016',
                    '2017' => '2017',
                    '2018' => '2018',
                    '2019' => '2019',
                ]
            ] ?>
            <?php include('./blocks/select/select.php') ?>
            <?php $select = [
                'mixin' => 'configurator__select',
                'placeholder' => 'Двигатель',
                'options' => [
                    '1.8' => '1.8',
                    '2.0' => '2.0',
                    '2.5' => '2.5',
                    '3' => '3',
                    '3.5' => '3.5',
                    '4' => '4',
                ]
            ] ?>
            <?php include('./blocks/select/select.php') ?>
            <div class="configurator__form-group">
                <?php $button = [
                    'mixin' => 'configurator__form-button',
                    'text' => 'Найти',
                    'url' => '#'
                ] ?>
                <?php include('./blocks/button/button.php') ?>
            </div>
        </div>
    </div>

</div>