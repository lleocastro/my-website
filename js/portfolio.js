jQuery(function($) {
    // Active WOW
    var wow = new WOW({
        boxClass:     'wow',
        animateClass: 'animated',
        offset:       10,
        mobile:       true,
        live:         true
    }).init();

    // Progress Bar Counter
    $('.informations').on('inview', function(event, isInView) {
        if (isInView) {
            // Active countTo plugin
            $('.counter').countTo({
                formatter: function (value, options) {
                    return value.toFixed(options.decimals);
                }
            });

            $(this).unbind('inview');
        }
    });

});
