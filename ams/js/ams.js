/*  [ams.js] */

jQuery( function ( $ ) {
    'use strict';


    // SmoothScroll
    $( '.am-page-scroller' ).on('click', function (e) {
        e.preventDefault();
        var target = this.hash;
        var $target = $(target);
        $('html, body').animate({
            'scrollTop': $target.offset().top
        }, 1000, 'swing');
    });


});

