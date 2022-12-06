@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
    'name' => 'title',
    'label' => 'Название категории',
    'maxlength' => 100
    ])
@stop
