@extends('twill::layouts.form')

@section('contentFields')
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
    @formField('select', [
    'name' => 'fabricator_id',
    'label' => 'Производитель',
    'placeholder' => 'Выберите производителя',
    'options' => $fabricators
    ])
    @formField('select', [
    'name' => 'category_id',
    'label' => 'Категория',
    'placeholder' => 'Выберите производителя',
    'options' => $categories
    ])
@stop
