<h1 class="aboutUs-title">Уста клиента глаголят истину</h1>

<div class="clients_block carousel-block" id="clients_carousel-block">
    <div class="clients-content carousel-content" id="clients_carousel-content">
    @foreach($clients as $client)
        <div class="client carousel-item">
            <div class="client_title">
                <img src="{{ $client->image('cover') }}" alt="" class="client-img">
                <p class="client-info_p client-info_p-name">
                    {{ $client->name }}
                </p>
            </div>
            <div class="client-info">

                <p class="client-info_p client-info_p-post">
                    {{ $client->description }}
                </p>
            </div>
        </div>
    @endforeach
    </div>
</div>
<div class="carousel-paginator_block">
    <button class="carousel-paginator carousel-paginator_prev" id="clients_carousel-paginator_prev">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
        >
            <path fill="none" d="M0 0h24v24H0V0z" />
            <path d="M15.61 7.41L14.2 6l-6 6 6 6 1.41-1.41L11.03 12l4.58-4.59z" />
        </svg>
    </button>
    <button class="carousel-paginator carousel-paginator_next" id="clients_carousel-paginator_next">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
        >
            <path fill="none" d="M0 0h24v24H0V0z" />
            <path d="M10.02 6L8.61 7.41 13.19 12l-4.58 4.59L10.02 18l6-6-6-6z" />
        </svg>
    </button>
</div>


<div class="otherFeedback">
    Вы можете посмотреть все отзывы здесь:
    <a
        href="https://yandex.ru/maps/org/nays/1223251481/reviews/?ll=86.098570%2C55.343893&mode=search&sll=84.947649%2C56.484640&sspn=0.347099%2C0.113595&tab=reviews&text=nice%20кемерово&z=15"
        class="otherFeedback-link"
        target="_blank"
    >
        Яндекс.Карты
    </a>
    <a
        href="https://www.google.ru/maps/place/НАЙС,+Сервисный+центр/@55.345291,86.098216,16z/data=!4m11!1m2!2m1!1zTmljZSDQutC10LzQtdGA0L7QstC-!3m7!1s0x42d8094dc0538a75:0x36635b3f8a7f9a90!8m2!3d55.345291!4d86.106971!9m1!1b1!15sChVOaWNlINC60LXQvNC10YDQvtCy0L6SARRwaG9uZV9yZXBhaXJfc2VydmljZeABAA"
        class="otherFeedback-link"
        target="_blank"
    >
        Google.Maps
    </a>
    <a
        href="https://2gis.ru/kemerovo/firm/704216723147063/tab/reviews?m=86.110753%2C55.343531%2F16.07"
        class="otherFeedback-link"
        target="_blank"
    >
        2GIS
    </a>
    <a
        href="https://kemerovo.flamp.ru/firm/najjs_servisnyjj_centr-704216723147063#reviews"
        class="otherFeedback-link"
        target="_blank"
    >
        Flamp
    </a>
</div>
