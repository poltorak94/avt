<div class="services-calc">
    <picture class="services-calc__picture">
        <source srcset="./blocks/services-calc/assets/images/car.jpg.webp" type="image/webp">
        <source srcset="./blocks/services-calc/assets/images/car.jpg">
        <img class="services-calc__car-image"" src=" ./blocks/services-calc/assets/images/car.jpg" alt="" loading="lazy">
    </picture>
    <div class="services-calc__title">
        <span>Скидка до 30%</span> за заказ
        комплекса работ
    </div>
    <div class="services-calc__items">
        <?php $customCheckbox = [
            'mixin' => 'services-calc__item-check',
            'text' => 'Выездной чип-тюнинг',
            'value' => '25000'
        ] ?>
        <?php include('./blocks/custom-checkbox/custom-checkbox.php') ?>
        <?php $customCheckbox = [
            'mixin' => 'services-calc__item-check',
            'text' => 'Чип-тюнинг',
            'value' => '20000',
        ] ?>
        <?php include('./blocks/custom-checkbox/custom-checkbox.php') ?>
        <?php $customCheckbox = [
            'mixin' => 'services-calc__item-check',
            'text' => 'Отключение сажевого фильтра (DPF)',
            'value' => '8000',
        ] ?>
        <?php include('./blocks/custom-checkbox/custom-checkbox.php') ?>
        <?php $customCheckbox = [
            'mixin' => 'services-calc__item-check',
            'text' => 'Отключение системы рециркуляции ОГ (EGR)',
            'value' => '12000',
        ] ?>
        <?php include('./blocks/custom-checkbox/custom-checkbox.php') ?>
        <?php $customCheckbox = [
            'mixin' => 'services-calc__item-check',
            'text' => 'Отключение мочевины (SCR, AdBlue)',
            'value' => '15000',
        ] ?>
        <?php include('./blocks/custom-checkbox/custom-checkbox.php') ?>
        <?php $customCheckbox = [
            'mixin' => 'services-calc__item-check',
            'text' => 'Отключение лимита скорости',
            'value' => '10000',
        ] ?>
        <?php include('./blocks/custom-checkbox/custom-checkbox.php') ?>
        <?php $customCheckbox = [
            'mixin' => 'services-calc__item-check',
            'text' => 'Чип-тюнинг АКПП',
            'value' => '15000',
        ] ?>
        <?php include('./blocks/custom-checkbox/custom-checkbox.php') ?>
    </div>
    <div class="services-calc__selected-items">
        <div class="services-calc__selected-items-info">
            <div class="services-calc__selected-items-title">Ваша скидка:</div>
            <div class="services-calc__selected-items-value">0</div>
        </div>
        <div class="services-calc__selected-items-scheme">
            <picture class="services-calc__selected-items-picture">
                <source srcset="./blocks/services-calc/assets/images/scheme.png.webp" type="image/webp">
                <source srcset="./blocks/services-calc/assets/images/scheme.png">
                <img class="services-calc__selected-items-scheme-image" src="./blocks/services-calc/assets/images/scheme.png" alt="" loading="lazy">
            </picture>
            <picture class="services-calc__selected-items-picture">
                <source srcset="./blocks/services-calc/assets/images/line.png.webp" type="image/webp">
                <source srcset="./blocks/services-calc/assets/images/line.png">
                <img class="services-calc__selected-items-scheme-line" src="./blocks/services-calc/assets/images/line.png" alt="" loading="lazy">
            </picture>
        </div>
    </div>
    <div class="services-calc__total-price">
        <div class="services-calc__total-price-title">Стоимость работ:</div>
        <div class="services-calc__total-price-value">20 000</div>
    </div>
    <?php $button = [
        'mixin' => 'services-calc__button',
        'url' => '#',
        'text' => 'Записаться онлайн'
    ] ?>
    <?php include('./blocks/button/button.php') ?>
    <?php $modal = [
        'mixin' => 'services-calc__modal',
        'innerBlock' => './blocks/service-modal/service-modal.php',
        'innerBlockParams' => [
            'serviceModal' => [
                'modificator' => 'service-modall--all-services'
            ]
        ]
    ] ?>
    <?php include('./blocks/modal/modal.php') ?>
</div>