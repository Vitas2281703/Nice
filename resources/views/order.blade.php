@extends('layouts/layout')

@section('header')
    @include('inc/header', [
    'styles'=>[
        'commonStyle',
        'service',
        'account',
        ]
        ])
@endsection

@section('content')
    <div class="container">
        <div class="order-block">
            <div class="service-list_item-order">
                <div class="service-list_item-order_title">
                    <a class="service-list_item-name">Заказ №120321</a>
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

            <ul class="service-list order-list ">
                <li class="service-list_item">
                    <h2 class="service-list_item-name">Название</h2>
                    <div class="service-list_item-amount">Количество</div>
                    <p class="service-list_item-price">
                        <span class="service-list_item-price_new">Цена</span>
                        <span class="service-list_item-price_new">Старая цена</span>
                    </p>
                    <p class="service-list_item-subtotal">Подитог</p>
                </li>
                <li class="service-list_item">
                    <h2 class="service-list_item-name">Замена экрана</h2>
                    <p class="service-list_item-amount">x 9</p>
                    <p class="service-list_item-price">
                        <span class="service-list_item-price_new">9000 ₽</span>
                    </p>
                    <p class="service-list_item-subtotal">9000 ₽</p>
                </li>
                <li class="service-list_item">
                    <h2 class="service-list_item-name">Замена матрицы</h2>
                    <p class="service-list_item-amount">x 9</p>
                    <p class="service-list_item-price">
                        <span class="service-list_item-price_new">9000 ₽</span>
                        <span class="service-list_item-price_old">903200 ₽</span>
                    </p>
                    <p class="service-list_item-subtotal">9000 ₽</p>
                </li>
                <li class="service-list_item">
                    <h2 class="service-list_item-name">Установка операционной системы</h2>
                    <p class="service-list_item-amount">x 9</p>
                    <p class="service-list_item-price">
                        <span class="service-list_item-price_new">3500 ₽</span>
                    </p>
                    <p class="service-list_item-subtotal">9000 ₽</p>
                </li>

                <li class="service-list_item">
                    <h2 class="service-list_item-name">Замена экрана</h2>
                    <p class="service-list_item-amount">x 9</p>
                    <p class="service-list_item-price">
                        <span class="service-list_item-price_new">9000 ₽</span>
                    </p>
                    <p class="service-list_item-subtotal">9000 ₽</p>
                </li>
            </ul>
            <p class="order-total">Итого: 9430219 ₽</p>
        </div>
    </div>

@endsection

@section('footer')
    @include('inc/footer', [
    'scripts'=>[
        'menuBurger',
        'serviceStatus'
        ]
        ])
@endsection
