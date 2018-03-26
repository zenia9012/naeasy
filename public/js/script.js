+function ($) {
    "use strict";

    setTimeout(titleFade, 2000);

    function titleFade() {
        let inside = $('.inside');

        inside.animate({height: '70%', backgroundColor: 'red'}, "slow");
        inside.animate({width: '60%'}, "slow");
        inside.animate({height: '35%'}, "slow");
        inside.animate({width: '35%'}, "slow", 'linear', function () {
            welcomeFade();
        });
    }

    function welcomeFade() {
        $('#welcome').animate({left: 'fadeOut', opacity: 'hide'}, 'slow', 'linear');
    }


}(jQuery);