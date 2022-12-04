<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class RequestController extends BaseModuleController
{
    protected $moduleName = 'requests';

    protected $titleColumnKey = 'fio';

    protected $indexColumns = [
        'fio' => [ // field column
            'title' => 'Имя клиента',
            'field' => 'fio',
        ],
        'phone' => [
            'title' => 'Телефон',
            'field' => 'phone',
        ],
        'status' => [
            'title' => 'Статус',
            'field' => 'status'
        ],
        'created_at' => [
            'title' => 'Дата и время',
            'field' => 'formatted_created_at'
        ]
    ];
}
