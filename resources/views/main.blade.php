@extends('layouts/layout')
@section('content')

@include ('inc/header')

<div class="swiper-container" style="margin-top: 170px">
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
                    <img class="mk" src="images\s1 1.svg" alt="" />
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
                    <img src="images\s2-2 1.svg" alt="" />
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
                    <img src="images\s3-4 1.svg" alt="" />
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
                    <img src="images\s4 2.svg" alt="" />
                </div>
            </div>
        </div>
    </div>

    <div class="swiper-pagination mobile-slider-pag"></div>
</div>
<div class="mobile-knopka-svyazi-block">
    <a href="#iw-modal-mobile-obrsv" class="mobile-knopka-svyazi"><span>записаться на диагностику</span></a>
</div>
<div class="marquee-right"><span style="margin-right: 70px;">СКИДКА 30% НА ДИАГНОСТИКУ</span><span style="margin-right: 70px;">СКИДКА 30% НА ДИАГНОСТИКУ</span><span style="margin-right: 70px;">СКИДКА 30% НА ДИАГНОСТИКУ</span><span style="margin-right: 70px;">СКИДКА 30% НА ДИАГНОСТИКУ</span><span style="margin-right: 70px;">СКИДКА 30% НА ДИАГНОСТИКУ</span><span style="margin-right: 70px;">СКИДКА 30% НА ДИАГНОСТИКУ</span><span style="margin-right: 70px;">СКИДКА 30% НА ДИАГНОСТИКУ</span><span style="margin-right: 70px;">СКИДКА 30% НА ДИАГНОСТИКУ</span><span style="margin-right: 70px;">СКИДКА 30% НА ДИАГНОСТИКУ</span>СКИДКА 30% НА ДИАГНОСТИКУ</div>




<div id="iw-modal" class="iw-modal">
    <div class="iw-modal-wrapper" style="position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);">
        <div class="iw-CSS-modal-inner" style = "width: 788px;height: 521px; margin: 0 auto; display: flex; align-items: center; justify-content: space-between;">
            <div class="iw-modal-header" style  = "background-color: #e6ebf1; ">
                <img src="images/logoobrsv.svg" alt="" style = "padding-left: 70px;padding-right: 31px;padding-bottom: 95px;padding-top: 88px; ">
            </div>
            <div class="iw-modal-text">
                <a href="#close" title="Закрыть" class="iw-close">×</a>

                <form id="application" action="application.php" method="POST" name="application">
                    <h1 class="form-obr-sv-h1">Очень рады, что выбрали нас!<img src="images\sign-of-the-horns_1f918 1.svg" style = "margin-bottom: -9px; margin-left: 10px;" alt=""></h1>
                    <p class="form-obr-sv-p">Мы свяжемся в вами в ближайшее время и обсудим ваш вопрос. Обещаем приложить максимальные усилия для решения проблемы.</p>
                    <div class="inputi" style = "display: flex; flex-direction: column;">
                        <div style="width: 298px; display: flex; border-bottom: 1px solid #e6ebf1;">
                            <img src="images/pers.svg" alt="">
                            <input  name="name" id="zayavkaName" maxlength="20" placeholder="Как вас зовут?" required />
                            <div id = "error"></div>
                        </div>
                        <div style="display: flex; width: 298px;">
                            <img src="images/tel.svg" alt="">
                            <input name="telephone" type="Tel" id="applicationTelephone" maxlength="20" placeholder="Телефон, пожалуйста"
                                   required />

                        </div>

                        <div style="width: 298px; display: flex; border-bottom: 1px solid #e6ebf1;">
                            <img style = "width: 13px; height: 45px;" src="images/promo.svg" alt="">
                            <input style="" name="promo" id="zayavkaName" maxlength="20" placeholder="Промокод"  />
                            <div id="error"></div>
                        </div>

                    </div>
                    <div class="moreOption" style = "display: flex; margin-left: 60px;">
                        <div style="border-radius:5px 0px 0px 5px; display: flex; align-items:center; background-color: #E9EEF3; width: 148px;height: 45px;">
                            <label style="margin-left: 14px;margin-right: 14px; margin-top: 2px;">
                                <input type="checkbox" class="checkbox"/>
                                <span class="fakecheck"></span>
                            </label>
                            <a class="sogly" href="#">Соглашение</a>
                        </div>
                        <button id = "checkbutton" class="applicationButton"  type="submit" form="application" disabled>Позвоните мне!</button>
                    </div>



                </form>

            </div>
        </div>
    </div>
