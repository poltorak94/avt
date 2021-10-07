$(document).ready(function () {
    $('.select').each(function () {
        let select = $(this);
        select.find('.select__field').select2({
            minimumResultsForSearch: -1,
        });
    });
    $('select').on('select2:open', function (e) {
        $('.select2-results__options').scrollbar().parent().addClass('scrollbar-inner');
    });
})