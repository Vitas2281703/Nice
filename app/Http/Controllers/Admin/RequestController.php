<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class RequestController extends BaseModuleController
{
    protected $moduleName = 'requests';

    protected $indexOptions = [
        'permalink' => false,
    ];
}
