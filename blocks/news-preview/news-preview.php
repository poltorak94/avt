<div class="news-preview <?= $newsPreview['mixin'] ?> <?= $newsPreview['modificator'] ?>">
    <a href="<?= $newsPreview['url'] ?>" class="news-preview__image-link">
        <picture class="news-preview__picture">
            <source srcset="<?= $newsPreview['image'] ?>.webp" type="image/webp">
            <source srcset="<?= $newsPreview['image'] ?>">
            <img class="news-preview__image" src="<?= $newsPreview['image'] ?>" alt="" loading="lazy">
        </picture>
    </a>
    <div class="news-preview__info">
        <div class="news-preview__date"><?= $newsPreview['date'] ?></div>
        <a href="<?= $newsPreview['url'] ?>" class="news-preview__title"><?= $newsPreview['title'] ?></a>
        <div class="news-preview__description"><?= $newsPreview['description'] ?></div>
        <div class="news-preview__tags">
            <?php foreach ($newsPreview['tags'] as $newsPreviewTag => $newsPreviewTagUrl) : ?>
                <a href="<?= $newsPreviewTagUrl ?>" class="news-preview__tag"><?= $newsPreviewTag ?></a>
            <?php endforeach; ?>
        </div>
    </div>
</div>