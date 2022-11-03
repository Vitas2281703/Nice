<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class OrderPointController extends BaseModuleController
{
    protected $moduleName = 'orderPoints';

    protected $indexOptions = [
        'permalink' => false,
    ];
}
