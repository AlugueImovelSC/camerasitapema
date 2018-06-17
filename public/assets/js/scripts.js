$(function () {

    $('.nav-link').click(function () {
        var link = $(this).attr('href');
        var n = $(link).offset().top;

        $('html, body').animate({
            scrollTop: n - 40
        });
    });

    $('#telefone').focusout(function () {
        var phone, element;
        element = $(this);
        element.unmask();
        phone = element.val().replace(/\D/g, '');
        if (phone.length > 10) {
            element.mask("(99) 99999-9999");
        } else {
            element.mask("(99) 9999-99999");
        }
    }).trigger('focusout');

});