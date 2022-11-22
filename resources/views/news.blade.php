@extends('layouts/layout')

@section('header')
    @include('inc/header', [
    'styles'=>[
        'commonStyle',
        'news',
        'feedbackForm',
        'auth'
        ],
    'seoTitle'=>$news->seo_title,
    'seoDescription'=>$news->seo_description,
        ])
@endsection

@section('content')
    <div class="container">
        <div class="news-title_block">
            <h1 class="news_title">{{ $news->title }}</h1>
            <img src="{{ $news->image('cover') }}" alt="" class="news_img">
        </div>
        <div class="news_content">
            <div class="news_text">
                {!! $news?->description !!}
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
