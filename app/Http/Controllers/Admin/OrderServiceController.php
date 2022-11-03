<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class OrderServiceController extends BaseModuleController
{
    protected $moduleName = 'orderServices';

    protected $indexOptions = [
        'permalink' => false,
    ];
}
