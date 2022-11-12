@extends('layouts/layout')

@section('header')
    @include('inc/header', [
    'styles'=>[
        'commonStyle',
        'promotion'
        ]
        ])
@endsection

@section('content')
    <div class="container">
        <h1 class="promo-title">Бесплатная диагностика</h1>
        <div class="promo_info">
            <p class="promo-text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi atque aut
                blanditiis deleniti dolorem ea eaque est id ipsam ipsum magni officiis, porro qui
                quos soluta tenetur unde veniam?
            </p>
            <img src="assets\images\banner-1.png" alt="" class="promo-img">
        </div>
    </div>
@endsection

@section('footer')
    @include('inc/footer', [
    'scripts'=>[
        'menuBurger'
        ]
        ])
@endsection
