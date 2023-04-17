@extends('twill::layouts.form')

@section('contentFields')
    <style type="text/css" media="screen">
        .export-api-link {
            background-color: #1a8f36;
            padding: 20px 10px;
            font-weight: bold;
            font-size: 18px;
            letter-spacing: 0.04em;
            color: #FFFFFF;
        }
    </style>
<br>
    <a href="{{ route('api.export.users') }}">
        <a17-button variant="validate">
            Экспортировать пользователей
        </a17-button>
    </a>
    <a href="{{ route('api.export.orders') }}">
        <a17-button variant="validate">
            Экспортировать заказы
        </a17-button>
    </a>
    <br>
@stop
