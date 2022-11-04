@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
    'name' => 'title',
    'label' => 'Название категории',
    'maxlength' => 100
    ])
    @formField('input', [
        'type' => 'textarea',
        'name' => 'description',
        'label' => 'Описание категории',
        'maxlength' => 1000
    ])
@stop
