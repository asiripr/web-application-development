const slides = document.querySelector('.slides');
const slideImages = document.querySelectorAll('.slide');
const slideCount = slideImages.length;
let currentIndex = 0;

function showNextSlide() {
    currentIndex++;
    if (currentIndex >= slideCount) {
        currentIndex = 0;
    }
    slides.style.transform = `translateX(-${currentIndex * 100}%)`;
}

setInterval(showNextSlide, 5000); // Change image every 5 seconds
