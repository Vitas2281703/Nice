@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'name',
        'label' => 'Имя',
        'maxlength' => 50
    ])
    @formField('input', [
    'name' => 'post',
    'label' => 'Должность ',
    'maxlength' => 150
    ])
    @formField('input', [
    'type' => 'textarea',
    'name' => 'education',
    'label' => 'Имя',
    'maxlength' => 200
    ])
@stop
