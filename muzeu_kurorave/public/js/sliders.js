// This file manages the functionality for sliders in the gallery, allowing users to navigate through images.

document.addEventListener('DOMContentLoaded', function() {
    const sliders = document.querySelectorAll('.slider');
    sliders.forEach(slider => {
        let currentIndex = 0;
        const slides = slider.querySelectorAll('.slide');
        const totalSlides = slides.length;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.style.display = (i === index) ? 'block' : 'none';
            });
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % totalSlides;
            showSlide(currentIndex);
        }

        function prevSlide() {
            currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
            showSlide(currentIndex);
        }

        slider.querySelector('.next').addEventListener('click', nextSlide);
        slider.querySelector('.prev').addEventListener('click', prevSlide);

        showSlide(currentIndex);
    });
});