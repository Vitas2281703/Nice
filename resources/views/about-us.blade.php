@extends('layouts/layout')

@section('header')
    @include('inc/header', [
    'styles'=>[
        'commonStyle',
        'mapStyle',
        'aboutUsPage',
        ]
        ])
@endsection

@section('content')
    <div class="container">

        <h1>Давайте знакомиться!</h1>

        <div class="workers_block">
            @foreach($workers as $worker)
                <div class="worker">
                    <img src="" alt="" class="worker-img">
                    <p class="worker-name">{{ $worker->name }}</p>
                    <p class="worker-post">{{ $worker->post }}</p>
                    <p class="worker-education">{{ $worker->education }}</p>
                </div>
            @endforeach
        </div>


    </div>

    @include('inc/googleMap')
@endsection

@section('footer')
    @include('inc/footer', [
    'scripts'=>[
        'menuBurger',
        'mapSettings',
        ]
        ])
@endsection
