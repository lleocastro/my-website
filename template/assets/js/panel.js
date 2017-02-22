jQuery(function($) {
    var visibleHeight = $(window).height();

    // Load Full wrapper
    $("#page-wrapper").css({'min-height': (visibleHeight - 50) + 'px'});
    $(window).resize(function(){'use strict',
        $("#page-wrapper").css({'min-height': (visibleHeight - 50) + 'px'});
    });

    // Ajax, ajax, ajax
    $(document).ready(function() {
        $('#blocker-form').submit(function(event) {
            event.preventDefault();
            $.ajax({
                url: $('#blocker-form').attr('action'),
                type: 'POST',
                data: $(this).serialize(),
                success: function(data) {
                    data = $.parseJSON(data);
                    if (data.status) {
                        jQuery.fn.reset = function () {
                            $(this).each(function () {
                                this.reset();
                            });
                        };
                        $("#blocker-form").reset();
                        location.reload();
                    } else {
                        data.errors.forEach(function(error) {
                            toastr.warning(error);
                        });

                        document.getElementById("blocker_token").setAttribute("value", data.token);
                    }
                }
            });

            return false;
        });
    });

    // Reconfirm Email
    $(document).ready(function() {
        $('#reconfirm-email-form').submit(function(event) {
            event.preventDefault();

            $("#reconfirm-email-submit").html('Reenviando...');

            $.ajax({
                url: $('#reconfirm-email-form').attr('action'),
                type: 'POST',
                data: $(this).serialize(),
                success: function(data) {
                    data = $.parseJSON(data);
                    if (data.status) {
                        $("#reconfirm-email-submit").removeClass("btn-default").addClass("registered").html(
                            'Reenviado!'
                        );
                    } else {
                        $("#reconfirm-email-submit").html('Reenviar Confirmação');
                        document.getElementById("reconfirm_token").setAttribute("value", data.token);
                    }
                }
            });

            return false;
        });
    });

    // Reconfirm Budget
    $(document).ready(function() {
        $('#reconfirm-budget-form').submit(function(event) {
            event.preventDefault();

            $("#reconfirm-budget-submit").html('Reenviando...');

            $.ajax({
                url: $('#reconfirm-budget-form').attr('action'),
                type: 'POST',
                data: $(this).serialize(),
                success: function(data) {
                    data = $.parseJSON(data);
                    if (data.status) {
                        $("#reconfirm-budget-submit").removeClass("btn-default").addClass("registered").html(
                            'Reenviado!'
                        );
                    } else {
                        $("#reconfirm-budget-submit").html('Reenviar Orçamento');
                        document.getElementById("reconfirm_token").setAttribute("value", data.token);
                    }
                }
            });

            return false;
        });
    });

});