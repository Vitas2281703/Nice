<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class DeviceModelController extends BaseModuleController
{
    protected $moduleName = 'deviceModels';

    protected $indexOptions = [
        'permalink' => false,
    ];
}
