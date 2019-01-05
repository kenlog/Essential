/*
 * Essential for kanboard
 * Licensed under the MIT license - Essential/LICENSE
 * https://github.com/kenlog/Essential
 * Copyright (c) 2019 Valentino Pesce - https://iltuobrand.it
 */

$(window).scroll(function() {
    var height = $(window).scrollTop();
    if (height > 200) {
        $('#backToTop').fadeIn();
    } else {
        $('#backToTop').fadeOut();
    }
});

$(document).ready(function() {
    $("#backToTop").click(function(event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

});