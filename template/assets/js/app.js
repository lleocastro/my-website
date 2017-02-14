jQuery(function($) {
    var visibleHeight = $(window).height();
    var visibleWidth  = $(window).width();

    // Load Full Image
    $(".backimage-full").css({'height': (visibleHeight - 50) + 'px'});
    $(window).resize(function () {
        'use strict',
            $(".backimage-full").css({'height': (visibleHeight - 50) + 'px'});
    });

    // Active WOW
    var wow = new WOW({
        boxClass:     'wow',
        animateClass: 'animated',
        offset:       10,
        mobile:       true,
        live:         true
    }).init();

    // Map resize
    $("#map").css({'width': (visibleWidth) + 'px'});
    $(window).resize(function () {
        'use strict',
            $("#map").css({'width': (visibleWidth) + 'px'});
    });

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

    // Navigation Scroll
    $(window).scroll(function(event) {
        Scroll();
    });

    // Navbar Transition Scroll
    function Scroll() {
        var contentTop      =   [];
        var contentBottom   =   [];
        var winTop      =   $(window).scrollTop();
        var rangeTop    =   30;
        $('.navbar-nav').find('a.scroll').each(function() {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            contentTop.push(target.offset().top - rangeTop);
            contentBottom.push(target.offset().top + $( $(this).attr('href') ).height());
        });
        $.each( contentTop, function(i){
            if (winTop > contentTop[i] - rangeTop) {
                $('.navbar-nav li')
                    .removeClass('active')
                    .eq(i).addClass('active');
            }
        });
    }

    // Progress Bar Counter
    $('.progress').on('inview', function(event, isInView) {
        if (isInView) {
            // Active countTo plugin
            $('.progress-label').countTo({
                formatter: function (value, options) {
                    return value.toFixed(options.decimals) + "%";
                }
            });

            $(this).unbind('inview');
        }
    });

    // Ajax Action Form
    $(document).ready(function() {
        $('#action-form').submit(function(event) {
            event.preventDefault();
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
                    } else {
                        data.errors.forEach(function(error, index) {
                            toastr.warning(error);
                        });

                        document.getElementById("action_token").setAttribute("value", data.token);
                    }
                }
            });

            $(".contact-form #name").prop('readonly', true);
            $(".contact-form #email").prop('readonly', true);
            $(".contact-form #subject").prop('readonly', true);
            $(".contact-form #message").prop('readonly', true);

            document.getElementById("message-submit").setAttribute("type", "button");
            $(".contact-form .callback div.alert").remove();
            $(".contact-form .callback").append(
                "<div class='alert alert-success'>" +
                "Olá! Como você me enviou seu email, agora preciso que você atualize a pagina para poder me " +
                "enviar uma mensagem. 'Questões de segurança'. Obrigado :)" +
                "</div>"
            );

            return false;
        });
    });

    // Ajax Message Form
    $(document).ready(function() {
        $('#message-form').submit(function(event) {
            event.preventDefault();
            $.ajax({
                url: $('#message-form').attr('action'),
                type: 'POST',
                data: $(this).serialize(),
                success: function(data) {
                    data = $.parseJSON(data);
                    if (data.status) {
                        $("#message-submit").removeClass("btn-default").addClass("registered").html(
                            '<i class="material-icons" style="vertical-align: -29%">done</i>'
                            + ' Enviado!'
                        );
                        document.getElementById("message-submit").setAttribute("type", "button");

                        jQuery.fn.reset = function () {
                            $(this).each(function () {
                                this.reset();
                            });
                        };
                        $("#message-form").reset();
                    } else {
                        data.errors.forEach(function(error, index) {
                            toastr.warning(error);
                        });

                        document.getElementById("message_token").setAttribute("value", data.token);
                    }
                }
            });

            $(".to-action #email").prop('readonly', true);
            document.getElementById("action-submit").setAttribute("type", "button");
            $(".to-action .callback div.alert").remove();
            $(".to-action .callback").append(
                "<div class='alert alert-success'>" +
                    "Olá! Como você me enviou uma mensagem, agora preciso que você atualize a pagina para poder me " +
                    "enviar seu email. 'Questões de segurança'. Obrigado :)" +
                "</div>"
            );

            return false;
        });
    });

});
