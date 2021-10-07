<header class="header">
    <div class="header__container container">
        <a href="/" class="header__logo">
            <?php $logo = [
                'mixin' => 'header__logo',
            ] ?>
            <?php include('./blocks/logo/logo.php') ?>
        </a>
        <nav class="header__nav">
            <a href="/news" class="header__nav-item">Новости</a>
            <div class="header__nav-group">
                <div class="header__nav-group-title">
                    <div class="header__nav-item">Услуги</div>
                    <svg class="header__nav-group-arrow" width="10" height="5" viewBox="0 0 10 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L5 4L9 1" stroke="white" />
                    </svg>
                </div>
                <div class="header__nav-group-items">
                    <div class="header__nav-group-items-container">
                        <a href="/brand" class="header__nav-item">Чип-тюнинг авто</a>
                        <a href="/dpf" class="header__nav-item">Отключение сажевого фильтра (DPF)</a>
                        <a href="/egr" class="header__nav-item">Отключение системы рециркуляции ОГ (EGR)</a>
                        <a href="/scr" class="header__nav-item">Отключение мочевины (SCR, AdBlue)</a>
                        <a href="/speed" class="header__nav-item">Отключение лимита скорости</a>
                        <a href="/acpp" class="header__nav-item">Чип-тюнинг АКПП</a>
                        <a href="/power" class="header__nav-item">Мощностной стенд</a>
                    </div>
                </div>
            </div>
            <a href="/partners" class="header__nav-item">Партнёры</a>
            <a href="/reviews" class="header__nav-item">Отзывы</a>
            <a href="/contacts" class="header__nav-item">Контакты</a>
            <div class="header__location-and-tel">
                <a href="#" class="header__location">Москва</a>
                <a href="tel:88002343040" class="header__tel">8 (800) 234-30-40</a>
            </div>
        </nav>
        <div class="header__mobile">
            <a href="tel:88002343040" class="header__tel">8 (800) 234-30-40</a>
            <a href="#" class="header__burger">
                <span class="header__burger-part"></span>
                <span class="header__burger-part"></span>
                <span class="header__burger-part"></span>
            </a>
        </div>
    </div>
    <?php $modal = [
        'mixin' => 'header__modal',
        'innerBlock' => './blocks/city-select/city-select.php'
    ] ?>
    <?php include('./blocks/modal/modal.php') ?>
</header>