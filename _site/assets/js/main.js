// fade nav header
$(window).scroll(function () {
    if ($(window).scrollTop() > 50) {
        $("header").addClass("navbg-in");
    } else {
        $("header").removeClass("navbg-in");
    };
});

// add hover to cards when scrolling over them

var card = $(".card").offset();

$(window).scroll(function () {
    if ($(window).scrollTop() < card.top && $(window).scrollTop() > 200) {
        $('p').addClass('navbg-in');
    } else {
        $('p').removeClass('navbg-in');
    };
});
