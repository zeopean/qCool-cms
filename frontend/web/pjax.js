$(function () {
    if(pageName == 'demo-pjax-test')
    {
        $('.cho_menu a').on('click', function () {

            var area  = $(this).data('url');

            $.ajax({
                'url'   : url,
                'data'  :{ 'area': area},
                'dataType'  : 'html',
                'headers'   : {
                    'X_PJAX'    : true
                }
            });

        });

    }

})