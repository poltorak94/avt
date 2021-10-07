<?php
$keys = array_keys($breadcrumbs);
$lastKey = end($keys);
$index = 1;
?>
<ul itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs">
    <?php foreach ($breadcrumbs as $key => $item) : ?>
        <?php if ($key != $lastKey) : ?>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__item">
                <a itemprop="item" href="<?= $item['url'] ?>" class="breadcrumbs__item-link">
                    <span itemprop="name" class="breadcrumbs__item-name"> <?= $item['title'] ?></span>
                    <meta itemprop="position" content="<?= $index++ ?>" />
                </a>
            </li>
        <?php else : ?>
            <li class="breadcrumbs__item">
                <span class="breadcrumbs__item-link"><?= $item['title'] ?></span>
            </li>
        <?php endif; ?>
    <?php endforeach; ?>
</ul>