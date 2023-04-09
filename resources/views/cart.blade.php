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

            <div class="order-block">
                @if(isset($order))
                    <div class="service-list_item-order">
                        <div class="service-list_item-order_title">
                            <a class="service-list_item-name">Заказ №{{ $order->id }}</a>
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

                            @foreach($order->orderPoints as $point)
                            <li class="service-list_item">
                                <div class="service-list_item-service-info">
                                    <h2 class="service-list_item-name">{{ $point->orderService->title }}</h2>
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
                                        <span class="service-list_item-price_new">{{ $point->orderService->price }} ₽</span>
                                        @if($point->orderService->old_price != 0)
                                            <span class="service-list_item-price_old">{{ $point->orderService->old_price }} ₽</span>
                                        @endif
                                    </p>
                                    <p class="service-list_item-subtotal"></p>
                                    <a href="" class="service-list_item-delete">
                                        <svg class="modal__cross js-modal-close "
                                             xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 24 24">
                                            <path
                                                d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/>
                                        </svg>
                                    </a>
                                </div>
                            </li>
                            @endforeach

                    </ul>
                    <div class="order-bonus_wrapper">
                        <div class="order-bonus_block">
                            <p>У вас {{ $user->bonus }} бонусов</p>
                            <input id="bonus-input"
                                   placeholder="Количество бонусов"
                                   type="number"
                                   class="form-auth_input"
                                   min="0" max="{{ $user->bonus }}"
                            >
                        </div>
                    </div>
                    <p id="order-total" class="order-total"></p>

                    <div class="order-arrange_link-block">
                        <form action="{{ route('order-registration') }}" method="POST">
                                @csrf
                                <input type="number" name="totalInput" id="totalInput" hidden>
                                @foreach($order->orderPoints as $point)
                                    <input type="number" name="orderPointsIds[]" value="{{ $point->id }}" hidden>
                                    <input type="number" name="amounts[]" id="amounts" value="" hidden>
                                @endforeach
                                <input type="number" name="bonuses" id="bonuses" hidden>
                                <button type="submit" style="font-size: 13px;" class="HOVER preorder_btn" id="preorder-btn">
                                    <span></span>
                                    <text>Оформить</text>
                                </button>
                        </form>
                    </div>
                @else
                    <h1>Корзина пуста :(</h1>
                @endif
            </div>
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
