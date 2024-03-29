@extends('layouts/layout')

@section('header')
    @include('inc/header', [
    'styles'=>[
        'commonStyle',
        'userAgreement',
        'feedbackform',
    ]
])
@endsection

@section('content')
    <div class="container" >
        <div class="user-agreement_block">
            <h2>Пользовательское Соглашение</h2>
            <p>
                Настоящее Пользовательское Соглашение (Далее Соглашение) регулирует отношения между
                владельцем Nice42.ru (далее Nice42.ru или Администрация) с одной стороны и
                пользователем сайта с другой.
            </p>
            <p>
                Сайт Nice42.ru не является средством массовой информации.
            </p>
            <p>
                Используя сайт, Вы соглашаетесь с условиями данного соглашения.
            </p>
            <p>
                Если Вы не согласны с условиями данного соглашения, не используйте сайт Nice42.ru!
            </p>
            <h2>Предмет соглашения</h2>
            <p>
                Администрация предоставляет пользователю право на размещение на сайте следующей
                информации:
            </p>
            <ul>
                <li>Текстовой информации</li>
                <li>Фотоматериалов</li>
                <li>Ссылок на материалы, размещенные на других сайтах</li>
            </ul>
            <h2>Права и обязанности сторон</h2>
            <p>
                Пользователь имеет право:
            </p>
            <ul>
                <li>осуществлять поиск информации на сайте</li>
                <li>получать информацию на сайте</li>
                <li>использовать информацию сайта в личных некоммерческих целях</li>
            </ul>
            <p>
                Администрация имеет право:
            </p>
            <ul>
                <li>по своему усмотрению и необходимости создавать, изменять, отменять правила</li>
                <li>ограничивать доступ к любой информации на сайте</li>
            </ul>
            <p>
                Пользователь обязуется:
            </p>
            <ul>
                <li>обеспечить достоверность предоставляемой информации</li>
                <li>не нарушать работоспособность сайта</li>
                <li>не использовать скрипты (программы) для автоматизированного сбора информации и/или
                    взаимодействия с Сайтом и его Сервисами</li>
            </ul>
            <p>
                Администрация обязуется:
            </p>
            <ul>
                <li>
                    поддерживать работоспособность сайта за исключением случаев, когда это невозможно по
                    независящим от Администрации причинам.
                </li>
            </ul>
            <h2>Ответственность сторон</h2>
            <ul>
                <li>
                    администрация не несёт ответственность за несовпадение ожидаемых Пользователем и
                    реально полученных услуг
                </li>
                <li>
                    администрация не несет никакой ответственности за услуги, предоставляемые третьими
                    лицами
                </li>
                <li>
                    в случае возникновения форс-мажорной ситуации (боевые действия, чрезвычайное
                    положение, стихийное бедствие и т. д.) Администрация не гарантирует сохранность
                    информации, размещённой Пользователем, а также бесперебойную работу
                    информационного ресурса
                </li>
            </ul>
            <h2>Условия действия Соглашения</h2>
            <p>
                Данное Соглашение вступает в силу при любом использовании данного сайта.
            </p>
            <p>
                Соглашение действует бессрочно.
            </p>
            <p>
                Администрация оставляет за собой право в одностороннем порядке изменять данное
                соглашение по своему усмотрению.
            </p>
            <p>
                При изменении соглашения, в некоторых случаях, администрация может оповестить
                пользователей удобным для нее способом.
            </p>
            <p>
                Информация на интернет-сайте носит исключительно информационный (ознакомительный) характер и ни при
                каких условиях не является публичной офертой, определяемой положениями Статьи 437 Гражданского кодекса РФ.
                Для получения исчерпывающей информации о стоимости и характеристиках товаров и услуг обращайтесь к менеджерам.
            </p>
        </div>
    </div>

    @include('inc/feedbackForm')
@endsection

@section('footer')
    @include('inc/footer', [
    'scripts'=>[
        'feedbackForm',
        'menuBurger'
    ]
])
@endsection
