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
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
        $('.scrollup').fadeIn();
        } else {
        $('.scrollup').fadeOut();
        }
    });
    $('.scrollup').click(function () {
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
    $("#form-send").submit(function (e) {
        e.preventDefault();
        $.post("mailsender.php", $(this).serialize(), function (data) {
            if (data == 'error_tel') {
                $("#form-send").append("<p class='error__number'>Неправильно введен номер</p>");
            } else {
                $("#form-send").html("<p>Спасибо, Вам перезвонят в ближайшее время</p>");
            }
        });
    });
});