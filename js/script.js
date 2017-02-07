jQuery(function($) {
    var visibleHeight = $(window).height();
    var visibleWidth = $(window).width();

    //
    $(".backimage-full").css({'height': (visibleHeight - 50) + 'px'});
    $(window).resize(function () {
        'use strict',
            $(".backimage-full").css({'height': (visibleHeight - 50) + 'px'});
    });

    //Active WOW
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

    //Scrolling
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

    // User define function
    function Scroll() {
        var contentTop      =   [];
        var contentBottom   =   [];
        var winTop      =   $(window).scrollTop();
        var rangeTop    =   30;

        // ...
        $('.navbar-nav').find('a.scroll').each(function() {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            contentTop.push(target.offset().top - rangeTop);
            contentBottom.push(target.offset().top + $( $(this).attr('href') ).height());
        });

        // ...
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
            $('.progress-label').countTo();

            $('.progress-label').countTo({
                formatter: function (value, options) {
                    return value.toFixed(options.decimals) + "%";
                }
            });

            // ...
            $(this).unbind('inview');
        }
    });

});
