+function ($) {
    "use strict";

    let lampSmall = $('#lamp_small_img');
    let lampBig = $('.lamp_big');

    lampSmall.hover(
        function () {
            lampSmall.animate({marginTop: '10px', width: '146px', height: '144px', }, 'slow')
        },
        function () {
            lampSmall.animate({width: '114px', height: '132px', marginTop: '20px'}, 'slow')
        });

    lampBig.hover(
        function () {
            lampBig.animate({width: '300px', height: '325px', marginTop: '5px'}, 'slow')
        },
        function () {
            lampBig.animate({width: '288px', height: '300px', marginTop: '30px'}, 'slow')
        });




}(jQuery);