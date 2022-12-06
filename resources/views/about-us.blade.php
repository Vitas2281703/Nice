@extends('layouts/layout')

@section('header')
    @include('inc/header', [
    'styles'=>[
        'commonStyle',
        'mapStyle',
        'aboutUsPage',
        'feedback',
        'feedbackForm'
        ]
        ])
@endsection

@section('content')
    <div class="container">

        <h1 class="aboutUs-title">Давайте знакомиться ;)</h1>

        <div class="aboutUs">
            <p class="aboutUs_p">
                Ремонт компьютеров, ноутбуков, мониторов, смартфонов, планшетов любой сложности.
                Бесплатная диагностика и консультация.<br>
                <br>
                8-951-585-8334<br>
                <br>
                Пр. Ленина 64а. Здание Ростелеком.<br>
                Ул. Рукавишникова 9а. <br>
                <br>
                ПН-ПТ с 10:00 до 19:00<br>
                СБ с 10:00 да 14:00<br>
                ВС выходной.<br>
            </p>
            <img src="assets\images\logoWithHand.svg" alt="" class="aboutUs_img">
            <img src="assets\images\mobileLogo.svg" alt="" class="aboutUs_img aboutUs_img_for-mobile">
        </div>


        <h1 class="aboutUs-title">У нас работают самые крутые специалисты!</h1>
        <div class="workers_block carousel-block" id = "worker_carousel-block">
            <div class="worker-content carousel-content" id = "worker_carousel-content">
            @foreach($workers as $worker)
                <div class="worker carousel-item">
                    <img src="{{ $worker->image('cover') }}" alt="" class="worker-img">
                    <div class="worker-info">
                        <p class="worker-info_p worker-info_p-name">{{ $worker->name }}</p>
                        <p class="worker-info_p worker-info_p-post">{{ $worker->post }}</p>
                        <p class="worker-info_p worker-info_p-education">{{ $worker->education }}</p>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
        <div class="carousel-paginator_block">
            <button class="carousel-paginator carousel-paginator_prev" id="worker_carousel-paginator_prev">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                >
                    <path fill="none" d="M0 0h24v24H0V0z" />
                    <path d="M15.61 7.41L14.2 6l-6 6 6 6 1.41-1.41L11.03 12l4.58-4.59z" />
                </svg>
            </button>
            <button class="carousel-paginator carousel-paginator_next" id="worker_carousel-paginator_next">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                >
                    <path fill="none" d="M0 0h24v24H0V0z" />
                    <path d="M10.02 6L8.61 7.41 13.19 12l-4.58 4.59L10.02 18l6-6-6-6z" />
                </svg>
            </button>
        </div>
        @include('inc/feedback')

    </div>

    @include('inc/googleMap')
    @include('inc/feedbackForm')
@endsection

@section('footer')
    @include('inc/footer', [
    'scripts'=>[
        'menuBurger',
        'mapSettings',
        'feedbackForm',
        'workerCarousel',
        'feedbackCarousel',
        ]
        ])
@endsection
