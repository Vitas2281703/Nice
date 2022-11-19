var carouselBlocks = document.getElementsByClassName('carousel-block');
var carouselItems = [];
var slides = [];
var activeSlides = [];
var left = [];
const windowWidth = window.screen.width;

for(let i = 0; i<carouselBlocks.length; i++){
    let carouselItemsBuf = carouselBlocks[i].querySelectorAll('.carousel-item');
    carouselItems.push(carouselItemsBuf);
    let slides_count = Math.ceil(carouselItemsBuf.length / parseInt(carouselBlocks[i].offsetWidth / carouselItemsBuf[0].offsetWidth));
    slides.push(slides_count);
    activeSlides.push(1);
}

function slideLeft(el, slide, width){
    console.log((-1 * slide))
    el.style.left = (-1 * slide * width)  + 'px'
}

function carousel(){
    let widthSlide = 1320;
    if (windowWidth > 900){
        for (let i = 1; i < carouselBlocks.length; i++){
            for (let j = 0; j < carouselItems.length; j++) {
                console.log('j' + j);
                console.log(carouselItems.length);
                slideLeft(carouselBlocks[i], j, widthSlide);
            }
        }
    }
}

setInterval(carousel, 2000);
