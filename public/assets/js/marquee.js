//Бегущая строка
//Правая
$(function () {
    $('.marquee-right').marquee({
        allowCss3Support: true,
        css3easing: 'linear',
        easing: 'linear',
        delayBeforeStart: 1000,
        direction: 'right',
        duplicated: true,
        duration: 10000,
        gap: 70,
        pauseOnCycle: false,
        pauseOnHover: false,
        startVisible: false
    });
});
//Левая
$(function () {
    $('.marquee-left').marquee({
        allowCss3Support: true,
        css3easing: 'linear',
        easing: 'linear',
        delayBeforeStart: 1000,
        direction: 'left',
        duplicated: true,
        duration: 14000,
        gap: 70,
        pauseOnCycle: false,
        pauseOnHover: false,
        startVisible: false
    });
});
