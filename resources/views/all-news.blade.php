@extends('layouts/layout')

@section('header')
    @include('inc/header', [
    'styles'=>[
        'commonStyle',
        'news',
        'feedbackForm',
        'auth'
        ]
        ])
@endsection

@section('content')
    <div class="container">
        <h1 class="news_title">Что у нас нового?</h1>

        <div class="all-news_block">
            <div class="all-news_item">
                <a href="{{ route('news') }}" class="all-news_item-link">
                    <img src="assets\images\news img.jpg" alt="" class="all-news_item-img">
                    <h1 class="all-news_item-title">Как найти iPhone через iCloud с другого телефона</h1>
                    <span class="all-news_item-date">Дата: 15.11.2022</span>
                </a>
            </div>
            <div class="all-news_item">
                <a href="{{ route('news') }}" class="all-news_item-link">
                    <img src="assets\images\news img.jpg" alt="" class="all-news_item-img">
                    <h1 class="all-news_item-title">Как найти iPhone через iCloud с другого телефона</h1>
                    <span class="all-news_item-date">Дата: 15.11.2022</span>
                </a>
            </div>
            <div class="all-news_item">
                <a href="{{ route('news') }}" class="all-news_item-link">
                    <img src="assets\images\news img.jpg" alt="" class="all-news_item-img">
                    <h1 class="all-news_item-title">Как найти iPhone через iCloud с другого телефона</h1>
                    <span class="all-news_item-date">Дата: 15.11.2022</span>
                </a>
            </div>
            <div class="all-news_item">
                <a href="{{ route('news') }}" class="all-news_item-link">
                    <img src="assets\images\news img.jpg" alt="" class="all-news_item-img">
                    <h1 class="all-news_item-title">Как найти iPhone через iCloud с другого телефона</h1>
                    <span class="all-news_item-date">Дата: 15.11.2022</span>
                </a>
            </div>
            <div class="all-news_item">
                <a href="{{ route('news') }}" class="all-news_item-link">
                    <img src="assets\images\news img.jpg" alt="" class="all-news_item-img">
                    <h1 class="all-news_item-title">Как найти iPhone через iCloud с другого телефона</h1>
                    <span class="all-news_item-date">Дата: 15.11.2022</span>
                </a>
            </div>

        </div>

    </div>
    @include('inc/feedbackForm')
@endsection

@section('footer')
    @include('inc/footer', [
    'scripts'=>[
        'menuBurger',
        'feedbackForm'
        ]
        ])
@endsection
