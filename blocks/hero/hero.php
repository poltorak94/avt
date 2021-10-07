<section class="hero">
    <div class="hero__container container">
        <?php $title = [
            'mixin' => 'hero__title',
            'text' => 'Делаем чип-тюнинг <br> автомобилей по всей России!'
        ] ?>
        <?php include('./blocks/title/title.php') ?>
        <a href="#" class="hero__info">что такое чип-тюнинг?</a>
        <div class="hero__description">
            Выберите подходящий вариант прошивки <br>
            с помощью конфигуратора
        </div>
        <?php include('./blocks/configurator/configurator.php') ?>
        <?php include('./blocks/speed/speed.php') ?>
    </div>
    <?php include('./blocks/advantages/advantages.php') ?>
    <?php $modal = [
        'mixin' => 'hero__modal',
        'innerBlock' => './blocks/chip-info/chip-info.php'
    ] ?>
    <?php include('./blocks/modal/modal.php') ?>
</section>