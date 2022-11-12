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
            <form action="" class="form-auth">
                @csrf
                <h2 class="form-auth_title">Регистрация</h2>
                <input type="text" name="name" class="form-auth_input" placeholder="Как вас зовут">
                <input type="tel" name="telephone" class="form-auth_input" placeholder="Телефон">
                <input type="email" name="email" class="form-auth_input" placeholder="Email">
                <input type="password" name="password" class="form-auth_input" placeholder="Пароль">
                <input type="password" name="password-repeat" class="form-auth_input" placeholder="Повторите пароль">
                <button class="form-auth_btn HOVER"><span></span><text>Зарегистрироваться</text></button>
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
        'menuBurger'
        ]
        ])
@endsection
