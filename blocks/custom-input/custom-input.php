<div class="custom-input <?= $customInput['modificator'] ?> <?= $customInput['mixin'] ?>">
    <svg class="custom-input__user" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M16.6667 17.5V15.8333C16.6667 14.9493 16.3155 14.1014 15.6904 13.4763C15.0653 12.8512 14.2174 12.5 13.3334 12.5H6.66671C5.78265 12.5 4.93481 12.8512 4.30968 13.4763C3.68456 14.1014 3.33337 14.9493 3.33337 15.8333V17.5" stroke="#808080" stroke-width="2" />
        <path d="M10.0001 9.16667C11.841 9.16667 13.3334 7.67428 13.3334 5.83333C13.3334 3.99238 11.841 2.5 10.0001 2.5C8.15913 2.5 6.66675 3.99238 6.66675 5.83333C6.66675 7.67428 8.15913 9.16667 10.0001 9.16667Z" stroke="#808080" stroke-width="2" />
    </svg>
    <svg class="custom-input__smartphone" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M14.1667 1.66675H5.83341C4.91294 1.66675 4.16675 2.41294 4.16675 3.33341V16.6667C4.16675 17.5872 4.91294 18.3334 5.83341 18.3334H14.1667C15.0872 18.3334 15.8334 17.5872 15.8334 16.6667V3.33341C15.8334 2.41294 15.0872 1.66675 14.1667 1.66675Z" stroke="#808080" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
    </svg>
    <input type="<?= $customInput['type'] ?>" class="custom-input__field" placeholder="<?= $customInput['placeholder'] ?>" <?= $customInput['attr'] ?>>
    <div class="custom-input__help-block">Заполните это поле</div>
</div>