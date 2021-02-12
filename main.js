/*Appearancing of hamburger menu by click on the icon*/
$(document).ready(function () {
    $('.menu-toggler').on('click', function () {
        $(this).toggleClass('open');
        $('.top-nav').toggleClass('open');

    });


    /*hamburger*/

    $('.top-nav .nav-link').on('click', function () {
        $('.menu-toggler').removeClass('open');
        $('.top-nav').removeClass('open');
    });


    /*Smooth scrolling*/
    $('nav a[href*="#"]').on('click', function () {
        $('html, body').animate(keyframes, {
            scrollTop: $($(this).attr('href')).offset().top - 100
        }, options, 2000);
    });

    $('#up').on('click', function () {
        $('html, body').animate(keyframes, {
            scrollTop: 0
        }, options, 2000);
    });


    /*Initializing animation efect*/
    AOS.init({
        easing: 'ease',
        duration: 1800,
        once: true
    });
});