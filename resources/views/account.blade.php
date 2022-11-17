@extends('layouts/layout')

@section('header')
    @include('inc/header', [
    'styles'=>[
        'commonStyle',
        'service',
        'account',
        'auth'
        ]
        ])
@endsection

@section('content')
    <div class="container">
        <h1 class="account-title">Привет, <span>{{ $name }}!</span></h1>
        <p>Здесь ты можешь посмотреть свою персональную скидку по реферальной
            программе и отслеживать свои заказы <img src="assets\images\okHand.svg" alt=""></p>
        <div class="service_block">
            <aside>
                <div class="service-filter">
                    <h4 class="personal-discount_title">
                        Ваша персональная скидка
                    </h4>
                    <span class="personal-discount_percent">
                        5%
                    </span>
                    <p class="personal-discount_p">
                        Пригласите еще <strong>5</strong>
                        пользователей для скидки <strong>7%</strong>
                    </p>
                    <div class="referal">
                        <input id="referal-link" class="form-auth_input" type="text" value="https://ya.ru">
                        <a id="ref-copylink" class="ref-copylink">
                            <span></span>
                            <text>
                                <img src="assets\images\copy.svg" alt="">
                            </text>
                        </a>
                    </div>
                </div>
            </aside>
            <ul class="service-list" id="service-list">
                <li class="service-list_item">
                    <div class="service-list_item-order">
                        <div class="service-list_item-order_title">
                            <a href="{{ route('order') }}" class="service-list_item-name order-link">
                                Заказ №120321
                            </a>
                            <button class="service-list_item-btn HOVER">
                                <span></span>
                                <text>Оплатить</text>
                            </button>
                        </div>
                        <div class="service-list_item-status">
                            <p class="service-list_item-status_item">
                                <span>Статус выполнения: </span>
                                <span class="status-progress">В работе</span>
                            </p>
                            <p class="service-list_item-status_item">
                                <span>Статус оплаты:</span>
                                <span class="status-payment">Не оплачен</span>
                            </p>
                        </div>
                    </div>
                </li>
                <li class="service-list_item">
                    <div class="service-list_item-order">
                        <div class="service-list_item-order_title">
                            <a href="{{ route('order') }}" class="service-list_item-name order-link">
                                Заказ №12023121
                            </a>
                            <button class="service-list_item-btn HOVER">
                                <span></span>
                                <text>Оплатить</text>
                            </button>
                        </div>
                        <div class="service-list_item-status">
                            <p class="service-list_item-status_item">
                                <span>Статус выполнения: </span>
                                <span class="status-progress">Завершен</span>
                            </p>
                            <p class="service-list_item-status_item">
                                <span>Статус оплаты:</span>
                                <span class="status-payment">Оплачен</span>
                            </p>
                        </div>
                    </div>
                </li>

                <li class="service-list_item">
                    <div class="service-list_item-order">
                        <div class="service-list_item-order_title">
                            <a href="{{ route('order') }}" class="service-list_item-name order-link">
                                Заказ №12023121
                            </a>
                            <button class="service-list_item-btn HOVER">
                                <span></span>
                                <text>Оплатить</text>
                            </button>
                        </div>
                        <div class="service-list_item-status">
                            <p class="service-list_item-status_item">
                                <span>Статус выполнения: </span>
                                <span class="status-progress">Готов к выдаче</span>
                            </p>
                            <p class="service-list_item-status_item">
                                <span>Статус оплаты:</span>
                                <span class="status-payment">Не оплачен</span>
                            </p>
                        </div>
                    </div>
                </li>


            </ul>
        </div>
    </div>

@endsection

@section('footer')
    @include('inc/footer', [
    'scripts'=>[
        'menuBurger',
        'serviceStatus',
        'copyBtn'
        ]
        ])
@endsection
