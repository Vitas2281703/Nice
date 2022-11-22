@extends('layouts/layout')

@section('header')
    @include('inc/header', [
    'styles'=>[
        'commonStyle',
        'news',
        'feedbackForm',
        'auth',
        'paginate'
        ]
        ])
@endsection

@section('content')
    <div class="container">
        <h1 class="all-news_title">Что у нас нового?</h1>

        <div class="all-news_block">

            @foreach($news as $newsOne)
                <div class="all-news_item">
                    <a href="{{ route('news', [
                                    'slug'=>$newsOne->slugs->first()->slug,
                                ]) }}" class="all-news_item-link">
                        <img src="{{ $newsOne->image('cover') }}" alt="" class="all-news_item-img">
                        <h1 class="all-news_item-title">{{$newsOne->title}}</h1>
                        <span class="all-news_item-date">Дата: {{ date('d.m.Y', strtotime($newsOne->created_at)) }}</span>
                    </a>
                </div>
            @endforeach

                {{ $news->links('inc/paginate') }}
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
