<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class DeviceController extends BaseModuleController
{
    protected $moduleName = 'devices';

    protected $indexOptions = [
        'permalink' => false,
    ];
}
