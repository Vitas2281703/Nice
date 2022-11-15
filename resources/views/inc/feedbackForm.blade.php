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
                <input type="text" name="name" class="form-auth_input" placeholder="Как вас зовут?">
                <input type="tel" name="telephone" class="form-auth_input" placeholder="Телефон">
                <textarea class="form-auth_input"
                          name="comment"
                          cols="30" rows="5"
                          placeholder="Опишите свою проблему (необязательно)"
                ></textarea>
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


