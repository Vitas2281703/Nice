<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class OurClientController extends BaseModuleController
{
    protected $moduleName = 'ourClients';

    protected $indexOptions = [
        'permalink' => false,
    ];
}
