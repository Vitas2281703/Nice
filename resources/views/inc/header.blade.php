<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @if(isset($seoDescription))
        <meta name="description" content="{{ $seoDescription }}" />
    @else
        <meta name="description" content="Для наших клиентов диагностика бесплатная. Гарантия до 365 дней. Срочный ремонт смартфонов от 15 минут. 8 (906) 922-91-61" />
    @endif
    <link rel="icon" href="/favicon.ico" type="image/ico" />

    @foreach($styles as $style)
        <link rel="stylesheet" href="\assets\css\{{ $style }}.css" />
    @endforeach
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link
        rel="stylesheet" type="text/css"
        href="https://unpkg.com/swiper/swiper-bundle.min.css"
            />
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900"
        rel="stylesheet"
            />

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @if(isset($seoTitle))
        <title>{{ $seoTitle }}</title>
    @else
        <title>NICE — Ремонт компьютеров и телефонов в Кемерово</title>
    @endif
</head>
<body>


<div class="header__top">
    <div class="container">
        <div class="header__top_block">

            <div class="header__top-contact_block">
                <a href="email:Master@rempc42.ru" class="social-link-email">
                    Master@rempc42.ru
                </a>
                <a href="tel:89234826100" class="number">8 (923) 482-61-00</a>
                <div class="social-seti_block">
                    <a href=""><img src="\assets\images\vk.svg" alt=""></a>
                    <a href=""><img src="\assets\images\whatsapp.svg" alt=""></a>
                    <a href=""><img src="\assets\images\instagram.svg" alt=""></a>
                </div>
            </div>
            <div class="header__top-info_block">
                <div class="header__top-info_item">
                    <img src="\assets\images\geo.svg" alt="">
                    <p>Кемерово, пр. Ленина 64А <br>
                        ул. Рукавишникова, 9А</p>
                </div>
                <div class="header__top-info_item">
                    <img src="\assets\images\time.svg" alt="">
                    <p>Пн-Пт 10-19:00 | Сб 11-14:00</p>
                </div>

            </div>

        </div>
    </div>
</div>
<header>
            <div class="container">
                <div class="header__bottom">
                    <div class="brand">
                        <a href="{{ route('home') }}">
                            <img src="\assets\images\logo.svg"
                                 alt="Nice"
                                 class="brand-logo">
                            <img src="\assets\images\mobileLogo.svg"
                                 alt="Nice"
                                 class="brand-logoMobile">
                        </a>
                    </div>

                    <nav class="header__nav">
                        <ul class="header-links">
                            <li><a href="{{ route('about-us') }}" class="header-link">о нас</a></li>
                            <li><a href="{{ route('service') }}" class="header-link">услуги</a></li>
                            <li><a href="{{ route('all-news') }}" class="header-link">новости</a></li>
                            <div class="functional-links">
                            <li>
                                @if(Auth::user())
                                    <a href="{{ route('account') }}" class="header-link header-link_functional header-link_functional-auth">
                                @else
                                            <a href="{{ route('login') }}" class="header-link header-link_functional header-link_functional-auth">
                                @endif
                                    <svg
                                        width="25px"
                                        height="25px"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 101 101">
                                        <path
                                            d="M50.4 54.5c10.1 0 18.2-8.2 18.2-18.2S60.5 18 50.4 18s-18.2 8.2-18.2 18.2 8.1 18.3 18.2 18.3zm0-31.7c7.4 0 13.4 6 13.4 13.4s-6 13.4-13.4 13.4S37 43.7 37 36.3s6-13.5 13.4-13.5zM18.8 83h63.4c1.3 0 2.4-1.1 2.4-2.4 0-12.6-10.3-22.9-22.9-22.9H39.3c-12.6 0-22.9 10.3-22.9 22.9 0 1.3 1.1 2.4 2.4 2.4zm20.5-20.5h22.4c9.2 0 16.7 6.8 17.9 15.7H21.4c1.2-8.9 8.7-15.7 17.9-15.7z"/>
                                    </svg>
                                    </a>
                                <ul class="auth-links">
                                    @if(Auth::user())
                                        <li>
                                            <a href="{{ route('logout') }}" class="auth-link">
                                                Выйти
                                            </a>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{ route('login') }}" class="auth-link">
                                                Войти
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('registration') }}" class="auth-link">
                                                Зарегистрироваться
                                            </a>
                                        </li>
                                    @endif
                                </ul>

                            </li>

                            <li>
                                <a href="{{ route('cart') }}" class="header-link header-link_functional">
                                    <svg width="25px"
                                         height="25px"
                                         viewBox="0 0 21 21"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none" fill-rule="evenodd" transform="translate(2 4)">
                                            <path
                                                d="m3 2.5h12.5l-1.5855549 5.54944226c-.2453152.85860311-1.0300872 1.45055774-1.9230479 1.45055774h-6.70131161c-1.01909844 0-1.87522688-.76627159-1.98776747-1.77913695l-.80231812-7.22086305h-2"
                                                stroke="currentColor"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"/>
                                            <g fill="currentColor">
                                                <circle cx="5" cy="12" r="1"/>
                                                <circle cx="13" cy="12" r="1"/>
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                            </li>
                            </div>

                            <li>
                                <div class="header__bottom-contact_block">
                                    <a href="email:Master@rempc42.ru" class="social-link-email">
                                        Master@rempc42.ru
                                    </a>
                                    <a href="tel:89234826100" class="number">8 (923) 482-61-00</a>
                                    <div class="social-seti_block">
                                        <a href=""><img src="\assets\images\vk.svg" alt=""></a>
                                        <a href=""><img src="\assets\images\whatsapp.svg" alt=""></a>
                                        <a href=""><img src="\assets\images\instagram.svg" alt=""></a>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </nav>


                    <div class="menu-burger__header">
                        <span></span>
                    </div>
                </div>
            </div>
