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
    'maxlength' => 100
    ])
    @formField('input', [
    'type' => 'textarea',
    'name' => 'education',
    'label' => 'Образование',
    'maxlength' => 100
    ])
    @formField('medias', [
    'name' => 'cover',
    'label' => 'Изображение',
    'required' => true,
    ])
@stop
