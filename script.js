$(document).ready(function () {
    $('.padrao-slider').slick({
        arrows: false,
        dots: true,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 3000
    });
    $('.prevSlidebtn').on('click', function () {
        $('.padrao-slider').slick('slickPrev');
    });

    $('.nextSlidebtn').on('click', function () {
        $('.padrao-slider').slick('slickNext');
    });
});

document.getElementById('botaoMenu').addEventListener('click', function () {
    const nav = document.getElementById('menuMobile');
    this.classList.toggle('aberto'); 
    nav.classList.toggle('aberto');
});