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

    @formField('input', [
    'name' => 'price',
    'label' => 'Цена услуги',
    'type' => 'number'
    ])
    @formField('input', [
    'name' => 'old_price',
    'label' => 'Старая цена',
    'type' => 'number'
    ])
@stop
