<section class="chip">
    <?php $breadcrumbs = [
        [
            'title' => 'Главная',
            'url' => '/'
        ],
        [
            'title' => 'Чип-тюнинг',
            'url' => '/brand'
        ],
        [
            'title' => 'Audi',
            'url' => '/model'
        ],
        [
            'title' => 'A4',
            'url' => '/model-year'
        ],
        [
            'title' => 'B6 2001-2004',
            'url' => '/motor'
        ],
        [
            'title' => 'S4 4.2 V8 344 л.с.'
        ]
    ] ?>
    <?php $title = [
        'text' => 'Чип-тюнинг Audi A4 B6 2001-2004 S4 4.2 V8 344 л.с.',
        'modificator' => 'title--md'
    ] ?>
    <?php include('./blocks/substrate/substrate.php') ?>
    <?php $configurator = [
        'modificator' => 'configurator--with-title',
        'title' => 'Выберите ваш автомобиль'
    ] ?>
    <?php include('./blocks/configurator/configurator.php') ?>
    <div class="chip__container container">
        <div class="chip__aside">
            <?php include('./blocks/services-calc/services-calc.php') ?>
            <?php $consultation = [
                'modificator' => 'consultation--short',
                'mixin' => 'chip__consultation'
            ] ?>
            <?php include('./blocks/consultation/consultation.php') ?>
        </div>
        <div class="chip__body">
            <div class="chip__chart">
                <div class="chip__chart-header">
                    <a href="<?= $chip['stage1Link'] ?>" class="chip__chart-nav <?= $chip['stage1LinkModificator'] ?>">
                        Stage 1
                    </a>
                    <a href="<?= $chip['stage2Link'] ?>" class="chip__chart-nav <?= $chip['stage2LinkModificator'] ?>">
                        Stage 2
                    </a>
                </div>
                <div class="chip__chart-container">
                    <div class="chip__chart-description">
                        Перепрограммирование электронного блока управления двигателем (ЭБУ), с целью улучшения мощности и динамики автомобиля без потери ресурса, оптимизируя КПД самого двигателя. Исключительно на программном уровне. Все программы обкатаны и протестированы на автомобилях.
                    </div>
                    <div class="chip__chart-changes">
                        <div class="chip__chart-changes-item chip__chart-changes-item--power" data-default="344" data-added="21">
                            <div class="chip__chart-changes-item-title">Мощность двигателя</div>
                            <div class="chip__chart-changes-item-info">
                                <div class="chip__chart-changes-item-before-title">До</div>
                                <div class="chip__chart-changes-item-after-title">После +21 л.с.</div>
                                <div class="chip__chart-changes-item-schedule">
                                    <div class="chip__chart-changes-item-schedule-before">344 л.с.</div>
                                    <div class="chip__chart-changes-item-schedule-after">365 л.с.</div>
                                </div>
                            </div>
                        </div>
                        <div class="chip__chart-changes-item chip__chart-changes-item--torque" data-default="410" data-added="20">
                            <div class="chip__chart-changes-item-title">Крутящий момент</div>
                            <div class="chip__chart-changes-item-info">
                                <div class="chip__chart-changes-item-before-title">До</div>
                                <div class="chip__chart-changes-item-after-title">После +20 Нм</div>
                                <div class="chip__chart-changes-item-schedule">
                                    <div class="chip__chart-changes-item-schedule-before">410 Нм</div>
                                    <div class="chip__chart-changes-item-schedule-after">430 Нм</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <canvas class="chip__chart-canvas" data-x-values="<?= htmlspecialchars($chip['xValues']) ?>" data-power="<?= htmlspecialchars($chip['defaultPower']) ?>" data-add-power="<?= htmlspecialchars($chip['addPower']) ?>" data-torque="<?= htmlspecialchars($chip['defaultTorque']) ?>" data-add-torque="<?= htmlspecialchars($chip['addTorque']) ?>" data-power-label="<?= ($chip['defaultPowerLabel']) ?>" data-add-power-label="<?= ($chip['addPowerLabel']) ?>" data-torque-label="<?= ($chip['defaultTorqueLabel']) ?>" data-add-torque-label="<?= ($chip['addTorqueLabel']) ?>" data-x-label="<?= ($chip['xLabel']) ?>" data-y-label="<?= ($chip['yLabel']) ?>" data-y1-label="<?= ($chip['y1Label']) ?>"></canvas>
                    <div class="chip__feature">
                        <picture class="chip__feature-picture">
                            <source srcset="./blocks/chip/assets/images/like.png.webp" type="image/webp">
                            <source srcset="./blocks/chip/assets/images/like.png">
                            <img class="chip__feature-icon" src="./blocks/chip/assets/images/like.png" alt="" loading="lazy">
                        </picture>
                        <div class="chip__feature-text">
                            Производим замеры мощности автомобиля на современном, высококлассном, полноприводном
                            стенде Dynostar W4X.
                        </div>
                    </div>
                </div>
            </div>
            <?php $consultation = [
                'mixin' => 'chip__body-consultation'
            ] ?>
            <?php include('./blocks/consultation/consultation.php') ?>
            <?php $categories = [
                'mixin' => 'chip__more-categories',
                'modificator' => 'categories--small-title categories--motor',
                'title' => 'Другие <span>модификации двигателя</span>',
                'switcher' => true,
                'switcherTitle1' => 'Бензиновый двигатель',
                'switcherTitle2' => 'Дизельный двигатель',
                'itmes' => [
                    [
                        'motor' => true,
                        'image' => '',
                        'url' => '/chip',
                        'title' => '1.8 T 150 л.с.',
                        'price' => 'от 20 000 ₽',
                        'attr' => 'data-id="petrol"'
                    ],
                    [
                        'motor' => true,
                        'image' => '',
                        'url' => '/chip',
                        'title' => '1.8 T 163 л.с.',
                        'price' => 'от 20 000 ₽',
                        'attr' => 'data-id="petrol"'
                    ],
                    [
                        'motor' => true,
                        'image' => '',
                        'url' => '/chip',
                        'title' => '1.8 T 190 л.с.',
                        'price' => 'от 20 000 ₽',
                        'attr' => 'data-id="petrol"'
                    ],
                    [
                        'motor' => true,
                        'image' => '',
                        'url' => '/chip',
                        'title' => 'S4 4.2 V8 344 л.с.',
                        'price' => 'от 20 000 ₽',
                        'attr' => 'data-id="petrol"'
                    ],
                    [
                        'motor' => true,
                        'image' => '',
                        'url' => '/chip',
                        'title' => '1.8 D 150 л.с.',
                        'price' => 'от 20 000 ₽',
                        'attr' => 'data-id="diesel"'
                    ],
                    [
                        'motor' => true,
                        'image' => '',
                        'url' => '/chip',
                        'title' => '1.8 D 163 л.с.',
                        'price' => 'от 20 000 ₽',
                        'attr' => 'data-id="diesel"'
                    ],
                    [
                        'motor' => true,
                        'image' => '',
                        'url' => '/chip',
                        'title' => '2.2 D 220 л.с.',
                        'price' => 'от 20 000 ₽',
                        'attr' => 'data-id="diesel"'
                    ],
                    [
                        'motor' => true,
                        'image' => '',
                        'url' => '/chip',
                        'title' => 'S4 4.2 V8 344 л.с.',
                        'price' => 'от 20 000 ₽',
                        'attr' => 'data-id="diesel"'
                    ]
                ],
                'notFoundText' => 'Не нашли своё авто? <br> Сделаем индивидуальный расчёт'

            ] ?>
            <?php include('./blocks/categories/categories.php') ?>
            <div class="chip__advantages">
                <div class="chip__advantages-title">Преимущества <span>чип-тюнинга</span></div>
                <div class="chip__advantages-items">
                    <div class="chip__advantages-item">
                        <div class="chip__advantages-item-icon-and-title">
                            <svg class="chip__advantages-item-icon" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M29.9193 6.75531C30.3313 6.81496 30.6923 6.86177 30.9899 6.89764C30.7702 16.5795 27.0098 22.567 23.3042 26.1568C21.3845 28.0164 19.4654 29.2454 18.0308 30.0075C17.3141 30.3883 16.7204 30.6514 16.3111 30.8177C16.1909 30.8665 16.0867 30.907 16 30.9396C15.9133 30.907 15.8091 30.8665 15.6889 30.8177C15.2796 30.6514 14.6859 30.3883 13.9692 30.0075C12.5346 29.2454 10.6155 28.0164 8.6958 26.1568C4.99025 22.567 1.22979 16.5795 1.01012 6.89764C1.30766 6.86177 1.66866 6.81496 2.08074 6.75531C3.29149 6.58007 4.95115 6.29299 6.74254 5.84514C8.53039 5.39818 10.4729 4.78534 12.2395 3.95112C13.6261 3.29633 14.9474 2.48516 16 1.47554C17.0526 2.48516 18.3739 3.29633 19.7605 3.95112C21.5271 4.78534 23.4696 5.39818 25.2575 5.84514C27.0489 6.29299 28.7085 6.58007 29.9193 6.75531ZM15.7002 31.046C15.6999 31.0461 15.7 31.0461 15.7002 31.046L15.7002 31.046ZM16.2998 31.046C16.3 31.0461 16.3001 31.0461 16.2998 31.046L16.2998 31.046Z" stroke="#EB5F12" stroke-width="2" />
                            </svg>
                            <div class="chip__advantages-item-title">Безопасность</div>
                        </div>
                        <div class="chip__advantages-item-description">
                            Полностью безопасно
                            для вашего авто. Наши прошивки не видит официальный дилер
                        </div>
                    </div>
                    <div class="chip__advantages-item">
                        <div class="chip__advantages-item-icon-and-title">
                            <svg class="chip__advantages-item-icon" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="16" cy="16" r="15" stroke="#EB5F12" stroke-width="2" />
                                <circle cx="16" cy="16" r="9" stroke="#EB5F12" stroke-width="2" />
                                <circle cx="16" cy="16" r="2" stroke="#EB5F12" stroke-width="2" />
                                <path d="M8 16H14" stroke="#EB5F12" stroke-width="2" />
                                <path d="M18 16H24" stroke="#EB5F12" stroke-width="2" />
                                <path d="M12 22.9282L15.5 16.866" stroke="#EB5F12" stroke-width="2" />
                                <path d="M17 14.2679L20.5 8.20577" stroke="#EB5F12" stroke-width="2" />
                                <path d="M20.5 24.0621L17 18" stroke="#EB5F12" stroke-width="2" />
                                <path d="M15 14.1962L11.5 8.13399" stroke="#EB5F12" stroke-width="2" />
                            </svg>
                            <div class="chip__advantages-item-title">Тест-драйв 14 дней</div>
                        </div>
                        <div class="chip__advantages-item-description">
                            Тест-драйв прошивки 14 дней
                            Возможность возврата к заводским настройкам в
                            любой момент
                        </div>
                    </div>
                    <div class="chip__advantages-item">
                        <div class="chip__advantages-item-icon-and-title">
                            <svg class="chip__advantages-item-icon" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="21" cy="18" r="10" stroke="#EB5F12" stroke-width="2" />
                                <path d="M18 5H21M24 5H21M21 5V9M21 13V18.5H26.5M2 12.5H9M2 23.5H9M0 18H7" stroke="#EB5F12" stroke-width="2" />
                            </svg>
                            <div class="chip__advantages-item-title">Быстрый старт</div>
                        </div>
                        <div class="chip__advantages-item-description">
                            Улучшение отклика педали газа
                            Трогается сразу, ощущается
                            дополнительный запас мощности
                        </div>
                    </div>
                    <div class="chip__advantages-item">
                        <div class="chip__advantages-item-icon-and-title">
                            <svg class="chip__advantages-item-icon" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M25 27C27.1421 24.6634 29 21.539 29 18.1064C29 10.8679 23.1797 5 16 5C8.8203 5 3 10.8679 3 18.1064C3 21.539 4.85793 24.6634 7 27" stroke="#EB5F12" stroke-width="2" stroke-linecap="square" />
                                <circle cx="16" cy="19" r="2" stroke="#EB5F12" stroke-width="2" />
                                <path d="M16 6V9" stroke="#EB5F12" stroke-width="2" />
                                <path d="M3 18H7M25 18H29" stroke="#EB5F12" stroke-width="2" />
                                <path d="M6.80762 8.80762L9.63604 11.636M22.364 24.364L25.1924 27.1924" stroke="#EB5F12" stroke-width="2" />
                                <path d="M6.80762 27.1924L9.63604 24.364M22.364 11.636L25.1924 8.80761" stroke="#EB5F12" stroke-width="2" />
                                <path d="M17 18L20.5 14.5" stroke="#EB5F12" stroke-width="2" />
                            </svg>
                            <div class="chip__advantages-item-title">Увеличение мощности</div>
                        </div>
                        <div class="chip__advantages-item-description">
                            Увеличение мощности и крутящего момента до 40%, устранение турбоямы
                        </div>
                    </div>
                    <div class="chip__advantages-item">
                        <div class="chip__advantages-item-icon-and-title">
                            <svg class="chip__advantages-item-icon" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="3" y="8" width="6" height="22" stroke="#EB5F12" stroke-width="2" />
                                <rect x="13" y="16" width="6" height="14" stroke="#EB5F12" stroke-width="2" />
                                <rect x="23" y="26" width="6" height="4" stroke="#EB5F12" stroke-width="2" />
                                <path d="M29 21L18 9.5L10.5 2H2M29 21V16M29 21H24" stroke="#EB5F12" stroke-width="2" />
                            </svg>
                            <div class="chip__advantages-item-title">Снижение расхода топлива</div>
                        </div>
                        <div class="chip__advantages-item-description">
                            Снижение расхода топлива до 15%.
                            Вы можете сэкономить на топливе до 14 000 ежегодно
                        </div>
                    </div>
                    <div class="chip__advantages-item">
                        <div class="chip__advantages-item-icon-and-title">
                            <svg class="chip__advantages-item-icon" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="16" cy="16" r="15" stroke="#EB5F12" stroke-width="2" />
                                <circle cx="16" cy="16" r="11" stroke="#EB5F12" stroke-width="2" />
                                <path d="M6 12C6 12 12.0948 11 16 11C19.9052 11 26 12 26 12" stroke="#EB5F12" stroke-width="2" />
                                <path d="M18.8176 25.8033C18.8176 25.8033 18.0221 22.3562 20.9389 19.4394C23.8557 16.5226 27.3029 17.318 27.3029 17.318" stroke="#EB5F12" stroke-width="2" />
                                <path d="M13.1814 25.8033C13.1814 25.8033 13.9769 22.3562 11.0601 19.4394C8.14328 16.5226 4.69613 17.318 4.69613 17.318" stroke="#EB5F12" stroke-width="2" />
                                <circle cx="16" cy="17" r="3" stroke="#EB5F12" stroke-width="2" />
                            </svg>
                            <div class="chip__advantages-item-title">Уверенный обгон</div>
                        </div>
                        <div class="chip__advantages-item-description">
                            Улучшение разгонной динамики
                            во всем диапазоне оборотов. Обгон
                            теперь под полным контролем и без «сюрпризов»
                        </div>
                    </div>
                </div>
            </div>
            <div class="chip__steps">
                <div class="chip__steps-title"><span>Как проходит</span> чип-тюнинг</div>
                <div class="chip__steps-items">
                    <div class="chip__steps-item">
                        <div class="chip__steps-item-num">1</div>
                        <div class="chip__steps-item-title">Считывание</div>
                        <div class="chip__steps-item-description">
                            Считывание прошивки из блока управления. Файл оригинальной программы сохраняется у нас навсегда.
                        </div>
                    </div>
                    <div class="chip__steps-item">
                        <div class="chip__steps-item-num">2</div>
                        <div class="chip__steps-item-title">Программирование</div>
                        <div class="chip__steps-item-description">
                            Коррекция оригинальной программы и контрольных сумм
                        </div>
                    </div>
                    <div class="chip__steps-item">
                        <div class="chip__steps-item-num">3</div>
                        <div class="chip__steps-item-title">Запись</div>
                        <div class="chip__steps-item-description">
                            Запись отредактированной программы в
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>