@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'fio',
        'label' => 'Имя клиента',
        'maxlength' => 100
    ])
    @formField('input', [
    'name' => 'phone',
    'label' => 'Телефон клиента',
    'maxlength' => 100
    ])
    @formField('input', [
    'type' => 'textarea',
    'name' => 'message',
    'label' => 'Сообщение',
    'maxlength' => 100
    ])
    @formField('select', [
    'name' => 'status',
    'label' => 'Статус',
    'placeholder' => 'Выберите статус',
    'options' => [
            [
                'value'=>'Создан',
                'label'=>'Создан',
            ],
            [
                'value'=>'Обработан',
                'label'=>'Обработан',
            ]
        ]
    ])
    @formField('date_picker', [
    'name' => 'created_at',
    'label' => 'Дата поступления',
    ])
@stop
