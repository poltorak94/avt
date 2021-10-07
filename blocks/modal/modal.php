<div class="modal modal--hidden <?= $modal['mixin'] ?>">
    <a href="#" class="modal__close arcticmodal-close"></a>
    <div class="modal__body">
        <?php if (!empty($modal['innerBlockParams'])) : ?>
            <?php extract($modal['innerBlockParams']) ?>
        <?php endif; ?>
        <?php include($modal['innerBlock']) ?>
    </div>
</div>