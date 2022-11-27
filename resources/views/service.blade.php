@extends('layouts/layout')

@section('header')
    @include('inc/header', [
    'styles'=>[
        'commonStyle',
        'service',
        'feedbackForm',
        'auth'
        ]
        ])
@endsection

@section('content')
    <div class="container">
        <h1 class="service-title">Что у вас сломалось?</h1>
        {{ dd($services) }}
        <div class="service_block">
            <aside>
                <form method="POST" action="{{ route('service-filter') }}" id="serviceFilterForm" class="service-filter">
                    @csrf
                    <select name="serviceCategory" id="serviceCategory">
                        @if(isset($activeServiceDirectory))
                            <option value="0" disabled>Выберите категорию</option>
                        @else
                            <option value="0" selected disabled>Выберите категорию</option>
                        @endif
                        @foreach($categories as $category)
                            @if(isset($activeServiceDirectory) && $activeServiceDirectory == $category->id)
                                <option value="{{ $category->id }}" selected>{{ $category->title }}</option>
                            @else
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endif
                        @endforeach
                    </select>
                    <select name="serviceFabricator" id="serviceFabricator" disabled>
                        <option value="0" disabled selected>Выберите производителя</option>
                        <option value="1">Apple</option>
                        <option value="2">Acer</option>
                        <option value="3">MSI</option>
                        <option value="4">Siemens</option>
                    </select>
                    <select name="serviceDevice" id="serviceDevice" disabled>
                        <option value="0" disabled selected>Выберите модель</option>
                        <option value="1">12</option>
                        <option value="2">2321</option>
                        <option value="3">gf63 thin 8rcs</option>
                        <option value="4">300</option>
                    </select>
                </form>
            </aside>

        <ul class="service-list">
            <li class="service-list_item">
                <h2 class="service-list_item-name">Замена экрана</h2>
                <p class="service-list_item-price">
                    <span class="service-list_item-price_new">9000 ₽</span>
                </p>
                <button class="service-list_item-btn HOVER">
                    <span></span>
                    <text>Заказать</text>
                </button>
            </li>
            <li class="service-list_item">
                <h2 class="service-list_item-name">Замена матрицы</h2>
                <p class="service-list_item-price">
                    <span class="service-list_item-price_new">9000 ₽</span>
                    <span class="service-list_item-price_old">903200 ₽</span>
                </p>
                <button class="service-list_item-btn HOVER">
                    <span></span>
                    <text>Заказать</text>
                </button>
            </li>
            <li class="service-list_item">
                <h2 class="service-list_item-name">Установка операционной системы</h2>
                <p class="service-list_item-price">
                    <span class="service-list_item-price_new">3500 ₽</span>
                </p>
                <button class="service-list_item-btn HOVER">
                    <span></span>
                    <text>Заказать</text>
                </button>
            </li>

            <li class="service-list_item">
                <h2 class="service-list_item-name">Замена экрана</h2>
                <p class="service-list_item-price">
                    <span class="service-list_item-price_new">9000 ₽</span>
                </p>
                <button class="service-list_item-btn HOVER">
                    <span></span>
                    <text>Заказать</text>
                </button>
            </li>
            <li class="service-list_item">
                <h2 class="service-list_item-name">Замена матрицы</h2>
                <p class="service-list_item-price">
                    <span class="service-list_item-price_new">9000 ₽</span>
                    <span class="service-list_item-price_old">903200 ₽</span>
                </p>
                <button class="service-list_item-btn HOVER">
                    <span></span>
                    <text>Заказать</text>
                </button>
            </li>
            <li class="service-list_item">
                <h2 class="service-list_item-name">Установка операционной системы</h2>
                <p class="service-list_item-price">
                    <span class="service-list_item-price_new">3500 ₽</span>
                </p>
                <button class="service-list_item-btn HOVER">
                    <span></span>
                    <text>Заказать</text>
                </button>
            </li>

            <li class="service-list_item">
                <h2 class="service-list_item-name">Замена экрана</h2>
                <p class="service-list_item-price">
                    <span class="service-list_item-price_new">9000 ₽</span>
                </p>
                <button class="service-list_item-btn HOVER">
                    <span></span>
                    <text>Заказать</text>
                </button>
            </li>
            <li class="service-list_item">
                <h2 class="service-list_item-name">Замена матрицы</h2>
                <p class="service-list_item-price">
                    <span class="service-list_item-price_new">9000 ₽</span>
                    <span class="service-list_item-price_old">903200 ₽</span>
                </p>
                <button class="service-list_item-btn HOVER">
                    <span></span>
                    <text>Заказать</text>
                </button>
            </li>
            <li class="service-list_item">
                <h2 class="service-list_item-name">Установка операционной системы</h2>
                <p class="service-list_item-price">
                    <span class="service-list_item-price_new">3500 ₽</span>
                </p>
                <button class="service-list_item-btn HOVER">
                    <span></span>
                    <text>Заказать</text>
                </button>
            </li>

            <li class="service-list_item">
                <h2 class="service-list_item-name">Замена экрана</h2>
                <p class="service-list_item-price">
                    <span class="service-list_item-price_new">9000 ₽</span>
                </p>
                <button class="service-list_item-btn HOVER">
                    <span></span>
                    <text>Заказать</text>
                </button>
            </li>
            <li class="service-list_item">
                <h2 class="service-list_item-name">Замена матрицы</h2>
                <p class="service-list_item-price">
                    <span class="service-list_item-price_new">9000 ₽</span>
                    <span class="service-list_item-price_old">903200 ₽</span>
                </p>
                <button class="service-list_item-btn HOVER">
                    <span></span>
                    <text>Заказать</text>
                </button>
            </li>
            <li class="service-list_item">
                <h2 class="service-list_item-name">Установка операционной системы</h2>
                <p class="service-list_item-price">
                    <span class="service-list_item-price_new">3500 ₽</span>
                </p>
                <button class="service-list_item-btn HOVER">
                    <span></span>
                    <text>Заказать</text>
                </button>
            </li>

            <li class="service-list_item">
                <h2 class="service-list_item-name">Замена экрана</h2>
                <p class="service-list_item-price">
                    <span class="service-list_item-price_new">9000 ₽</span>
                </p>
                <button class="service-list_item-btn HOVER">
                    <span></span>
                    <text>Заказать</text>
                </button>
            </li>
            <li class="service-list_item">
                <h2 class="service-list_item-name">Замена матрицы</h2>
                <p class="service-list_item-price">
                    <span class="service-list_item-price_new">9000 ₽</span>
                    <span class="service-list_item-price_old">903200 ₽</span>
                </p>
                <button class="service-list_item-btn HOVER">
                    <span></span>
                    <text>Заказать</text>
                </button>
            </li>
            <li class="service-list_item">
                <h2 class="service-list_item-name">Установка операционной системы</h2>
                <p class="service-list_item-price">
                    <span class="service-list_item-price_new">3500 ₽</span>
                </p>
                <button class="service-list_item-btn HOVER">
                    <span></span>
                    <text>Заказать</text>
                </button>
            </li>
        </ul>

    </div>

        <script>
            $("#serviceFilterForm").submit(function (e) { // Устанавливаем событие отправки для формы с id=form
                let serviceCategory = $('#serviceCategory').val().toInteger();
                let serviceBrand = $('#serviceFabicator').val().toString();
                let serviceDevice = $('#serviceDevice').val().toString();

                console.log(serviceCategory);
                $.ajax({
                    type: "POST", // Метод отправки
                    url: url, // Путь до php файла отправителя
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        serviceCategory: serviceCategory,
                        serviceBrand: serviceBrand,
                        serviceDevice: serviceDevice,
                    },
                    success: function () {
                        // Код в этом блоке выполняется при успешной отправке сообщения
                        alert("Ваше сообщение отправлено!");
                        console.log(data);
                    }
                });
            });
        </script>

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