</header>


{{--<header class="header">--}}
{{--    <div class="container">--}}
{{--        <div class="header-top">--}}
{{--            <div class="brand">--}}
{{--                <a href="">--}}
{{--                    <img src="assets\images\logo.svg" alt="NICE" class="logo" />--}}
{{--                    <img src="assets\images\mobileLogo.svg" alt="NICE" class="mobile-logo" />--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="header_contact">--}}
{{--                <a href="email:Master@rempc42.ru"--}}
{{--                   class="social-link-email">--}}
{{--                    Master@rempc42.ru--}}
{{--                </a>--}}
{{--                <a href="tel:89234826100" class="number">8 (923) 482-61-00</a>--}}
{{--                <div class="social-seti-header">--}}
{{--                    <a href=""><img src="assets\images\vk.svg" alt=""></a>--}}
{{--                    <a href=""><img src="assets\images\whatsapp.svg" alt=""></a>--}}
{{--                    <a href=""><img src="assets\images\instagram.svg" alt=""></a>--}}
{{--                </div>--}}
{{--                <p>Кемерово, пр. Ленина 64А</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="nav" id="menu">--}}
{{--        <div class="container">--}}
{{--            <div class="navi">--}}
{{--                <div class="navigation">--}}
{{--                    <ul class="nav-links">--}}
{{--                        <li><a href="#usl" class="nav-link">УСЛУГИ И СТОИМОСТЬ</a></li>--}}
{{--                        <li><a href="#onas" class="nav-link">О НАС</a></li>--}}
{{--                        <li><a href="#otziv" class="nav-link">ОТЗЫВЫ</a></li>--}}
{{--                        <li><a href="#servic" class="nav-link">СЕРВИС ИЗНУТРИ</a></li>--}}
{{--                        <li><a href="#map" class="nav-link">ГДЕ НАС НАЙТИ</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <div class="rasp">--}}
{{--                    <p>--}}
{{--                        <img--}}
{{--                            src="assets\images\geo.svg"--}}
{{--                            alt=""--}}
{{--                        />Кемерово, пр. Ленина 64А--}}
{{--                        <img--}}
{{--                            src="assets\images\time.svg"--}}
{{--                            alt=""--}}
{{--                        />Пн-Пт 10-19:00 | Сб 11-14:00--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</header>--}}
