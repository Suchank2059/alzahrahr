document.addEventListener("livewire:navigated", function () {
    let currentSlide = 0;
    const slides = document.querySelectorAll(".carousel-item");

    const showSlide = (n) => {
        if (n >= slides.length) {
            currentSlide = 0;
        } else if (n < 0) {
            currentSlide = slides.length - 1;
        } else {
            currentSlide = n;
        }

        slides.forEach((slide, index) => {
            if (index === currentSlide) {
                slide.style.display = "block";
                slide.classList.add(
                    "animate__animated",
                    "animate__slideInRight"
                );
            } else {
                slide.style.display = "none";
                slide.classList.remove(
                    "animate__animated",
                    "animate__slideInLeft"
                );
            }
        });
    };

    const nextSlide = () => {
        showSlide(currentSlide + 1);
    };

    const prevSlide = () => {
        showSlide(currentSlide - 1);
    };

    const autoSlide = () => {
        nextSlide();
    };

    autoSlide();

    setInterval(autoSlide, 2000);

    document.addEventListener("livewire:navigated", () => {
        setTimeout(() => {
            showSlide(currentSlide);
        }, 1);
    });
});