</div>

<script>
    var $checkboxes = $("form input:checkbox"),
        $btn = $("#checkbutton");

    $checkboxes.each(function (idx, itm) {
        $(itm).on("change", function () {
            var isCheckedAnything = $checkboxes.filter(":checked").length > 0;
            $btn.prop('disabled', !isCheckedAnything);
        });
    });
</script>


<div id="iw-modal-mobile-obrsv" class="iw-modal" style = "width: 100%;">
    <div class="iw-modal-wrapper" style="position: absolute; width: 100%;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);">
        <div class="iw-CSS-modal-inner"
             style=" margin: 0 auto; width: 100%; display: flex; flex-direction: column; align-items: center; justify-content: space-between;">
            <div class="iw-modal-header" style="background-color: #e6ebf1;
      padding-top: 54px;
      padding-bottom: 54px;
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      ">
                <img style="margin-right: 40px;" src="images/iw-modal-mobile-obrsv.svg" alt=""
                >
            </div>
            <div class="iw-modal-text" style="padding: 28px 20px;">
                <a href="#close" title="Закрыть" style = "right: 27px;"class="iw-close">×</a>

                <form id="application" action="application.php" method="POST" name="application">
                    <h1 class="form-obr-sv-h1">Очень рады, что выбрали нас!<img src="images\sign-of-the-horns_1f918 1.svg"
                                                                                style="margin-bottom: -5px;
margin-left: 10px;
width: 30px;
height: 30px;" alt=""></h1>
                    <p class="form-obr-sv-p">Мы свяжемся в вами в ближайшее время и обсудим ваш вопрос. Обещаем приложить
                        максимальные усилия для решения проблемы.</p>
                    <div class="inputi" style="display: flex; flex-direction: column;">
                        <div style="width: 320px; display: flex; border-bottom: 1px solid #e6ebf1;">
                            <img src="images/pers.svg" alt="">
                            <input style="" name="name" id="zayavkaName" maxlength="20" placeholder="Как вас зовут?" required />
                            <div id="error"></div>
                        </div>
                        <div style="display: flex; width: 298px;">
                            <img src="images/tel.svg" alt="">
                            <input style=" " name="telephone" type="Tel" id="applicationTelephone" maxlength="20"
                                   placeholder="Телефон, пожалуйста" required />

                        </div>
                        <div style="width: 298px; display: flex; border-bottom: 1px solid #e6ebf1;">
                            <img style="width: 13px; height: 45px;" src="images/promo.svg" alt="">
                            <input style="" name="promo" id="zayavkaName" maxlength="20" placeholder="Промокод" />
                            <div id="error"></div>
                        </div>
                    </div>
                    <div class="moreOption" style="display: flex; flex-direction: column; margin-left: 60px;">
                        <div
                            style="border-radius:5px 5px 0px 0px; display: flex; align-items:center; justify-content: center; background-color: #E9EEF3; width: 320px;height: 45px;">
                            <label style="margin-right: 12px; margin-top: 2px;">
                                <input type="checkbox" class="checkbox" />
                                <span class="fakecheck"></span>
                            </label>
                            <a class="sogly" href="#">Соглашение</a>
                        </div>
                        <button style="width: 320px;height: 45px;" id="checkbutton1" class="applicationButton" type="submit" form="application" disabled>Позвоните
                            мне!</button>
                    </div>



                </form>

            </div>
        </div>
    </div>
</div>



<script>
    var $checkboxes1 = $("form input:checkbox"),
        $btn1 = $("#checkbutton1");

    $checkboxes1.each(function (idx, itm) {
        $(itm).on("change", function () {
            var isCheckedAnything1 = $checkboxes1.filter(":checked").length > 0;
            $btn1.prop('disabled', !isCheckedAnything1);
        });
    });
</script>








<div class="container">
    <div class="banners">
        <a href="#" class="banner-link"><img src="images\1.png" alt="" class="banner"><div class="banner-hover"></div></a>
        <a href="#" class="banner-link"><img src="images\2.png" alt="" class="banner"><div class="banner-hover"></div></a>
    </div>
</div>


