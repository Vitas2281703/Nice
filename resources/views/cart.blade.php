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
        <form class="preorder-form" action="">

            <div class="order-block">
                <div class="service-list_item-order">
                    <div class="service-list_item-order_title">
                        <a class="service-list_item-name">Заказ №120321</a>
                    </div>
                </div>

                <ul class="service-list order-list ">
                    <li class="service-list_item preorder_title">
                        <div class="service-list_item-service-info">
                            <h2 class="service-list_item-name">Название</h2>
                            <p class="service-list_item-amount">Количество</p>
                            <p class="service-list_item-price">
                                <span class="service-list_item-price_new">Цена</span>
                                <span class="service-list_item-price_new">Старая цена</span>
                            </p>
                            <p class="service-list_item-subtotal">Подитог</p>
                        </div>
                    </li>
                    <li class="service-list_item">
                        <div class="service-list_item-service-info">
                            <h2 class="service-list_item-name">Замена экрана</h2>
                            <p class="service-list_item-amount amount-input_block">
                                <a class="amount-input_btn amount-input_btn-minus">-</a>
                                <input
                                    class="form-auth_input amount-input"
                                    min="1"
                                    max="10"
                                    name="amount"
                                    type="number"
                                >
                                <a class="amount-input_btn amount-input_btn-plus">+</a>
                            </p>
                            <p class="service-list_item-price">
                                <span class="service-list_item-price_new">9000 ₽</span>
                            </p>
                            <p class="service-list_item-subtotal">9000 ₽</p>
                        </div>
                    </li>
                    <li class="service-list_item">
                        <div class="service-list_item-service-info">
                            <h2 class="service-list_item-name">Замена матрицы</h2>
                            <p class="service-list_item-amount amount-input_block">
                                <a class="amount-input_btn amount-input_btn-minus">-</a>
                                <input
                                    class="form-auth_input amount-input"
                                    min="1"
                                    max="10"
                                    name="amount"
                                    type="number"
                                >
                                <a class="amount-input_btn amount-input_btn-plus">+</a>
                            </p>
                            <p class="service-list_item-price">
                                <span class="service-list_item-price_new">9000 ₽</span>
                                <span class="service-list_item-price_old">903200 ₽</span>
                            </p>
                            <p class="service-list_item-subtotal">9000 ₽</p>
                        </div>
                    </li>
                    <li class="service-list_item">
                        <div class="service-list_item-service-info">
                            <h2 class="service-list_item-name">Установка операционной системы</h2>
                            <p class="service-list_item-amount amount-input_block">
                                <a class="amount-input_btn amount-input_btn-minus">-</a>
                                <input
                                    class="form-auth_input amount-input"
                                    min="1"
                                    max="10"
                                    name="amount"
                                    type="number"
                                >
                                <a class="amount-input_btn amount-input_btn-plus">+</a>
                            </p>
                            <p class="service-list_item-price">
                                <span class="service-list_item-price_new">3500 ₽</span>
                            </p>
                            <p class="service-list_item-subtotal">9000 ₽</p>
                        </div>
                    </li>

                    <li class="service-list_item">
                        <div class="service-list_item-service-info">
                            <h2 class="service-list_item-name">Замена экрана</h2>
                            <p class="service-list_item-amount amount-input_block">
                                <a class="amount-input_btn amount-input_btn-minus">-</a>
                                <input
                                    class="form-auth_input amount-input"
                                    min="1"
                                    max="10"
                                    name="amount"
                                    type="number"
                                >
                                <a class="amount-input_btn amount-input_btn-plus">+</a>
                            </p>
                            <p class="service-list_item-price">
                                <span class="service-list_item-price_new">9000 ₽</span>
                            </p>
                            <p class="service-list_item-subtotal">9000 ₽</p>
                        </div>
                    </li>
                </ul>
                <p class="order-total">Итого: 9430219 ₽</p>
                <div class="order-arrange_link-block">
                    <a href="{{ route('preorder') }}" style="font-size: 13px;" class="HOVER preorder_btn">
                        <span></span>
                        <text>Оформить</text>
                    </a>
                </div>
            </div>
        </form>
    </div>

@endsection

@section('footer')
    @include('inc/footer', [
    'scripts'=>[
        'menuBurger',
        'amount'
        ]
        ])
@endsection
