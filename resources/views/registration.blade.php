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
            <form method="POST" action="{{ route('registration-post') }}" class="form-auth">
                @csrf
                <h2 class="form-auth_title">Регистрация</h2>
                @if(isset($error))
                    <span>{{ $error }}</span>
                @endif
                <input type="text" name="name" class="form-auth_input" placeholder="Как вас зовут">
                <input type="tel" name="phone" class="form-auth_input form-auth_input-telephone" placeholder="Телефон">
                <input type="email" name="email" class="form-auth_input" placeholder="Email">
                <input type="password" name="password" class="form-auth_input" placeholder="Пароль">
                <input type="password" name="password-confirm" class="form-auth_input" placeholder="Повторите пароль">
                <button class="form-auth_btn HOVER disabled-btn" type="submit"><span></span><text>Зарегистрироваться</text></button>
                <p class="form-auth_p">Нажимая кнопку вы подтверждаете свое согласие с
                    <a href="" class="form-auth_link">
                        пользовательским соглашением
                    </a>
                    и
                    <a href="" class="form-auth_link">
                        политикой обработки персональных данных
                    </a>
                </p>
            </form>
        </div>

    </div>
@endsection

@section('footer')
    @include('inc/footer', [
    'scripts'=>[
        'menuBurger',
        'registrationForm'
        ]
        ])
@endsection
