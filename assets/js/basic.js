jQuery(document).ready(function ($) {

    // Add class in navigation bar

    $(window).scroll(function () {
        var height = $(window).scrollTop();
        if (height > 200) {
            $('.main-navigation').addClass('fixed');
        } else {
            $('.main-navigation').removeClass('fixed');
        }
    });

    // Added class on dropdown menu span

    if ($(document).width() < 1200) {
        var $menu_item = $('.menu-item-has-children');

        $menu_item.append('<span class="caret"></span>');

        $('.caret').click(function () {
            $(this).parent().toggleClass('menu-open').siblings().removeClass('menu-open');
        });
    }

    // Smooth Scrolling For Buy Button To Its Content

    $('.btn-buynow').click(function (event) {
        event.preventDefault(event);
        $('html,body').animate({
            scrollTop: $(this.hash).offset().top
        }, 1000);
    });

    // To top Java Script

    $(window).scroll(function () {
        var height = $(window).scrollTop();
        if (height >= 200) {
            $('#up-btn').addClass('ayotothetop');
        } else {
            $('#up-btn').removeClass('ayotothetop');
        }
    });
    $('#up-btn').click(function () {
        $('html, body').animate({
            scrollTop: 0
        }, 1000);
    });

    // Protfolio Gallery jQuery

    $(function () {
        var selectedClass = "";
        $(".filter").click(function () {
            selectedClass = $(this).attr("data-rel");
            $("#gallery").fadeTo(100, .1);
            $("#gallery li").not("." + selectedClass).fadeOut().removeClass('animation');
            setTimeout(function () {
                $("." + selectedClass).fadeIn().addClass('animation');
                $("#gallery").fadeTo(300, 1);
            }, 300);
        });
    });

    $('.btn-uni.filter').click(function(){
        $(this).addClass('active').siblings().removeClass('active');
    });

    // Contact Form Seven Added Classs On Textarea P

    $('.contact-form .wpcf7-form-control-wrap').parent().addClass('inline');
    $('.contact-form .your-message').parent().removeClass('inline');

});