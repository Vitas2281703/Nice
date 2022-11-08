@extends('layouts/layout')

@section('header')
    @include ('inc/header', [
    'styles'=>[
        'commonStyle',
        'mainPage',
        'mapStyle',
        ]
        ])
@endsection

@section('content')
<div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper" id="menus">
        <!-- Slides -->
        <div class="swiper-slide card">
            <div class="slider-container" >
                <div class="slide-text">
                    <h1>
                        Позаботимся<br />
                        о вашем <span style="font-weight: 500">компьютере</span>
                    </h1>
                    <p>
                        Найдем проблему, устраним поломку почистим и смажем, обновим
                        железо
                    </p>
                    <a class="HOVER" href="#usl"><span></span><text>Узнать стоимость</text></a>
                </div>
                <div class="slide-img" style = "margin-left: 150px;">
                    <img
                        class="mk"
                        src="assets\images\swiperSliderSlide1.svg"
                        alt=""
                    />
                </div>
            </div>
        </div>

        <div class="swiper-slide card">
            <div class="slider-container">
                <div class="slide-text">
                    <h1>
                        Позаботимся <br />о вашем
                        <span style="font-weight: 500">ноутбуке</span>
                    </h1>
                    <p>Улучшим производительность, заменим матрицу, поставим SSD.</p>
                    <a class="HOVER" href="#usl"><span></span><text>Узнать стоимость</text></a>
                </div>
                <div class="slide-img" style = "margin-left: 130px;">
                    <img
                        src="assets\images\swiperSliderSlide2.svg"
                        alt=""
                    />
                </div>
            </div>
        </div>

        <div class="swiper-slide card">
            <div class="slider-container">
                <div class="slide-text">
                    <h1 style="width: 500px">
                        Позаботимся<br />
                        о вашем <span style="font-weight: 500">смартфоне</span>
                    </h1>
                    <p>
                        Заменим экран, устраним внутренние проблемы и сделаем это
                        быстро.
                    </p>
                    <a class="HOVER" href="#usl"><span></span><text>Узнать стоимость</text></a>

                </div>
                <div class="slide-img">
                    <img
                        src="assets\images\swiperSliderSlide3.svg"
                        alt=""
                    />
                </div>
            </div>
        </div>

        <div class="swiper-slide card">
            <div class="slider-container">
                <div class="slide-text">
                    <h1>
                        Позаботимся<br />
                        о ваших <span style="font-weight: 500">комплектующих</span>
                    </h1>
                    <p>
                        Подберем мощное железо для вашего устройства, доставим и
                        установим.
                    </p>
                    <a class="HOVER"  href="#usl"><span></span><text>Узнать стоимость</text></a>
                </div>
                <div class="slide-img" style = "margin-left: 150px;">
                    <img
                        src="assets\images\swiperSliderSlide4.svg"
                        alt=""
                    />
                </div>
            </div>
        </div>

    </div>

    <div class="swiper-pagination mobile-slider-pag"></div>
</div>


<div class="marquee-right">
    @for($i=0;$i<9;$i++)
        <span class="marquee-item">СКИДКА 30% НА ДИАГНОСТИКУ</span>
    @endfor
</div>













<div class="container">
    <div class="promo">
        <div class="banners">
            <a href="#" class="banner-link">
                <img src="assets\images\banner-1.png" alt="" class="banner">
                <div class="banner-hover"></div>
            </a>
            <a href="#" class="banner-link">
                <img src="assets\images\banner-2.png" alt="" class="banner">
                <div class="banner-hover"></div>
            </a>
        </div>

    </div>
</div>




