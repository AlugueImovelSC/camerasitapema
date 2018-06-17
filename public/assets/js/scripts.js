$(function () {

    $('.nav-link').click(function () {
        var link = $(this).attr('href');
        var n = $(link).offset().top;

        $('html, body').animate({
            scrollTop: n - 40
        });
    });

});