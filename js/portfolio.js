jQuery(function($) {
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
