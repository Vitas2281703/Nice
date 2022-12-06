@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
    'name' => 'title',
    'label' => 'Производитель',
    'maxlength' => 100
    ])
@stop
