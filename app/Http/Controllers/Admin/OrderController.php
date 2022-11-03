<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class OrderController extends BaseModuleController
{
    protected $moduleName = 'orders';

    protected $indexOptions = [
        'permalink' => false,
    ];
}
