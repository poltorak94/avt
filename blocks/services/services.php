<section class="services container <?= $services['mixin'] ?> <?= $services['modificator'] ?>">
    <div class="services__title"> <?= $services['title'] ?></div>
    <div class="services__items">
        <?php foreach ($services['items'] as $serviceItem) : ?>
            <div class="services__item">
                <picture class="services__item-picture">
                    <source srcset="<?= $serviceItem['img'] ?>.webp" type="image/webp">
                    <source srcset="<?= $serviceItem['img'] ?>>">
                    <img class="services__item-image" src="<?= $serviceItem['img'] ?>" alt="" loading="lazy">
                </picture>
                <div class="services__item-info">
                    <a href="<?= $serviceItem['url'] ?>" class="services__item-title"><?= $serviceItem['title'] ?></a>
                    <div class="services__item-sign-and-price">
                        <a href="<?= $serviceItem['url'] ?>" class="services__item-sign">Записаться</a>
                        <div class="services__item-price"><?= $serviceItem['price'] ?></div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <?php $modal = [
        'mixin' => 'services__modal',
        'innerBlock' => './blocks/service-modal/service-modal.php',
        'innerBlockParams' => [
            'serviceModal' => [
                'modificator' => 'service-modal--all-services'
            ]
        ]
    ] ?>
    <?php include('./blocks/modal/modal.php') ?>
</section>