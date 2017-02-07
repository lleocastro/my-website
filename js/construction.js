$(function() {
    var visibleHeight = $(window).height();

    $(".backimage-full").css({'height': (visibleHeight) + 'px'});
    $(window).resize(function () {
        'use strict',
            $(".backimage-full").css({'height': (visibleHeight) + 'px'});
    });

    //Active WOW.js
    var wow = new WOW({
        boxClass:     'wow',
        animateClass: 'animated',
        offset:       10,
        mobile:       true,
        live:         true
    }).init();

});