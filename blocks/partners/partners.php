<section class="partners">
    <?php $breadcrumbs = [
        [
            'title' => 'Главная',
            'url' => '/'
        ],
        [
            'title' => 'Партнеры',
        ]
    ] ?>
    <?php $title = [
        'text' => 'Партнёры',
        'modificator' => 'title--md'
    ] ?>
    <?php include('./blocks/substrate/substrate.php') ?>
    <?php $configurator = [
        'title' => 'Выберите ваш автомобиль',
        'modificator' => 'configurator--with-title'
    ] ?>
    <?php include('./blocks/configurator/configurator.php') ?>
    <div class="partners__container container">
        <div class="partners__title">
            Адреса сервисов
            <span> где вы можете установить прошивку</span>
        </div>
        <div class="partners__header">
            <form class="partners__search-form">
                <div class="partners__search-form-group partners__search-form-group--select">
                    <?php $select = [
                        'mixin' => 'partners__select',
                        'modificator' => 'select--white',
                        'options' => [
                            'Все города' => 'Все города',
                            'Москва' => 'Москва',
                            'Ростов' => 'Ростов',
                            'Питер' => 'Питер',
                            'Новосибирск' => 'Новосибирск',
                            'Волгоград' => 'Волгоград',
                            'Нижний новгород' => 'Нижний новгород',
                            'Сочи' => 'Сочи',
                            'Казань' => 'Казань',
                            'Калининград' => 'Калининград',
                            'Екатеринбург' => 'Екатеринбург',
                            'Владивосток' => 'Владивосток',
                            'Ярославль' => 'Ярославль',
                        ]
                    ] ?>
                    <?php include('./blocks/select/select.php') ?>
                </div>
                <div class="partners__search-form-group partners__search-form-group--input">
                    <?php $customInput = [
                        'mixin' => 'partners__input',
                        'modificator' => '',
                        'type' => 'text',
                        'placeholder' => 'Любые данные партнёра'
                    ] ?>
                    <?php include('./blocks/custom-input/custom-input.php') ?>
                </div>
                <input type="submit" value="Найти" class="partners__search-form-submit button">
            </form>
            <?php $switcher = [
                'mixin' => 'partners__switcher',
                'title1' => 'Сервисы на карте',
                'title2' => 'Сервисы списком'
            ]?>
            <?php include('./blocks/switcher/switcher.php')?>
        </div>
        <div class="partners__contacts">
            <div class="partners__list">
                <div class="partners__list-items scrollbar-inner">
                    <div class="partners__item" data-lat="55.875572" data-long="37.672136">
                        <div class="partners__item-num">1</div>
                        <div class="partners__item-container">
                            <a href="#" class="partners__item-link">ООО "АВТ" Филиал на Староватутинском</a>
                            <div class="partners__item-info">
                                <div class="partners__item-address">
                                    г. Москва, Староватутинский проезд д.10 стр.4 бокс 24
                                </div>
                                <div class="partners__tel-and-schedulee">
                                    <a href="tel:88002343040" class="partners__item-tel">8 800 234-30-40</a>
                                    <div class="partners__item-schedule">10:00 – 22:00</div>
                                </div>
                                <div class="partners__email-and-site">
                                    <a href="mailto:info@avt.ru" class="partners__item-email">info@avt.ru</a>
                                    <a href="#" target="_blank" class="partners__item-site">avt.ru</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="partners__item" data-lat="59.196032" data-long="39.924370">
                        <div class="partners__item-num">2</div>
                        <div class="partners__item-container">
                            <a href="#" class="partners__item-link">ООО "АВТ"</a>
                            <div class="partners__item-info">
                                <div class="partners__item-address">
                                    г. Вологда, ул. Можайского, д. 69
                                </div>
                                <div class="partners__tel-and-schedulee">
                                    <a href="tel:88002343040" class="partners__item-tel">8 800 234-30-40</a>
                                    <div class="partners__item-schedule">10:00 – 22:00</div>
                                </div>
                                <div class="partners__email-and-site">
                                    <a href="mailto:info@avt.ru" class="partners__item-email">info@avt.ru</a>
                                    <a href="#" target="_blank" class="partners__item-site">avt.ru</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="partners__item" data-lat="48.508584" data-long="135.083514">
                        <div class="partners__item-num">3</div>
                        <div class="partners__item-container">
                            <a href="#" class="partners__item-link">ООО "АВТ"</a>
                            <div class="partners__item-info">
                                <div class="partners__item-address">
                                    г. Хабаровск, Степной переулок, 6 бокс 112
                                </div>
                                <div class="partners__tel-and-schedulee">
                                    <a href="tel:88002343040" class="partners__item-tel">8 800 234-30-40</a>
                                    <div class="partners__item-schedule">10:00 – 22:00</div>
                                </div>
                                <div class="partners__email-and-site">
                                    <a href="mailto:info@avt.ru" class="partners__item-email">info@avt.ru</a>
                                    <a href="#" target="_blank" class="partners__item-site">avt.ru</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="partners__item" data-lat="55.809024" data-long="37.594135">
                        <div class="partners__item-num">4</div>
                        <div class="partners__item-container">
                            <a href="#" class="partners__item-link">ООО "АВТ" Филиал на Добролюбова</a>
                            <div class="partners__item-info">
                                <div class="partners__item-address">
                                    г. Москва, ул. Добролюбова, 1
                                </div>
                                <div class="partners__tel-and-schedulee">
                                    <a href="tel:88002343040" class="partners__item-tel">8 800 234-30-40</a>
                                    <div class="partners__item-schedule">10:00 – 22:00</div>
                                </div>
                                <div class="partners__email-and-site">
                                    <a href="mailto:info@avt.ru" class="partners__item-email">info@avt.ru</a>
                                    <a href="#" target="_blank" class="partners__item-site">avt.ru</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="partners__item" data-lat="55.831908" data-long="37.331648">
                        <div class="partners__item-num">5</div>
                        <div class="partners__item-container">
                            <a href="#" class="partners__item-link">ООО "АВТ" Филиал в Красногорске</a>
                            <div class="partners__item-info">
                                <div class="partners__item-address">
                                    г. Красногорск, ул. Речная, 8
                                </div>
                                <div class="partners__tel-and-schedulee">
                                    <a href="tel:88002343040" class="partners__item-tel">8 800 234-30-40</a>
                                    <div class="partners__item-schedule">10:00 – 22:00</div>
                                </div>
                                <div class="partners__email-and-site">
                                    <a href="mailto:info@avt.ru" class="partners__item-email">info@avt.ru</a>
                                    <a href="#" target="_blank" class="partners__item-site">avt.ru</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="partners__map">
                <div class="partners__map-container" id="map"></div>
            </div>
        </div>
    </div>
</section>