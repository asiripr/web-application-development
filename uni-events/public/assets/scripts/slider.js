const slides = document.querySelector('.slides');
const homeslides = document.querySelectorAll('.homeslide');
const prevBtn = document.getElementById('prev-btn');
const nextBtn = document.getElementById('next-btn');
let currentSlide = 0;
const slideWidth = homeslides[0].offsetWidth; // Get the width of a slide

function showSlide(n) {
    if (n < 0) {
        currentSlide = homeslides.length - 1;
    } else if (n >= homeslides.length) {
        currentSlide = 0;
    }
    slides.style.transform = `translateX(-${currentSlide * slideWidth}px)`; // Use px and slideWidth
}

function nextSlide() {
    showSlide(currentSlide + 1);
}

function prevSlide() {
    showSlide(currentSlide - 1);
}

nextBtn.addEventListener('click', nextSlide);
prevBtn.addEventListener('click', prevSlide);

// Ensure the initial slide is shown after the DOM is fully loaded, especially if images affect layout.
window.addEventListener('load', () => {
    showSlide(currentSlide);
});

// Added for responsiveness
window.addEventListener('resize', () => {
    const slideWidth = homeslides[0].offsetWidth;
    showSlide(currentSlide);
});