@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
    'name' => 'title',
    'label' => 'Заголовок',
    'maxlength' => 200
    ])
    @formField('input', [
    'name' => 'description',
    'type' => 'textarea',
    'label' => 'Описание',
    'maxlength' => 1000
    ])
    @formField('input', [
    'name' => 'seo_title',
    'label' => 'СЕО заголовок',
    'maxlength' => 200
    ])
    @formField('input', [
    'name' => 'seo_description',
    'type' => 'textarea',
    'label' => 'СЕО описание',
    'maxlength' => 1000
    ])
@stop
