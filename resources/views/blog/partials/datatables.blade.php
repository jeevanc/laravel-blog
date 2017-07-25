<script>
    $.extend(true, $.fn.DataTable.defaults, {
        /*stateSave: true,*/
        processing: true,
        serverSide: true,
        responsive: true
    });

    $(document).on('preXhr.dt', function (e, settings, data) {
        console.info('DT request started.');
        $('#table_wrapper *').css('pointer-events', 'none');
        if (data.search.value.indexOf('%') > -1) {
            data.search.value = data.search.value.replace(/%/g, '\\%');
            data.search.value = data.search.value.replace(/_/g, '\\_');
        }
    });

    $(document).on('xhr.dt', function () {
        console.info('DT request ended.');
        $('#table_wrapper *').removeAttr('style');
    });
</script>
