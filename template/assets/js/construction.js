jQuery(function($) {
    var visibleHeight = $(window).height();

    // Full background image
    $(".backimage-full").css({'height': (visibleHeight) + 'px'});
    $(window).resize(function () {
        'use strict',
            $(".backimage-full").css({'height': (visibleHeight) + 'px'});
    });

    // Show/Hide form notifications
    $(document).ready(function() {
        $("#active-form").click(function (event) {
            event.preventDefault();
            $(".message.caption").css({"display": "none"});
            $(".notification.caption").css({"display": "block"});

        });

        $("#rollback").click(function (event) {
            event.preventDefault();
            $(".notification.caption").css({"display": "none"});
            $(".message.caption").css({"display": "block"});

        })
    });

    // Ajax notification form
    $(document).ready(function() {
        $('#notification-form').submit(function(event) {
            event.preventDefault();
            $.ajax({
                url: $('#notification-form').attr('action'),
                type: 'POST',
                data: $(this).serialize(),
                success: function(data) {
                    data = $.parseJSON(data);
                    if (data.status) {
                        $("#rollback").html('Voltar');
                        $("#notify-submit").html('Concluido!');
                        document.getElementById("notify-submit").setAttribute("type", "button");

                        jQuery.fn.reset = function () {
                            $(this).each(function () {
                                this.reset();
                            });
                        };
                        $("#notification-form").reset();
                    } else {
                        data.errors.forEach(function(error) {
                            toastr.warning(error);
                        });

                        document.getElementById("notification_token").setAttribute("value", data.token);
                    }
                }
            });

            return false;
        });
    });


});
