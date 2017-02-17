jQuery(function($) {
    var visibleHeight = $(window).height();

    // Load Full wrapper
    $("#page-wrapper").css({'min-height': (visibleHeight - 50) + 'px'});
    $(window).resize(function(){'use strict',
        $("#page-wrapper").css({'min-height': (visibleHeight - 50) + 'px'});
    });

    // Ajax, ajax, ajax...
    $(document).ready(function() {
        setInterval(function () {
            $.ajax({
                type: "post",
                dataType: "json",
                //data: {'': $},
                url: "ajax/counters",
                success: function(data) {
                    $(".unread-emails-counter").text(data.total_unread_emails);
                    $(".unread-messages-counter").text(data.total_unread_messages);
                    $(".online-counter").text(data.current_online);
                }
            });
        }, 1000);
    });

});
