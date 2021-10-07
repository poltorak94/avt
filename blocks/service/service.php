<section class="service <?= $service['modificator'] ?>">
    <div class="service__hero">
        <div class="service__hero-container container">
            <?php include('./blocks/breadcrumbs/breadcrumbs.php') ?>
            <?php $title = [
                'mixin' => 'service__title',
                'text' => $service['title']
            ] ?>
            <?php include('./blocks/title/title.php') ?>
            <div class="service__price"><?= $service['price'] ?></div>
            <div class="service__hero-description"><?= $service['description'] ?></div>
            <?php include('./blocks/configurator/configurator.php') ?>
            <?php include('./blocks/speed/speed.php') ?>
        </div>
        <?php include('./blocks/advantages/advantages.php') ?>
    </div>
    <div class="service__reasons container">
        <div class="service__reasons-title"><?= $service['reasonsTitle'] ?></div>
        <div class="service__reasons-description"><?= $service['reasonsDescription'] ?></div>
        <div class="service__reasons-items">
            <?php foreach ($service['reasons'] as $serviceItem => $serviceItemText) : ?>
                <div class="service__reason-item">
                    <div class="service__reason-item-num"><?= $serviceItem ?></div>
                    <div class="service__reason-item-description"><?= $serviceItemText ?></div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="service__reasons-items-additional-information">
            <?= $service['reasonsAddInfo'] ?>
        </div>
    </div>
    <?php $consultation = [
        'mixin' => 'service__consultation',
    ] ?>
    <?php include('./blocks/consultation/consultation.php') ?>
    <?php include('./blocks/services/services.php') ?>
    <?php include('./blocks/seo/seo.php') ?>
</section>