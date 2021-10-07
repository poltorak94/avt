<div class="error-page">
    <?php include('./blocks/substrate/substrate.php') ?>
    <?php $configurator = [
        'title' => 'Выберите ваш автомобиль',
        'modificator' => 'configurator--with-title'
    ] ?>
    <?php include('./blocks/configurator/configurator.php') ?>
    <div class="error-page__container container">
        <div class="error-page__description"><?= $errorPage['description'] ?></div>
        <?php $button = [
            'mixin' => 'error-page__button',
            'url' => '/',
            'text' => 'Вернуться на главную'
        ] ?>
        <?php include('./blocks/button/button.php') ?>
    </div>
</div>