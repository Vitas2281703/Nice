let gap = 120;

const carousel = document.getElementById("worker_carousel-block"),
   content = document.getElementById("worker_carousel-content"),
   next = document.getElementById("worker_carousel-paginator_next"),
   prev = document.getElementById("worker_carousel-paginator_prev");

let width = carousel.offsetWidth;
window.addEventListener("resize", e => {
    width = carousel.offsetWidth;
    gap = 50;
});

next.addEventListener("click", e => {
    carousel.scrollBy(width + gap, 0);
    if (carousel.scrollWidth !== 0) {
        prev.style.visibility = "visible";
    }
    if (content.scrollWidth - width - gap <= carousel.scrollLeft + width) {
        next.style.visibility = "hidden";
    }
});
prev.addEventListener("click", e => {
    carousel.scrollBy(-(width + gap), 0);
    if (carousel.scrollLeft - width - gap <= 0) {
        prev.style.visibility = "hidden";
    }
    if (!content.scrollWidth - width - gap <= carousel.scrollLeft + width) {
        next.style.visibility = "visible";
    }
});



