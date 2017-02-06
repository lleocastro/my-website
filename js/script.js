(function (factory) {
    if (typeof define === 'function' && define.amd) {
        // AMD
        define(['jquery'], factory);
    } else if (typeof exports === 'object') {
        // CommonJS
        factory(require('jquery'));
    } else {
        // Browser globals
        factory(jQuery);
    }
}(function ($) {
    var CountTo = function (element, options) {
        this.$element = $(element);
        this.options  = $.extend({}, CountTo.DEFAULTS, this.dataOptions(), options);
        this.init();
    };

    CountTo.DEFAULTS = {
        from: 0,               // the number the element should start at
        to: 0,                 // the number the element should end at
        speed: 1000,           // how long it should take to count between the target numbers
        refreshInterval: 100,  // how often the element should be updated
        decimals: 0,           // the number of decimal places to show
        formatter: formatter,  // handler for formatting the value before rendering
        onUpdate: null,        // callback method for every time the element is updated
        onComplete: null       // callback method for when the element finishes updating
    };

    CountTo.prototype.init = function () {
        this.value     = this.options.from;
        this.loops     = Math.ceil(this.options.speed / this.options.refreshInterval);
        this.loopCount = 0;
        this.increment = (this.options.to - this.options.from) / this.loops;
    };

    CountTo.prototype.dataOptions = function () {
        var options = {
            from:            this.$element.data('from'),
            to:              this.$element.data('to'),
            speed:           this.$element.data('speed'),
            refreshInterval: this.$element.data('refresh-interval'),
            decimals:        this.$element.data('decimals')
        };

        var keys = Object.keys(options);

        for (var i in keys) {
            var key = keys[i];

            if (typeof(options[key]) === 'undefined') {
                delete options[key];
            }
        }

        return options;
    };

    CountTo.prototype.update = function () {
        this.value += this.increment;
        this.loopCount++;

        this.render();

        if (typeof(this.options.onUpdate) == 'function') {
            this.options.onUpdate.call(this.$element, this.value);
        }

        if (this.loopCount >= this.loops) {
            clearInterval(this.interval);
            this.value = this.options.to;

            if (typeof(this.options.onComplete) == 'function') {
                this.options.onComplete.call(this.$element, this.value);
            }
        }
    };

    CountTo.prototype.render = function () {
        var formattedValue = this.options.formatter.call(this.$element, this.value, this.options);
        this.$element.text(formattedValue);
    };

    CountTo.prototype.restart = function () {
        this.stop();
        this.init();
        this.start();
    };

    CountTo.prototype.start = function () {
        this.stop();
        this.render();
        this.interval = setInterval(this.update.bind(this), this.options.refreshInterval);
    };

    CountTo.prototype.stop = function () {
        if (this.interval) {
            clearInterval(this.interval);
        }
    };

    CountTo.prototype.toggle = function () {
        if (this.interval) {
            this.stop();
        } else {
            this.start();
        }
    };

    function formatter(value, options) {
        return value.toFixed(options.decimals) + '%';
    }

    $.fn.countTo = function (option) {
        return this.each(function () {
            var $this   = $(this);
            var data    = $this.data('countTo');
            var init    = !data || typeof(option) === 'object';
            var options = typeof(option) === 'object' ? option : {};
            var method  = typeof(option) === 'string' ? option : 'start';

            if (init) {
                if (data) data.stop();
                $this.data('countTo', data = new CountTo(this, options));
            }

            data[method].call(data);
        });
    };
}));

/**
 * ...
 */
$(function() {
    var visibleHeight = $(window).height();
    var visibleWidth = $(window).width();

    $(".backimage-full").css({'height': (visibleHeight - 50) + 'px'});
    $(window).resize(function () {
        'use strict',
            $(".backimage-full").css({'height': (visibleHeight - 50) + 'px'});
    });

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

    // $(document).ready(function () {
    //     $('li a').click(function (e) {
    //         e.preventDefault();
    //         document.location.hash = $(this).attr('href');
    //         $(".scroll").removeClass("active");
    //         var link = $(this).hasClass('navbar-nav li') ? $(this) : $(this).closest('ul').prev();
    //         link.addClass('active');
    //     });
    // });

    //Active WOW.js
    var wow = new WOW({
        boxClass:     'wow',
        animateClass: 'animated',
        offset:       10,
        mobile:       true,
        live:         true
    }).init();


    // Active countTo plugin
    $('.progress-label').countTo();

});
