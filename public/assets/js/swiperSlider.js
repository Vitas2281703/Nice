import Swiper from "https://unpkg.com/swiper/swiper-bundle.esm.browser.min.js";

const swiper = new Swiper(".swiper-container", {
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    speed: 500,
    effect: 'fade',
    autoplay:{
        delay:4000,
    },
    loop: false
});
