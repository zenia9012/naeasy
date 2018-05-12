;(function ($, underfind) {
    'use strict';

    let marketing = $('#marketing-tab');
    let business = $('#bisnes-tab');
    let develop = $('#develop-tab');
    let smm = $('#smm-tab');
    let email = $('#email-tab');
    let tabs = $('.tabs');
    let border = $('.nav-tabs-justified > li > a, .nav-tabs.nav-justified > li > a');

    marketing.click(function () {
        tabs.css('borderColor', '#008E96');
        border.css('borderColor', '#008E96');
    });

    business.click(function () {
        tabs.css('borderColor', '#F04F2E');
        border.css('borderColor', '#F04F2E');
    });

    develop.click(function () {
        tabs.css('borderColor', '#F7941E');
        border.css('borderColor', '#F7941E');
    });

    smm.click(function () {
        tabs.css('borderColor', '#EE2A7B');
        border.css('borderColor', '#EE2A7B');
    });

    email.click(function () {
        tabs.css('borderColor', '#D72F30');
        border.css('borderColor', '#D72F30');
    });



})(jQuery);