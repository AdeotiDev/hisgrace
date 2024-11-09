// custom.js

$(document).ready(function(){
    $('.carousel-wrapper').slick({
        dots: true,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        autoplay: true,
        autoplaySpeed: 4000,
        arrows: false // Hide arrows, or set to true if preferred
    });
});
