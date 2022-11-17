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

        <h1 class="aboutUs-title">Давайте знаrомиться ;)</h1>

        <div class="aboutUs">
            <p class="aboutUs_p">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                A consectetur corporis cupiditate debitis dolorum eaque, hic impedit
                itaque iusto officiis placeat quasi quibusdam recusandae repellat rerum
                sapiente sequi sunt temporibus. <br><br>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                A consectetur corporis cupiditate debitis dolorum eaque, hic impedit
                itaque iusto officiis placeat quasi quibusdam recusandae repellat rerum
                sapiente sequi sunt temporibus. <br><br>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                A consectetur corporis cupiditate debitis dolorum eaque, hic impedit
                itaque iusto officiis placeat quasi quibusdam recusandae repellat rerum
                sapiente sequi sunt temporibus.
            </p>
            <img src="assets\images\logoWithHand.svg" alt="" class="aboutUs_img">
            <img src="assets\images\mobileLogo.svg" alt="" class="aboutUs_img aboutUs_img_for-mobile">
        </div>


        <h1 class="aboutUs-title">У нас работают самые крутые специалисты!</h1>
        <div class="workers_block carousel-block">
            @foreach($workers as $worker)
                <div class="worker carousel-item">
                    <img src="assets\images\yarik.jpg" alt="" class="worker-img">
                    <div class="worker-info">
                        <p class="worker-info_p worker-info_p-name">{{ $worker->name }}</p>
                        <p class="worker-info_p worker-info_p-post">{{ $worker->post }}</p>
                        <p class="worker-info_p worker-info_p-education">{{ $worker->education }}</p>
                    </div>
                </div>
            @endforeach
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
        ]
        ])
@endsection
