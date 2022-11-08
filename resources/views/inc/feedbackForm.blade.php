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
                    <h1 class="form-obr-sv-h1">Очень рады, что выбрали нас!
                        <img src="images\sign-of-the-horns_1f918 1.svg" style = "margin-bottom: -9px; margin-left: 10px;" alt="">
                    </h1>
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
