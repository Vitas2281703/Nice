<footer>
    <div class="footer-top-line">
        <div class="container">
            <div class="footer-top">
                <div class="telephone desktop-telephone">
                    <a href="tel:89069229161" class="number">8 (906) 922-91-61</a>
                </div>
                <div class="footer-brand">
                    <img src="\assets\images\footerLogo.svg"
                         alt="NICE"
                         class="footer-logo"
                    />
                </div>
                <div class="telephone mobile-telephone">
                    <a href="tel:89069229161" class="number">8 (906) 922-91-61</a>
                </div>
                <div class="social">
                    <a href="email:Master@rempc42.ru"
                       class="social-link-email"
                    >
                        Master@rempc42.ru
                    </a>
                    <div class="social-seti_block">
                        <a href="https://vk.com/nicekemerovo" target="_blank">
                            <img src="\assets\images\vk.svg">
                        </a>
                        <a href="https://goo.su/4cDI" >
                            <img src="\assets\images\whatsapp.svg" target="_blank">
                        </a>
                        <a href="https://www.instagram.com/nice_service42/" target="_blank">
                            <img src="\assets\images\instagram.svg">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="footer-bottom">
            <a href="{{ route('user-agreement') }}" class="footer-link ps-mob">Пользовательское соглашение</a>
            <p class="copyright" >&copy; Nice, 2012 - 2022</p>
            <a href="{{ route('user-agreement') }}" class="footer-link ps-desk">Пользовательское соглашение</a>
        </div>
    </div>


</footer>


@foreach($scripts as $script)
    @if($script == 'swiperSlider')
        <script type="module" src="/assets/js/{{ $script }}.js"></script>
    @else
        <script src="/assets/js/{{ $script }}.js"></script>
    @endif
@endforeach
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.Marquee/1.5.0/jquery.marquee.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script src="https://unpkg.com/imask"></script>
<script src="{{ asset('assets/js/maskTelephoneInput.js') }}"></script>


