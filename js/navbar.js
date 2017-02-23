
    // Sticky Header
    $(window).scroll(function() {
        if ($(window).scrollTop() > 100) {
            $('.mainBar').addClass('downBar');
        } else {
            $('.mainBar').removeClass('downBar');
        }
    });

    // Mobile Navigation
    $('.mobileToggle').click(function() {
        if ($('.mainBar').hasClass('openNav')) {
            $('.mainBar').removeClass('openNav');
        } else {
            $('.mainBar').addClass('openNav');
        }
    });

    $('.mainBar li a').click(function() {
        if ($('.mainBar').hasClass('openNav')) {
            $('.navigation').removeClass('openNav');
            $('.mainBar').removeClass('openNav');
        }
    });

    // navigation scroll
    $('.navScroll a').click(function(event) {
        var id = $(this).attr("href");
        var offset = 70;
        var target = $(id).offset().top - offset;
        $('.socialIcon').animate({
            scrollTop: target
        }, 500);
        event.preventDefault();
    });

