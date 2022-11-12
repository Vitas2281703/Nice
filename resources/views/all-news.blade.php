@extends('layouts/layout')

@section('header')
    @include('inc/header', [
    'styles'=>[
        'commonStyle',
        'news'
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
                </a>
            </div>
            <div class="all-news_item">
                <a href="{{ route('news') }}" class="all-news_item-link">
                    <img src="assets\images\news img.jpg" alt="" class="all-news_item-img">
                    <h1 class="all-news_item-title">Как найти iPhone через iCloud с другого телефона</h1>
                </a>
            </div>
            <div class="all-news_item">
                <a href="{{ route('news') }}" class="all-news_item-link">
                    <img src="assets\images\news img.jpg" alt="" class="all-news_item-img">
                    <h1 class="all-news_item-title">Как найти iPhone через iCloud с другого телефона</h1>
                </a>
            </div>
            <div class="all-news_item">
                <a href="{{ route('news') }}" class="all-news_item-link">
                    <img src="assets\images\news img.jpg" alt="" class="all-news_item-img">
                    <h1 class="all-news_item-title">Как найти iPhone через iCloud с другого телефона</h1>
                </a>
            </div>
            <div class="all-news_item">
                <a href="{{ route('news') }}" class="all-news_item-link">
                    <img src="assets\images\news img.jpg" alt="" class="all-news_item-img">
                    <h1 class="all-news_item-title">Как найти iPhone через iCloud с другого телефона</h1>
                </a>
            </div>

        </div>

    </div>
@endsection

@section('footer')
    @include('inc/footer', [
    'scripts'=>[
        'menuBurger',
        ]
        ])
@endsection
