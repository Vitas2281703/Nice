@extends('layouts/layout')

@section('header')
    @include('inc/header', [
    'styles'=>[
        'commonStyle',
        'auth'
        ]
        ])
@endsection

@section('content')
    <div class="container">
        <div class="wrapper form-auth_block">
            <form method="POST" action="{{ route('login-post') }}" class="form-auth">
                @csrf
                <h2 class="form-auth_title">Авторизация</h2>
                @if(isset($error))
                    <span>{{ $error }}</span>
                @endif
                <input type="email" name="email" class="form-auth_input" placeholder="Email">
                <input type="password" name="password" class="form-auth_input" placeholder="Пароль">
                <button type="submit" class="form-auth_btn HOVER"><span></span><text>Войти</text></button>
                <p>Еще нет аккаунта?
                    <a href="{{ route('registration') }}" class="form-auth_link">Зарегистрироваться</a>
                </p>
            </form>
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
