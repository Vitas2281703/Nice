let gap1 = 120;

const carousel1 = document.getElementById("clients_carousel-block"),
    content1 = document.getElementById("clients_carousel-content"),
    next1 = document.getElementById("clients_carousel-paginator_next"),
    prev1 = document.getElementById("clients_carousel-paginator_prev");

let width1 = carousel1.offsetWidth;
window.addEventListener("resize", e => {
    width1 = carousel1.offsetWidth;
    gap1 = 50;
});

next1.addEventListener("click", e => {
    carousel1.scrollBy(width1 + gap1, 0);
    if (carousel1.scrollWidth !== 0) {
        prev1.style.visibility = "visible";
    }
    if (content1.scrollWidth - width1 - gap1 <= carousel1.scrollLeft + width1) {
        next1.style.visibility = "hidden";
    }
});
prev1.addEventListener("click", e => {
    carousel1.scrollBy(-(width1 + gap1), 0);
    if (carousel1.scrollLeft - width1 - gap1 <= 0) {
        prev1.style.visibility = "hidden";
    }
    if (!content1.scrollWidth - width1 - gap1 <= carousel1.scrollLeft + width1) {
        next1.style.visibility = "visible";
    }
});



