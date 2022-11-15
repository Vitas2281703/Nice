<h1 class="aboutUs-title">Уста клиента глаголят истину</h1>

<div class="clients_block carousel-block">
    @foreach($clients as $client)
        <div class="client carousel-item">
            <div class="client_title">
                <img src="assets\images\yarik.jpg" alt="" class="client-img">
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


<div class="otherFeedback">
    Вы можете посмотреть все отзывы здесь:
    <a
        href="https://yandex.ru/maps/org/nays/1223251481/reviews/?ll=86.098570%2C55.343893&mode=search&sll=84.947649%2C56.484640&sspn=0.347099%2C0.113595&tab=reviews&text=nice%20кемерово&z=15"
        class="otherFeedback-link"
    >
        Яндекс.Карты
    </a>
    <a
        href="https://www.google.ru/maps/place/НАЙС,+Сервисный+центр/@55.345291,86.098216,16z/data=!4m11!1m2!2m1!1zTmljZSDQutC10LzQtdGA0L7QstC-!3m7!1s0x42d8094dc0538a75:0x36635b3f8a7f9a90!8m2!3d55.345291!4d86.106971!9m1!1b1!15sChVOaWNlINC60LXQvNC10YDQvtCy0L6SARRwaG9uZV9yZXBhaXJfc2VydmljZeABAA"
        class="otherFeedback-link"
    >
        Google.Maps
    </a>
    <a
        href="https://2gis.ru/kemerovo/firm/704216723147063/tab/reviews?m=86.110753%2C55.343531%2F16.07"
        class="otherFeedback-link"
    >
        2GIS
    </a>
    <a
        href="https://kemerovo.flamp.ru/firm/najjs_servisnyjj_centr-704216723147063#reviews"
        class="otherFeedback-link"
    >
        Flamp
    </a>
</div>
