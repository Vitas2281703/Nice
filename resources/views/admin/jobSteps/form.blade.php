@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'type' => 'textarea',
        'name' => 'description',
        'label' => 'Описание этапа',
        'maxlength' => 200
    ])
@stop
