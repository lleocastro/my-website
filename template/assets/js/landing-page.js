jQuery(function($) {
    // Scrolling
    $(document).ready(function() {
        // Add smooth scrolling to all links
        $(".scroll").on('click', function(event) {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top - 55
                    }, 1500);

                    return false;
                }
            }
        });
    });

    // Ajax Action Form
    $(document).ready(function() {
        $('#action-form').submit(function(event) {
            event.preventDefault();

            $("#action-submit").html(
                '<i class="material-icons" style="vertical-align: -29%">loop</i>'
                + ' Cadastrando...'
            );

            $.ajax({
                url: $('#action-form').attr('action'),
                type: 'POST',
                data: $(this).serialize(),
                success: function(data) {
                    data = $.parseJSON(data);
                    if (data.status) {
                        $("#action-submit").removeClass("btn-default").addClass("registered").html(
                            '<i class="material-icons" style="vertical-align: -29%">done</i>'
                            + ' Cadastrado!'
                        );
                        document.getElementById("action-submit").setAttribute("type", "button");

                        jQuery.fn.reset = function () {
                            $(this).each(function () {
                                this.reset();
                            });
                        };
                        $("#action-form").reset();

                        $(".to-action .callback div.alert").remove();
                        $(".to-action .callback").append(
                            "<div class='alert alert-success'>Acabei de enviar um email de confirmação para seu email. :)</div>"
                        );

                    } else {
                        $("#action-submit").html(
                            '<i class="material-icons" style="vertical-align: -29%">verified_user</i>'
                            + ' Cadastrar'
                        );

                        data.errors.forEach(function(error) {
                            toastr.warning(error);
                        });

                        document.getElementById("action_token").setAttribute("value", data.token);
                    }
                }
            });

            return false;
        });
    });

});