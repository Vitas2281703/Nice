<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class WorkerController extends BaseModuleController
{
    protected $moduleName = 'workers';

    protected $titleColumnKey = 'name';

    protected $indexOptions = [
        'permalink' => false,
    ];
}
