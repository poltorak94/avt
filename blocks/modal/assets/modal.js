$(document).ready(function () {
    //открытие модального окна
    $('.modal').on('open.modal', function () {
        let modal = $(this)
        modal.removeClass('modal--hidden');
        modal.arcticmodal({
            afterClose: function () {
                modal.addClass('modal--hidden');
            }
        });
    });

    //закрытие модального окна
    $('body').on('close-delay.modal', function () {
        setTimeout(function () {
            $.arcticmodal('close');
        }, 2500)
    })
    $('.modal').on('close.modal', function () {
        let modal = $(this);
        modal.arcticmodal('close');
    });

    $('body').on('close.modal', function () {
        $.arcticmodal('close');
    });

});