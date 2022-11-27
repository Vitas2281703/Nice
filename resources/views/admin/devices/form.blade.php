@extends('twill::layouts.form')

@section('contentFields')
    @formField('select', [
    'name' => 'category_id',
    'label' => 'Категория',
    'placeholder' => 'Выберите категорию',
    'options' => $categories
    ])
    @formField('select', [
    'name' => 'fabricator_id',
    'label' => 'Производитель',
    'placeholder' => 'Выберите производителя',
    'options' => $fabricators
    ])
    @formField('input', [
    'name' => 'title',
    'label' => 'Название устройства',
    'maxlength' => 100
    ])
    @formField('input', [
    'type' => 'textarea',
    'name' => 'description',
    'label' => 'Описание устройства',
    'maxlength' => 1000
    ])
@stop
