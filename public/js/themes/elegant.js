// custom.js

$(document).ready(function(){
    let currentIndex = 0;
    const slides = $('.carousel-slide');
    const totalSlides = slides.length;

    function showSlide(index) {
        slides.removeClass('active').eq(index).addClass('active');
        $('.carousel-content').removeClass('active').eq(index).addClass('active');
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % totalSlides;
        showSlide(currentIndex);
    }

    // Initial display
    showSlide(currentIndex);

    // Automatically slide every 5 seconds
    setInterval(nextSlide, 5000);
});




// For the header toggler
function toggleMenu() {
    const mobileNav = document.getElementById("mobile-nav");
    mobileNav.classList.toggle("active");
}
