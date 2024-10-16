let currentSlide = 0;
const slides = document.querySelectorAll('.slider-item');
const totalSlides = slides.length;
const sliderWrapper = document.querySelector('.slider-wrapper');

function showSlide() {
    if (currentSlide < 0) {
        currentSlide = totalSlides - 1;
    } else if (currentSlide >= totalSlides) {
        currentSlide = 0;
    }
    const translateX = -currentSlide * 100 + '%';
    sliderWrapper.style.transform = `translateX(${translateX})`;
}

function prevSlide() {
    currentSlide--;
    showSlide();
}

function nextSlide() {
    currentSlide++;
    showSlide();
}

// Fungsi otomatis: Ganti slide setiap 3 detik
function autoSlide() {
    setInterval(function () {
        currentSlide++;
        showSlide();
    }, 3000); // Ganti angka ini dengan durasi otomatis (dalam milidetik)
}

// Panggil fungsi otomatis
autoSlide();