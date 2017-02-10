jQuery(function($) {
    var visibleHeight = $(window).height();

    $(".backimage-full").css({'height': (visibleHeight) + 'px'});
    $(window).resize(function () {
        'use strict',
            $(".backimage-full").css({'height': (visibleHeight) + 'px'});
    });

});