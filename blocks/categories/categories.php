<section class="categories container <?= $categories['mixin'] ?> <?= $categories['modificator'] ?>">
    <div class="categories__title"><?= $categories['title'] ?></div>
    <div class="categories__description"><?= $categories['description'] ?></div>
    <?php if (!empty($categories['switcher'])) : ?>
        <?php $switcher = [
            'mixin' => 'categories__switcher',
            'title1' => $categories['switcherTitle1'],
            'title2' => $categories['switcherTitle2']
        ] ?>
        <?php include('./blocks/switcher/switcher.php') ?>
    <?php endif; ?>
    <?php if ($categories['nav'] == true) : ?>
        <div class="categories__nav">
            <a href="<?= $categories['navFirstUrl'] ?>" class="categories__nav-item categories__nav-item--first categories__nav-item--active">
                <?= $categories['navFirstText'] ?>
            </a>
            <?php foreach ($categories['navItems'] as $categoriesNavItem => $categoriesNavItemUrl) : ?>
                <a href="<?= $categoriesNavItemUrl ?>" class="categories__nav-item"><?= $categoriesNavItem ?></a>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <div class="categories__items">
        <?php foreach ($categories['itmes'] as $categoriesItem) : ?>
            <?php if ($categoriesItem['motor'] == true) : ?>
                <a href="<?= $categoriesItem['url'] ?>" class="categories__item" <?= $categoriesItem['attr'] ?>>
                    <div class="categories__item-info">
                        <div class="categories__item-title">
                            <?= $categoriesItem['title'] ?>
                        </div>
                        <div class="categories__item-price"><?= $categoriesItem['price'] ?></div>
                    </div>
                </a>
            <?php else : ?>
                <div class="categories__item" <?= $categoriesItem['attr'] ?>>
                    <a href="<?= $categoriesItem['url'] ?>" class="categories__item-image-holder">
                        <?php if (!empty($categoriesItem['image'])) : ?>
                            <picture class="categories__item-picture">
                                <source srcset="<?= $categoriesItem['image'] ?>.webp" type="image/webp">
                                <source srcset="<?= $categoriesItem['image'] ?>">
                                <img class="categories__item-image" src="<?= $categoriesItem['image'] ?>" alt="" loading="lazy">
                            </picture>
                        <?php endif; ?>
                    </a>
                    <div class="categories__item-info">
                        <a href="<?= $categoriesItem['url'] ?>" class="categories__item-title">
                            <?= $categoriesItem['title'] ?>
                        </a>
                        <div class="categories__item-price"><?= $categoriesItem['price'] ?></div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
        <a href="#" class="categories__not-found">
            <div class="categories__not-found-image-holder">
                <picture class="categories__not-found-picture">
                    <source srcset="./blocks/categories/assets/images/search.png.webp" type="image/webp">
                    <source srcset="./blocks/categories/assets/images/search.png">
                    <img class="categories__not-found-image" src="./blocks/categories/assets/images/search.png" alt="" loading="lazy">
                </picture>
            </div>
            <div class="categories__not-found-text"><?= $categories['notFoundText'] ?></div>
        </a>
    </div>
    <?php $modal = [
        'mixin' => 'categories__modal',
        'innerBlock' => './blocks/service-modal/service-modal.php'
    ] ?>
    <?php include('./blocks/modal/modal.php') ?>
</section>