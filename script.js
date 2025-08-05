document.addEventListener('DOMContentLoaded', function() {
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        const slides = document.getElementsByClassName("slide");
        for (let i = 0; i  slides.length) {slideIndex = 1}
        slides[slideIndex-1].style.display = "block";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
});