var carouselBlocks = document.getElementsByClassName('carousel-block');
var carouselItems = [];
var slides = [];
var activeSlides = [];
var left = [];
for(let i = 0; i<carouselBlocks.length; i++){
    let carouselItemsBuf = carouselBlocks[i].querySelectorAll('.carousel-item');
    carouselItems.push(carouselItemsBuf);
    let slides_count = Math.ceil(carouselItemsBuf.length / parseInt(carouselBlocks[i].offsetWidth / carouselItemsBuf[0].offsetWidth));
    slides.push(slides_count);
    activeSlides.push(1);
}

function slideLeft(el, slide, timePassed){
    el.style.left = (-1 * slide) * timePassed + 'px'
}

function carousel(){
    for(let i = 0; i < carouselBlocks.length; i++){
        console.log('active: i' + i + ' ' + activeSlides[i]);
        console.log('slide: i' + i + ' ' + slides[i]);
        let viewport = carouselBlocks[i].offsetWidth;
        let start = Date.now();
        let timer = setInterval(function (){

            let timePassed = Date.now() - start;

            if (timePassed >= (viewport + 140)) {
                clearInterval(timer);
                return;
            }

            slideLeft(carouselBlocks[i], j, timePassed);
            activeSlides[i] += 1;
            if (activeSlides[i] >= slides[i]){
                activeSlides[i] = 0;
            }

        }, 5000)
    }
}

setInterval(carousel, 5000);
