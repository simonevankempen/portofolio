$(function(){
    $(window).scroll(function() {
        if ($(this).scrollTop() >= 290) {
            $('nav.cssmenu').addClass('stickytop');
        }
        else {
            $('nav.cssmenu').removeClass('stickytop');
        }
    });
});