<div class="container-text" id="onas">
    <h1 class="rks-h1">Работаем как для своих &#8212; честно, быстро, на совесть <img src="assets\images\okHand.svg" alt=""></h1>
    <div class="rks">
        <div class="rks-column">
            <img src="assets\images\advantageChip.svg" style = "height: 36px; width: 36px;" alt="">
            <p>
                Работаем по прайс-листу и рассчитываем <span style = "font-weight: 600;">точную стоимость</span> перед стартом работ. Подробно объясняем стоимость.
            </p>
        </div>
        <div class="rks-column" >
            <img src="assets\images\advantageTime.svg" style = "height: 36px; width: 32px;" alt="">
            <p>
                Сообщаем <span style = "font-weight: 600;">честные сроки</span> услуги, рассчитываем сроки доставки комплектующих и держим вас в курсе этапов работ.
            </p>
        </div>
        <div class="rks-column">
            <img src="assets\images\advantageGuard.svg" style = "height: 36px; width: 33px;" alt="">
            <p>
                Предоставляем гарантию на услуги <span style = "font-weight: 600;">до 1 года</span>. Несем ответственность за технику, поэтому работаем на совесть.
            </p>
        </div>
    </div>

    <div class="rks-mobile">
        <button class="accordion">
            <img src="assets\images\advantageChip.svg"
                 style="
                 height: 36px;
                 width: 36px;
                 margin-left: -2px;
                 margin-right: 2px;"
                 alt="">
            <p>Стоимость</p>
            <img style = "margin-top: 17px; margin-left: 115px; width: 14px; height: 8px;" class="strelka" src="assets\images\arrowDown.png" alt="">
        </button>
        <div class="panel">
            <p>
                Работаем по прайс-листу и рассчитываем <span style="font-weight: 600;">точную стоимость</span> перед стартом работ.
                Подробно объясняем стоимость.
            </p>
        </div>

        <button class="accordion">
            <img src="assets\images\advantageTime.svg" style="height: 36px; width: 32px; margin-right: 4px;" alt="">
            <p>Сроки</p>
            <img style = "margin-top: 17px; margin-left: 154px;width: 14px; height: 8px;" class="strelka" src="assets\images\arrowDown.png" alt="">
        </button>
        <div class="panel">
            <p>
                Сообщаем <span style="font-weight: 600;">честные сроки</span> услуги, рассчитываем сроки доставки комплектующих и
                держим вас в курсе этапов работ.
            </p>
        </div>

        <button class="accordion">
            <img src="assets\images\advantageGuard.svg"
                 style="height: 36px; width: 33px; margin-right: 3px;" alt="">
            <p>Гаратии</p>
            <img style = "margin-top: 17px; margin-left: 137px; width: 14px; height: 8px;"
                 class="strelka"
                 src="assets\images\arrowDown.png"
                 alt="">
        </button>
        <div class="panel">
            <p>
                Предоставляем гарантию на услуги <span style="font-weight: 600;">до 1 года</span>. Несем ответственность за технику,
                поэтому работаем на совесть.
            </p>
        </div>
    </div>

</div>


<div class="howWeWork_block">
    <div class="container">
        <div class="howWeWork-item_wrapper">
            <div class="howWeWork-item">
                <span class="howWeWork-item_step">1</span>
                <p class="howWeWork-item_text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Amet atque eaque illo incidunt nam nihil, numquam tempore
                    ullam voluptatibus. Aliquid cumque esse exercitationem illo
                    ipsum magnam nesciunt officia quas tempore?
                </p>
            </div>
        </div>

        <div class="howWeWork-item_wrapper">
            <div class="howWeWork-item">
                <span class="howWeWork-item_step">2</span>
                <p class="howWeWork-item_text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Amet atque eaque illo incidunt nam nihil, numquam tempore
                    ullam voluptatibus. Aliquid cumque esse exercitationem illo
                    ipsum magnam nesciunt officia quas tempore?
                </p>
            </div>
        </div>

        <div class="howWeWork-item_wrapper">
            <div class="howWeWork-item">
                <span class="howWeWork-item_step">3</span>
                <p class="howWeWork-item_text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Amet atque eaque illo incidunt nam nihil, numquam tempore
                    ullam voluptatibus. Aliquid cumque esse exercitationem illo
                    ipsum magnam nesciunt officia quas tempore?
                </p>
            </div>
        </div>

        <div class="howWeWork-item_wrapper">
            <div class="howWeWork-item">
                <span class="howWeWork-item_step">4</span>
                <p class="howWeWork-item_text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Amet atque eaque illo incidunt nam nihil, numquam tempore
                    ullam voluptatibus. Aliquid cumque esse exercitationem illo
                    ipsum magnam nesciunt officia quas tempore?
                </p>
            </div>
        </div>

        <div class="howWeWork-item_wrapper">
            <div class="howWeWork-item">
                <span class="howWeWork-item_step">5</span>
                <p class="howWeWork-item_text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Amet atque eaque illo incidunt nam nihil, numquam tempore
                    ullam voluptatibus. Aliquid cumque esse exercitationem illo
                    ipsum magnam nesciunt officia quas tempore?
                </p>
            </div>
        </div>
    </div>
</div>







<div class="container-text" id="otziv">
    <h1 class="otz-h1"> — А как же отзывы? <br> — Здесь их не будет <img src="assets\images\monkey.svg"></h1>
    <div class="otz">
        <div class="otz-column otziv_first">
            <p>
                Мы привыкли, что у любого сервиса должен быть блок
                с яркими и положительными отзывами, который должен
                убедить вас выбрать именно его.
            </p>
        </div>
        <div class="otz-column">
            <p>
                Если мы смогли заинтересовать вас, предлагаем прийти
                к нам в гости и оценить все своими глазами. Будем рады
                вам и вашему мнению на <a href="#" style="color: #5888EA;">фламп</a>. :)
            </p>
        </div>

    </div>
</div>







<div class="marquee-left">
    @for($i=0;$i<9;$i++)
        <span class="marquee-item">НУ ВЫ ЗАБЕГАЙТЕ В ГОСТИ, ЕСЛИ ЧТО</span>
    @endfor
</div>









@include('inc/googleMap')



@endsection

@section('footer')
    @include('inc/footer', [
    'scripts'=>[
        'accordion',
        'swiperSlider',
        'marquee',
        'menuBurger'
        ]
        ])
@endsection
