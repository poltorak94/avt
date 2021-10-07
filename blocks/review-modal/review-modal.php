<div class="review-modal">
    <form class="review-modal__form">
        <div class="review-modal__title">
            <span> Оставьте отзыв</span>
            заполнив форму ниже
        </div>
        <div class="review-modal__form-groups review-modal__form-groups--triple">
            <div class="review-modal__form-group">
                <?php $customInput = [
                    'mixin' => 'review-modal__input',
                    'modificator' => '',
                    'type' => 'text',
                    'placeholder' => 'Ваше имя'
                ] ?>
                <?php include('./blocks/custom-input/custom-input.php') ?>
            </div>
            <div class="review-modal__form-group">
                <?php $customInput = [
                    'mixin' => 'review-modal__input',
                    'modificator' => '',
                    'type' => 'email',
                    'placeholder' => 'Ваш email'
                ] ?>
                <?php include('./blocks/custom-input/custom-input.php') ?>
            </div>
            <div class="review-modal__form-group">
                <?php $customInput = [
                    'mixin' => 'review-modal__input',
                    'modificator' => '',
                    'type' => 'text',
                    'placeholder' => 'Город'
                ] ?>
                <?php include('./blocks/custom-input/custom-input.php') ?>
            </div>
        </div>
        <div class="review-modal__form-group">
            <textarea class="review-modal__textarea" placeholder="Ваш отзыв (до 180 символов)"></textarea>
        </div>
        <div class="review-modal__form-groups review-modal__form-groups--double">
            <div class="review-modal__form-group">
                <?php $customInput = [
                    'mixin' => 'review-modal__input',
                    'modificator' => '',
                    'type' => 'text',
                    'placeholder' => 'Какой у вас автомобиль?'
                ] ?>
                <?php include('./blocks/custom-input/custom-input.php') ?>
            </div>
            <input type="submit" value="Отправить" class="review-modal__submit button">
        </div>
        <?php $customCheckbox = [
            'mixin' => 'review-modal__check',
            'text' => 'Я согласен на обработку персональных данных',
            'value' => '',
            'attr' => 'checked'
        ] ?>
        <?php include('./blocks/custom-checkbox/custom-checkbox.php') ?>
    </form>
    <div class="review-modal__success">
        <div class="review-modal__title">
            <span> Спасибо за отзыв!</span>
        </div>
        <div class="review-modal__description">
            Мы опубликуем его после модерации
        </div>
    </div>
</div>