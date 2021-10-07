<div class="select <?= $select['mixin'] ?> <?= $select['modificator'] ?>">
    <select class="select__field">
        <?php if (!empty($select['placeholder'])) : ?>
            <option value="0" disabled selected><?= $select['placeholder'] ?></option>
        <?php endif; ?>
        <?php foreach ($select['options'] as $selectOption => $value) : ?>
            <option value="<?= $value ?>"><?= $selectOption ?></option>
        <?php endforeach; ?>
    </select>
    <div class="select__help-block">Выберите одно из значений</div>
</div>