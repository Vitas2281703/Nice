@extends('layouts/layout')

@section('header')
    @include('inc/header', [
    'styles'=>[
        'commonStyle',
        'service',
        'account',
        'auth',
        'paginate'
        ]
        ])
@endsection

@section('content')
    <div class="container">
        <h1 class="account-title">Привет, <span>{{ $user->name }}!</span></h1>
        <p>Здесь ты можешь посмотреть сколько у тебя бонусов по реферальной
            программе и отслеживать свои заказы <img src="assets\images\okHand.svg" alt=""></p>
        <div class="service_block">
            <aside>
                <div class="service-filter">
                    <h4 class="personal-discount_title">
                        Ваши бонусы
                    </h4>
                    <span class="personal-discount_percent">
                        {{ $user->bonus }} бонусов
                    </span>
                    <div class="referal">
                        <input id="referal-link" class="form-auth_input" type="text" value="http://nice.local/registration/{{ $user->id }}">
                        <a id="ref-copylink" class="ref-copylink">
                            <span></span>
                            <text>
                                <img src="assets\images\copy.svg" alt="">
                            </text>
                        </a>
                    </div>
                </div>
            </aside>

                @if($orders->first() !== null)
                <ul class="service-list" id="service-list">
                @foreach($orders as $order)
                    <li class="service-list_item">
                        <div class="service-list_item-order">
                            <div class="service-list_item-order_title">
                                <a href="{{ route('order', ['order_id' => $order->id]) }}" class="service-list_item-name order-link">
                                    Заказ №{{ $order->id }} от {{ date('d.m.Y', strtotime($order->created_at)) }}
                                </a>
                                @if($order->status_payment != 'Оплачено')
                                    <a href="{{route('pay', ['id' => $order->id])}}">
                                        <button class="service-list_item-btn HOVER">
                                            <span></span>
                                            <text>Оплатить</text>
                                        </button>
                                    </a>
                                @endif

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
                    </li>
                    @endforeach
                </ul>
                @endif
        </div>
        {{ $orders->links('inc/paginate') }}
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
