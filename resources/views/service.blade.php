@extends('layouts/layout')

@section('header')
    @include('inc/header', [
    'styles'=>[
        'commonStyle',
        'service'
        ]
        ])
@endsection

@section('content')
    <div class="container">
        <h1 class="service-title">Что у вас сломалось?</h1>
        <div class="service_block">
            <aside>
                <form action="" class="service-filter">
                    <select name="serviceCategory" id="serviceCategory" >
                        <option value="" disabled selected>Выберите категорию</option>
                        <option value="0">Смартфон</option>
                        <option value="1">Компьютер</option>
                        <option value="2">Ноутбук</option>
                        <option value="3">Телефон</option>
                    </select>
                    <select name="serviceBrand" id="serviceBrand">
                        <option value="" disabled selected>Выберите производителя</option>
                        <option value="0">Apple</option>
                        <option value="1">Acer</option>
                        <option value="2">MSI</option>
                        <option value="3">Siemens</option>
                    </select>
                    <select name="serviceModel" id="serviceModel">
                        <option value="" disabled selected>Выберите модель</option>
                        <option value="0">12</option>
                        <option value="1">2321</option>
                        <option value="2">gf63 thin 8rcs</option>
                        <option value="3">300</option>
                    </select>
                </form>
            </aside>

        <ul class="service-list">
            <li class="service-list_item">
                <h2 class="service-list_item-name">Замена экрана</h2>
                <p class="service-list_item-price">10000 ₽</p>
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
                <p class="service-list_item-price">3500 ₽</p>
                <button class="service-list_item-btn HOVER">
                    <span></span>
                    <text>Заказать</text>
                </button>
            </li>

            <li class="service-list_item">
                <h2 class="service-list_item-name">Замена экрана</h2>
                <p class="service-list_item-price">10000 ₽</p>
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
                <p class="service-list_item-price">3500 ₽</p>
                <button class="service-list_item-btn HOVER">
                    <span></span>
                    <text>Заказать</text>
                </button>
            </li>

            <li class="service-list_item">
                <h2 class="service-list_item-name">Замена экрана</h2>
                <p class="service-list_item-price">10000 ₽</p>
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
                <p class="service-list_item-price">3500 ₽</p>
                <button class="service-list_item-btn HOVER">
                    <span></span>
                    <text>Заказать</text>
                </button>
            </li>
        </ul>

    </div>
@endsection

@section('footer')
    @include('inc/footer', [
    'scripts'=>[
        'menuBurger',
        ]
        ])
@endsection
