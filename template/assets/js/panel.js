jQuery(function($) {
    var visibleHeight = $(window).height();

    // Load Full wrapper
    $("#page-wrapper").css({'min-height': (visibleHeight - 50) + 'px'});
    $(window).resize(function(){'use strict',
        $("#page-wrapper").css({'min-height': (visibleHeight - 50) + 'px'});
    });

    // // Ajax: Set if readed
    // $(document).ready(function() {
    //     $("#email-table tr.active").click(function(event) {
    //         var index = $(this).index();
    //         $.ajax({
    //             processData: 'application/x-www-form-urlencoded',
    //             type: 'post',
    //             data: {
    //                 'id': $(this).find('td:not(:empty):first').text(),
    //                 'csrf_token': $('input[name="csrf_token"]').val()
    //             },
    //             dataType: 'html',
    //             url: "emails-list/update",
    //             success: function(data) {
    //                 data = $.parseJSON(data);
    //                 if (data.status) {
    //                     location.reload(true);
    //                 }
    //             }
    //         });
    //
    //         return false;
    //     });
    // });

});

