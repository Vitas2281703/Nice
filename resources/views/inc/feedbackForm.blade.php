{{--<div id="iw-modal" class="iw-modal">--}}
{{--    <div class="iw-modal-wrapper" style="position: absolute;--}}
{{--    top: 50%;--}}
{{--    left: 50%;--}}
{{--    transform: translate(-50%, -50%);">--}}
{{--        <div class="iw-CSS-modal-inner" style = "width: 788px;height: 521px; margin: 0 auto; display: flex; align-items: center; justify-content: space-between;">--}}
{{--            <div class="iw-modal-header" style  = "background-color: #e6ebf1; ">--}}
{{--                <img src="assets\images\logoWithHand.svg" alt="" style = "padding-left: 70px;padding-right: 31px;padding-bottom: 95px;padding-top: 88px; ">--}}
{{--            </div>--}}
{{--            <div class="iw-modal-text">--}}
{{--                <a href="#close" title="Закрыть" class="iw-close">×</a>--}}

{{--                <form id="application" action="application.php" method="POST" name="application">--}}
{{--                    <h1 class="form-obr-sv-h1">Очень рады, что выбрали нас!--}}
{{--                        <img src="images\sign-of-the-horns_1f918 1.svg" style = "margin-bottom: -9px; margin-left: 10px;" alt="">--}}
{{--                    </h1>--}}
{{--                    <p class="form-obr-sv-p">Мы свяжемся в вами в ближайшее время и обсудим ваш вопрос. Обещаем приложить максимальные усилия для решения проблемы.</p>--}}
{{--                    <div class="inputi" style = "display: flex; flex-direction: column;">--}}
{{--                        <div style="width: 298px; display: flex; border-bottom: 1px solid #e6ebf1;">--}}
{{--                            <img src="images/pers.svg" alt="">--}}
{{--                            <input  name="name" id="zayavkaName" maxlength="20" placeholder="Как вас зовут?" required />--}}
{{--                            <div id = "error"></div>--}}
{{--                        </div>--}}
{{--                        <div style="display: flex; width: 298px;">--}}
{{--                            <img src="images/tel.svg" alt="">--}}
{{--                            <input name="telephone" type="Tel" id="applicationTelephone" maxlength="20" placeholder="Телефон, пожалуйста"--}}
{{--                                   required />--}}

{{--                        </div>--}}

{{--                        <div style="width: 298px; display: flex; border-bottom: 1px solid #e6ebf1;">--}}
{{--                            <img style = "width: 13px; height: 45px;" src="images/promo.svg" alt="">--}}
{{--                            <input style="" name="promo" id="zayavkaName" maxlength="20" placeholder="Промокод"  />--}}
{{--                            <div id="error"></div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                    <div class="moreOption" style = "display: flex; margin-left: 60px;">--}}
{{--                        <div style="border-radius:5px 0px 0px 5px; display: flex; align-items:center; background-color: #E9EEF3; width: 148px;height: 45px;">--}}
{{--                            <label style="margin-left: 14px;margin-right: 14px; margin-top: 2px;">--}}
{{--                                <input type="checkbox" class="checkbox"/>--}}
{{--                                <span class="fakecheck"></span>--}}
{{--                            </label>--}}
{{--                            <a class="sogly" href="#">Соглашение</a>--}}
{{--                        </div>--}}
{{--                        <button id = "checkbutton" class="applicationButton"  type="submit" form="application" disabled>Позвоните мне!</button>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


<div class="modal" data-modal="1">
    <span class="header-link_functional">
        <svg class="modal__cross js-modal-close "
             xmlns="http://www.w3.org/2000/svg"
             viewBox="0 0 24 24">
            <path
                d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/>
        </svg>
    </span>
    <div class="modal-content">
        <div class="feedbackForm-img">
            <img src="assets\images\logoWithHand.svg" alt="">
            <img src="assets\images\logoWithHandMobile.svg" alt="">
        </div>
        <div class="feedbackForm-form_block">
            <h2 class="feedbackForm-form_title">
                Очень рады, что выбрали нас!
                <img src="assets\images\goatHand.svg" alt="">
            </h2>
            <p class="feedbackForm-form_p">
                Мы свяжемся в вами в ближайшее время и обсудим ваш вопрос.
                Обещаем приложить максимальные усилия для решения проблемы.
            </p>
            <form action="" class="feedbackForm-form">
                @csrf
                <input type="text" name="name" class="form-auth_input" placeholder="Как вас зовут">
                <input type="tel" name="telephone" class="form-auth_input" placeholder="Телефон">
                <textarea class="form-auth_input"
                          name="comment"
                          cols="30" rows="5"
                >
                </textarea>
                <button class="form-auth_btn HOVER"><span></span><text>Позвоните мне!</text></button>
                <p class="form-auth_p">Нажимая кнопку вы подтверждаете свое согласие с
                    <a href="" class="form-auth_link">
                        пользовательским соглашением
                    </a>
                    и
                    <a href="" class="form-auth_link">
                        политикой обработки персональных данных
                    </a>
                </p>
            </form>
        </div>
    </div>
</div>
<div class="overlay js-overlay-modal"></div>

    <a href="" class="feedbackForm_link js-open-modal" data-modal = "1">
        <img src="assets\images\oldPhone.svg" alt="">
    </a>


