$(document).ready(function () {

    let leftColumn = $('.reviews__items-column--left');
    let rightColumn = $('.reviews__items-column--right');

    $('.reviews__hidden .reviews__item').each(function () {
        let review = $(this);
        let leftColumnHeight = leftColumn.height();
        let rightColumnHeight = rightColumn.height();
        if (leftColumnHeight <= rightColumnHeight) {
            review.appendTo(leftColumn)
        } else {
            review.appendTo(rightColumn)
        }
    });

    $('.reviews__widget-button').on('click', function (e) {
        e.preventDefault();
        $('.reviews__modal').trigger('open.modal');
    });

})