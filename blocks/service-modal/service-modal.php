<div class="service-modal <?= $serviceModal['modificator'] ?>">
    <form class="service-modal__form">
        <div class="service-modal__title">Запись на услугу</div>
        <div class="service-modal__description">
            Наш специалист свяжется с вами
            для уточнения деталей
        </div>
        <div class="service-modal__form-group service-modal__form-group--select">
            <?php $select = [
                'mixin' => 'service-modal__select',
                'modificator' => 'select--white',
                'options' => [
                    'Замер на мощностном стенде' => 'Замер на мощностном стенде',
                    'Отключение системы рециркуляции ОГ (EGR)' => 'Отключение системы рециркуляции ОГ (EGR)',
                    'Отключение лимита скорости' => 'Отключение лимита скорости',
                    'Отключение мочевины (SCR, AdBlue)' => 'Отключение мочевины (SCR, AdBlue)',
                    'Чип-тюнинг авто' => 'Чип-тюнинг авто',
                    'Отключение сажевого фильтра (DPF)' => 'Отключение сажевого фильтра (DPF)',
                    'Чип-тюнинг АКПП' => 'Чип-тюнинг АКПП',
                ]
            ] ?>
            <?php include('./blocks/select/select.php') ?>
        </div>
        <div class="service-modal__form-group">
            <?php $customInput = [
                'mixin' => 'service-modal__input',
                'type' => 'text',
                'placeholder' => 'Имя'
            ] ?>
            <?php include('./blocks/custom-input/custom-input.php') ?>
        </div>
        <div class="service-modal__form-group">
            <?php $customInput = [
                'mixin' => 'custom-input__has-error service-modal__input',
                'modificator' => 'custom-input--tel',
                'type' => 'text',
                'placeholder' => 'Номер телефона'
            ] ?>
            <?php include('./blocks/custom-input/custom-input.php') ?>
        </div>
        <div class="service-modal__form-group">
            <?php $customCheckbox = [
                'mixin' => 'services-calc__item-check',
                'text' => 'Я согласен на обработку персональных данных',
                'value' => '',
                'attr' => 'checked'
            ] ?>
            <?php include('./blocks/custom-checkbox/custom-checkbox.php') ?>
        </div>
        <input type="submit" value="Записаться" class="service-modal__form-submit button">
    </form>
    <div class="service-modal__success">
        <div class="service-modal__title">Спасибо за обращение</div>
        <div class="service-modal__description">
            Наш специалист свяжется с вами
            в ближайшее время
        </div>
    </div>
</div>