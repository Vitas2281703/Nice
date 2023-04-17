<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class ExportController extends BaseModuleController
{
    protected $moduleName = 'exports';

    protected $indexOptions = [
        'permalink' => false,
    ];
}
