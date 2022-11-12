<footer>
    <div class="footer-top-line">
        <div class="container">
            <div class="footer-top">
                <div class="telephone desktop-telephone">
                    <a href="tel:89234826100" class="number">8 (923) 482-61-00</a>
                </div>
                <div class="footer-brand">
                    <img src="assets\images\footerLogo.svg"
                         alt="NICE"
                         class="footer-logo"
                    />
                </div>
                <div class="telephone mobile-telephone">
                    <a href="tel:89234826100" class="number">8 (923) 482-61-00</a>
                </div>
                <div class="social">
                    <a href="email:hello@nice42.ru"
                       class="social-link-email"
                    >
                        hello@nice42.ru
                    </a>
                    <div class="social-seti_block">
                        <a href="#" >
                            <img src="assets\images\vk.svg" alt="">
                        </a>
                        <a href="#" >
                            <img src="assets\images\whatsapp.svg" alt="">
                        </a>
                        <a href="#" >
                            <img src="assets\images\instagram.svg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="footer-bottom">
            <a href="" class="footer-link ps-mob">Пользовательское соглашение</a>
            <p class="copyright" >Copyright © 2012 - 2022</p>
            <a href="Пользовательское соглашение.pdf" class="footer-link ps-desk">Пользовательское соглашение</a>
        </div>
    </div>


</footer>


@foreach($scripts as $script)
    @if($script == 'swiperSlider')
        <script type="module" src="assets/js/{{ $script }}.js"></script>
    @else
        <script src="assets/js/{{ $script }}.js"></script>
    @endif
@endforeach

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.Marquee/1.5.0/jquery.marquee.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>



