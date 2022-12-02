@extends('layouts/layout')

@section('header')
    @include('inc/header', [
    'styles'=>[
        'commonStyle',
        'service',
        'feedbackForm',
        'auth',
        'paginate'
        ]
        ])
@endsection

@section('content')
    <div class="container">
        <h1 class="service-title">Что у вас сломалось?</h1>

        <div class="service_block">
            <aside>
                <form method="GET" action="{{ route('service') }}" id="serviceFilterForm" class="service-filter">
                    @csrf
                    <select name="serviceCategory" id="serviceCategory">
                        <option value="0" disabled @if(!isset($activeServiceCategory)) selected @endif>Выберите категорию</option>
                        @foreach($categories as $category)
                            @if(isset($activeServiceCategory) && $activeServiceCategory == $category->id)
                                <option value="{{ $category->id }}" selected>{{ $category->title }}</option>
                            @else
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endif
                        @endforeach
                    </select>

                    <select name="serviceFabricator" id="serviceFabricator" @if(!isset($fabricators)) disabled @endif>
                        <option value="0" disabled @if(!isset($activeServiceFabricator)) selected @endif>Выберите производителя</option>
                        @if(isset($fabricators))
                            @foreach($fabricators as $fabricator)
                                @if(isset($activeServiceFabricator) && $activeServiceFabricator == $fabricator->id)
                                    <option value="{{ $fabricator->id }}" selected>{{ $fabricator->title }}</option>
                                @else
                                    <option value="{{ $fabricator->id }}">{{ $fabricator->title }}</option>
                                @endif
                            @endforeach
                        @endif
                    </select>

                    <select name="serviceDevice" id="serviceDevice" @if(!isset($activeServiceFabricator)) disabled @endif>
                        <option value="0" disabled @if(!isset($activeServiceDevice)) selected @endif>Выберите модель</option>
                        @if(isset($devices))
                           @foreach($devices as $device)
                                @if(isset($activeServiceDevice) && $activeServiceDevice == $device->id)
                                    <option value="{{ $device->id }}" selected>{{ $device->title }}</option>
                                @else
                                    <option value="{{ $device->id }}">{{ $device->title }}</option>
                                @endif
                            @endforeach
                        @endif
                    </select>
                    <a id="reset-filter-btn" class="reset-filter-btn HOVER"><span></span><text>Сбросить фильтр</text></a>
                </form>
            </aside>


            @if($orderServices->first() !== null)
                <ul class="service-list">
                    @foreach($orderServices as $orderService)
                        <li class="service-list_item">
                            <div class="service-list_item-service-info">
                                <h2 class="service-list_item-name">{{ $orderService->title }}</h2>
                                <p class="service-list_item-price">
                                    <span class="service-list_item-price_new">{{ $orderService->price }} ₽</span>
                                </p>
                                <a href="{{!in_array($orderService->id, $servicesIds) ?? route('add-order', ['service_id' => $orderService->id])}}">
                                    <button class="service-list_item-btn HOVER">
                                        <span></span>
                                        <text>{{in_array($orderService->id, $servicesIds) ? 'В_корзине' : 'Заказать'}}</text>
                                    </button>
                                </a>
                            </div>
                            <div class="service-list_item-device-info">
                                <span>Категория: {{ $orderService->device->category->title }}</span>
                                <span>Производитель: {{ $orderService->device->fabricator->title }}</span>
                                <span>Модель: {{ $orderService->device->title }}</span>
                            </div>
                        </li>
                    @endforeach
                </ul>
            @else
                <span class="service-message">Нет результатов</span>
            @endif


    </div>
        {{ $orderServices->links('inc/paginate') }}


    @include('inc/feedbackForm')
@endsection

@section('footer')
    @include('inc/footer', [
    'scripts'=>[
        'menuBurger',
        'feedbackForm',
        'sendServiceFilterForm'
        ]
        ])
@endsection
