<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class OrderController extends BaseModuleController
{
    protected $moduleName = 'orders';

    protected $titleColumnKey = 'formatted_title';

    protected $indexColumns = [
        'formatted_title' => [ // field column
            'title' => 'Номер заказа',
            'field' => 'formatted_title',
        ],
        'status' => [
            'title' => 'Статус заказа',
            'field' => 'status'
        ],
        'status_payment' => [
            'title' => 'Статус оплаты',
            'field' => 'status_payment'
        ],
        'created_at' => [
            'title' => 'Дата и время',
            'field' => 'formatted_created_at'
        ]
    ];

    protected $indexOptions = [
        'permalink' => false,
    ];
}
