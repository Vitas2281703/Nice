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
                    <a class="service-list_item-name">Заказ №{{$order->id}}</a>
                    <button class="service-list_item-btn HOVER">
                        <span></span>
                        <text>Оплатить</text>
                    </button>
                </div>
                <div class="service-list_item-status">
                    <p class="service-list_item-status_item">
                        <span>Статус выполнения: </span>
                        <span class="status-progress">{{ $order->status }}</span>
                    </p>
                    <p class="service-list_item-status_item">
                        <span>Статус оплаты:</span>
                        <span class="status-payment">{{ $order->status_payment }}</span>
                    </p>
                </div>
            </div>

            <ul class="service-list order-list ">
                <li class="service-list_item">
                    <div class="service-list_item-service-info">

                        <h2 class="service-list_item-name">Название</h2>
                        <div class="service-list_item-amount">Количество</div>
                        <p class="service-list_item-price">
                            <span class="service-list_item-price_new">Цена</span>
                            <span class="service-list_item-price_new">Старая цена</span>
                        </p>
                        <p class="service-list_item-subtotal">Подитог</p>
                    </div>
                </li>
                <li class="service-list_item">
                    <?php  $allPrice = 0 ?>
                    @foreach($order->orderPoints as $point)
                            <?php  $allPrice += $point->orderService->price * $point->amount ?>
                    <div class="service-list_item-service-info">
                        <h2 class="service-list_item-name">{{$point->orderService->title}}</h2>
                        <p class="service-list_item-amount">x {{$point->amount}}</p>
                        <p class="service-list_item-price">
                            <span class="service-list_item-price_new">{{$point->orderService->price}} ₽</span>
                        </p>
                        <p class="service-list_item-subtotal">{{$point->orderService->price * $point->amount}} ₽</p>
                    </div>
                    @endforeach
                </li>
            </ul>
            <p class="order-total">Итого: {{ $allPrice }} ₽</p>
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
