<div class="modal-consultation">
    <form class="modal-consultation-form">
        <div class="modal-consultation__title">
            Бесплатная консультация
            <span> по любому вопросу</span>
        </div>
        <div class="modal-consultation-form-groups">
            <div class="modal-consultation-form-group">
                <?php $customInput = [
                    'type' => 'text',
                    'mixin' => 'custom-input__has-error modal-consultation__input',
                    'placeholder' => 'Ваше имя'
                ] ?>
                <?php include('./blocks/custom-input/custom-input.php') ?>
            </div>
            <div class="modal-consultation-form-group">
                <?php $customInput = [
                    'type' => 'text',
                    'modificator' => 'custom-input--tel',
                    'mixin' => 'modal-consultation__input',
                    'placeholder' => 'Ваш телефон'
                ] ?>
                <?php include('./blocks/custom-input/custom-input.php') ?>
            </div>
        </div>
        <div class="modal-consultation-form-group">
            <textarea class="modal-consultation__textarea" placeholder="Ваш вопрос (до 180 символов)"></textarea>
        </div>
        <input type="submit" value="Отправить" class="modal-consultation__submit button">
        <div class="modal-consultation-form-group">
            <?php $customCheckbox = [
                'mixin' => 'modal-consultation__check',
                'text' => 'Я согласен на обработку персональных данных',
                'value' => '',
                'attr' => 'checked'
            ] ?>
            <?php include('./blocks/custom-checkbox/custom-checkbox.php') ?>
        </div>
    </form>
    <div class="modal-consultaton__success">
        <div class="modal-consultation__title">Спасибо за вопрос!</div>
        <div class="modal-consultation__description">
            Наш менеджер свяжется с Вами в ближайшее время.
        </div>
    </div>
</div>