<div class="container-text" id="onas">
    <h1 class="rks-h1">Работаем как для своих &#8212; честно, быстро, на совесть <img src="images\ok-hand-sign_1f44c 1.svg" alt=""></h1>
    <div class="rks">
        <div class="rks-column">
            <img src="images\Group 50.svg" style = "height: 36px; width: 36px;" alt="">
            <p>
                Работаем по прайс-листу и рассчитываем <span style = "font-weight: 600;">точную стоимость</span> перед стартом работ. Подробно объясняем стоимость.
            </p>
        </div>
        <div class="rks-column" >
            <img src="images\Group 49.svg" style = "height: 36px; width: 32px;" alt="">
            <p>
                Сообщаем <span style = "font-weight: 600;">честные сроки</span> услуги, рассчитываем сроки доставки комплектующих и держим вас в курсе этапов работ.
            </p>
        </div>
        <div class="rks-column">
            <img src="images\Group 48.svg" style = "height: 36px; width: 33px;" alt="">
            <p>
                Предоставляем гарантию на услуги <span style = "font-weight: 600;">до 1 года</span>. Несем ответственность за технику, поэтому работаем на совесть.
            </p>
        </div>
    </div>

    <div class="rks-mobile">
        <button class="accordion"><img src="images\Group 50.svg" style="height: 36px; width: 36px; margin-left: -2px;margin-right: 2px;" alt=""><p>Стоимость</p><img style = "margin-top: 17px; margin-left: 115px; width: 14px; height: 8px;" class="strelka" src="images/icon.png" alt=""></button>
        <div class="panel">
            <p>
                Работаем по прайс-листу и рассчитываем <span style="font-weight: 600;">точную стоимость</span> перед стартом работ.
                Подробно объясняем стоимость.
            </p>
        </div>

        <button class="accordion"><img src="images\Group 49.svg" style="height: 36px; width: 32px; margin-right: 4px;" alt=""><p>Сроки</p><img style = "margin-top: 17px; margin-left: 154px;width: 14px; height: 8px;" class="strelka" src="images/icon.png" alt=""></button>
        <div class="panel">
            <p>
                Сообщаем <span style="font-weight: 600;">честные сроки</span> услуги, рассчитываем сроки доставки комплектующих и
                держим вас в курсе этапов работ.
            </p>
        </div>

        <button class="accordion"><img src="images\Group 48.svg" style="height: 36px; width: 33px; margin-right: 3px;" alt=""><p>Гаратии</p><img style = "margin-top: 17px; margin-left: 137px; width: 14px; height: 8px;" class="strelka" src="images/icon.png" alt=""></button>
        <div class="panel">
            <p>
                Предоставляем гарантию на услуги <span style="font-weight: 600;">до 1 года</span>. Несем ответственность за технику,
                поэтому работаем на совесть.
            </p>
        </div>
    </div>

</div>










<div class="container-text" id="otziv">
    <h1 class="otz-h1"> — А как же отзывы? <br> — Здесь их не будет <img src="images\speak-no-evil-monkey_1f64a 1.svg"></h1>
    <div class="otz">
        <div class="otz-column first">
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
    <span>НУ ВЫ ЗАБЕГАЙТЕ В ГОСТИ, ЕСЛИ ЧТО</span>
    <span style="margin-left: 70px;">НУ ВЫ ЗАБЕГАЙТЕ В ГОСТИ, ЕСЛИ ЧТО</span>
    <span style="margin-left: 70px;">НУ ВЫ ЗАБЕГАЙТЕ В ГОСТИ, ЕСЛИ ЧТО</span>
    <span style="margin-left: 70px;">НУ ВЫ ЗАБЕГАЙТЕ В ГОСТИ, ЕСЛИ ЧТО</span>
    <span style="margin-left: 70px;">НУ ВЫ ЗАБЕГАЙТЕ В ГОСТИ, ЕСЛИ ЧТО</span>
    <span style="margin-left: 70px;">НУ ВЫ ЗАБЕГАЙТЕ В ГОСТИ, ЕСЛИ ЧТО</span>
    <span style="margin-left: 70px;">НУ ВЫ ЗАБЕГАЙЕ В ГОСТИ, ЕСЛИ ЧТО</span>
    <span style="margin-left: 70px;">НУ ВЫ ЗАБЕГАЙТЕ В ГОСТИ, ЕСЛИ ЧТО</span>
    <span style="margin-left: 70px;">НУ ВЫ ЗАБЕГАЙТЕ В ГОСТИ, ЕСЛИ ЧТО</span>
</div>









@include('inc/googleMap')

@include('inc/footer', ['scripts'=>['accordion', 'swiperSlider', 'marquee']])

@endsection
