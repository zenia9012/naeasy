+function ($) {
    "use strict";

    let lampSmall = $('#lamp_small_img');
    let lampBig = $('.lamp_big');
    let phone = $('.btn-modal');
    let sendKp = $('#kp');

    sendKp.hover(
        function () {
            $('#email_send').removeClass('fa-envelope').addClass('fa-envelope-open');
        },
        function () {
            $('#email_send').removeClass('fa-envelope-open').addClass('fa-envelope');
        });

    // lampSmall.hover(
    //     function () {
    //         lampSmall.animate({marginTop: '10px', width: '146px', height: '144px', }, 'slow')
    //     },
    //     function () {
    //         lampSmall.animate({width: '114px', height: '132px', marginTop: '20px'}, 'slow')
    //     });
    //
    // lampSmall.hover(
    //     function () {
    //         lampSmall.animate({marginTop: '10px', width: '146px', height: '144px', }, 'slow')
    //     },
    //     function () {
    //         lampSmall.animate({width: '114px', height: '132px', marginTop: '20px'}, 'slow')
    //     });
    //
    // lampBig.hover(
    //     function () {
    //         lampBig.animate({width: '300px', height: '325px', marginTop: '5px'}, 'slow')
    //     },
    //     function () {
    //         lampBig.animate({width: '288px', height: '300px', marginTop: '30px'}, 'slow')
    //     });


    activeTab(getParam('active'));

    function getParam(paramName) {
        let searchParam = new URLSearchParams(window.location.search);
        return searchParam.get(paramName);
    }

    function activeTab(tabName) {

        if (!tabName){
            tabName = 'marketing'
        }

        $('#'+ tabName +'-tab').parent('li').addClass('active');
        $('#'+ tabName).addClass('active in');
    }




}(jQuery);