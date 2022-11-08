<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class JobStepController extends BaseModuleController
{
    protected $moduleName = 'jobSteps';

    protected $indexOptions = [
        'permalink' => false,
    ];
}
