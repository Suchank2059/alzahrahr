document.addEventListener("livewire:init", () => {
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        autoplay: true,
        autoPlayTimeout: 50,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 5,
            },
        },
    });
});
