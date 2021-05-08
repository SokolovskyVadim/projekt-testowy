jQuery(document).ready(function($) {
    $('.main-slider').slick({
        dots: true,
        arrows:true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        prevArrow: $('.main-slider__prev'),
        nextArrow: $('.main-slider__next'),
    });
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.main-header-wrapper').addClass('active');
        } else {
            $('.main-header-wrapper').removeClass('active');
        }
    });
});