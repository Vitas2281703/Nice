@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'title',
        'label' => 'Позиция прайс-листа',
        'maxlength' => 150
    ])
    @formField('select', [
    'name' => 'device_id',
    'label' => 'Устройство',
    'placeholder' => 'Выберите устройство',
    'options' => $devices
    ])
    @formField('select', [
    'name' => 'service_id',
    'label' => 'Услуга',
    'placeholder' => 'Выберите Услугу',
    'options' => $services
    ])
    @formField('select', [
    'name' => 'promotion_id',
    'label' => 'Акция',
    'placeholder' => 'Выберите Акцию',
    'options' => $promotions
    ])
    @formField('input', [
    'name' => 'price',
    'label' => 'Цена услуги',
    'type' => 'number'
    ])
@stop
