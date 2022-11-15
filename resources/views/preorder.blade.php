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
                <h2 class="form-auth_title" style="font-weight: 500; text-align: center">Оформление заказа<br>№3241432</h2>
                <input type="text" name="name" class="form-auth_input" placeholder="Как вас зовут">
                <input type="tel" name="telephone" class="form-auth_input" placeholder="Телефон">
                <input type="email" name="email" class="form-auth_input" placeholder="Email">
                <button class="form-auth_btn HOVER"><span></span><text>Оформить</text></button>
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
