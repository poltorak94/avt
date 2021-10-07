<div class="consultation <?= $consultation['mixin'] ?> <?= $consultation['modificator'] ?>">
    <div class="consultation__container container">
        <div class="consultation__title"><span> Бесплатная консультация</span> <br> специалиста</div>
        <form class="consultation__form">
            <div class="consultation__form-container">
                <div class="consultation__form-group">
                    <?php $customInput = [
                        'mixin' => 'consultation__input',
                        'modificator' => 'custom-input--user',
                        'type' => 'text',
                        'placeholder' => 'Имя'
                    ] ?>
                    <?php include('./blocks/custom-input/custom-input.php') ?>
                </div>
                <div class="consultation__form-group">
                    <?php $customInput = [
                        'mixin' => 'consultation__input',
                        'modificator' => 'custom-input--smartphone custom-input--tel',
                        'type' => 'text',
                        'placeholder' => 'Номер телефона'
                    ] ?>
                    <?php include('./blocks/custom-input/custom-input.php') ?>
                </div>
                <input type="submit" class="consultation__submit button" value="Заказать звонок">
            </div>
            <div class="consultation__form-group consultation__form-group--check">
                <?php $customCheckbox = [
                    'mixin' => 'consultation__check',
                    'modificator' => 'custom-checkbox--white',
                    'text' => 'Я согласен на обработку персональных данных',
                    'value' => '',
                    'attr' => 'checked'
                ] ?>
                <?php include('./blocks/custom-checkbox/custom-checkbox.php') ?>
            </div>
        </form>
    </div>
    <?php $modal = [
        'mixin' => 'consultation__modal',
        'innerBlock' => './blocks/thanks-modal/thanks-modal.php'
    ]?>
    <?php include('./blocks/modal/modal.php')?>
</div>