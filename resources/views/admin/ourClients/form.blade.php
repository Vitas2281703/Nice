@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
    'name' => 'name',
    'label' => 'Имя',
    'maxlength' => 50
    ])
    @formField('input', [
        'name' => 'description',
        'label' => 'Отзыв',
        'maxlength' => 100
    ])

@stop
