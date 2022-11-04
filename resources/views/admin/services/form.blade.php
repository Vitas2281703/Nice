@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
    'name' => 'title',
    'label' => 'Название услуги',
    'maxlength' => 100
    ])
    @formField('input', [
    'type' => 'textarea',
    'name' => 'description',
    'label' => 'Описание услуги',
    'maxlength' => 1000
    ])
@stop
