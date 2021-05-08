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
});