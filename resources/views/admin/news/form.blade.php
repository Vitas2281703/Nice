@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
    'name' => 'title',
    'label' => 'Заголовок',
    'maxlength' => 60,
    'required' => true,
    ])
    @formField('wysiwyg', [
    'name' => 'description',
    'label' => 'Текст статьи',
    'toolbarOptions' => [
    ['header' => [2, 3, 4, 5, 6, false]],
    'bold',
    'italic',
    'underline',
    'strike',
    ["script" => "super"],
    ["script" => "sub"],
    "blockquote",
    "code-block",
    ['list' => 'ordered'],
    ['list' => 'bullet'],
    ['indent' => '-1'],
    ['indent' => '+1'],
    ["align" => []],
    ["direction" => "rtl"],
    'link',
    "clean",
    ],
    'placeholder' => 'Описание',
    'editSource' => true,
    'required' => true,
    ])

    @formField('medias', [
    'name' => 'cover',
    'label' => 'Изображение',
    'required' => true,
    ])
    @section('sideFieldsets')
        <a17-fieldset title="SEO" id="seo">
            @formField('input', [
            'name' => 'seo_title',
            'label' => 'Title',
            'maxlength' => 60,
            'required' => true,
            ])

            @formField('input', [
            'name' => 'seo_description',
            'label' => 'Description',
            'maxlength' => 155,
            'required' => true,
            ])
        </a17-fieldset>
    @endsection
@stop
