<section class="contacts">
    <?php $breadcrumbs = [
        [
            'title' => 'Главная',
            'url' => '/'
        ],
        [
            'title' => 'Контакты',
        ]
    ] ?>
    <?php $title = [
        'text' => 'Контакты',
        'modificator' => 'title--md'
    ] ?>
    <?php include('./blocks/substrate/substrate.php') ?>
    <?php $configurator = [
        'title' => 'Выберите ваш автомобиль',
        'modificator' => 'configurator--with-title'
    ] ?>
    <?php include('./blocks/configurator/configurator.php') ?>
    <div class="contacts__container container">
        <div class="contacts__info">
            <div class="contacts__info-title">Контакты компании ООО "АВТ"</div>
            <div class="contacts__info-nums">
                <div class="contacts__ogrn">
                    <span class="contacts__ogrn-title">ОГРН:</span>
                    <span class="contacts__ogrn-value">1167746788274</span>
                </div>
                <div class="contacts__inn">
                    <span class="contacts__inn-title">ИНН:</span>
                    <span class="contacts__inn-value">7716831841</span>
                </div>
            </div>
            <div class="contacts__address">г. Москва, Староватутинский проезд д.10 стр.4 бокс 24</div>
            <div class="contacts__tel-and-schedulee">
                <a href="tel:88002343040" class="contacts__tel">8 800 234-30-40</a>
                <div class="contacts__schedule">10:00 – 22:00</div>
            </div>
            <div class="contacts__email-and-site">
                <a href="mailto:info@avt.ru" class="contacts__email">info@avt.ru</a>
                <a href="#" target="_blank" class="contacts__site">avt.ru</a>
            </div>
            <?php $button = [
                'mixin' => 'contacts__button',
                'url' => '#',
                'text' => 'Задать вопрос'
            ] ?>
            <?php include('./blocks/button/button.php') ?>
        </div>
        <div class="contacts__map" id="map" data-lat="55.875572" data-long="37.672136"></div>
    </div>
    <?php $modal = [
        'mixin' => 'contacts__modal',
        'innerBlock' => './blocks/modal-consultation/modal-consultation.php'
    ] ?>
    <?php include('./blocks/modal/modal.php') ?>
</section>