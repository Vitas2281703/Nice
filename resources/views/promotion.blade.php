@extends('layouts/layout')

@section('header')
    @include('inc/header', [
    'styles'=>[
        'commonStyle',
        'promotion',
        'feedbackForm',
        'auth'
        ],
    'seoTitle'=>$promotion->seo_title,
    'seoDescription'=>$promotion->seo_description,
        ])
@endsection

@section('content')
    <div class="container">
        <h1 class="promo-title">{{ $promotion->title }}</h1>
        <div class="promo_info">
            <div class="promo-text">
                {!! $promotion?->description !!}
            </div>
            <img src="{{ $promotion->image('cover') }}" alt="" class="promo-img">
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
