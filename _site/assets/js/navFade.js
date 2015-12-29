$(window).scroll(function () {
    if ($(window).scrollTop() > 50) {
        $('header').addClass('navbg-in');
    } else {
        $('header').removeClass('navbg-in');
    };
});

