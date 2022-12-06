@extends('twill::layouts.form')

@section('contentFields')

    @section('sideFieldsets')
        <a17-fieldset title="Статусы" id="statuses">
            @formField('select', [
            'name' => 'status',
            'label' => 'Статус',
            'placeholder' => 'Выберите статус заказа',
            'options' => [
            [
            'value'=>'Создан',
            'label'=>'Создан',
            ],
            [
            'value'=>'Принят',
            'label'=>'Принят',
            ],
            [
            'value'=>'Обработан',
            'label'=>'Обработан',
            ],
            [
            'value'=>'В работе',
            'label'=>'В работе',
            ],
            [
            'value'=>'Готов к выдаче',
            'label'=>'Готов к выдаче',
            ],
            [
            'value'=>'Завершен',
            'label'=>'Завершен',
            ],
            [
            'value'=>'Отменен',
            'label'=>'Отменен',
            ],
            ]
            ])
            @formField('select', [
            'name' => 'status_payment',
            'label' => 'Статус',
            'placeholder' => 'Выберите статус оплаты',
            'options' => [
            [
            'value'=>'Не оплачено',
            'label'=>'Не оплачено',
            ],
            [
            'value'=>'Оплачен',
            'label'=>'Оплачен',
            ],
            [
            'value'=>'Возврат',
            'label'=>'Возврат',
            ],
            ]
            ])
            @formField('date_picker', [
            'name' => 'created_at',
            'label' => 'Дата поступления',
            ])
        </a17-fieldset>
    @endsection

@stop
