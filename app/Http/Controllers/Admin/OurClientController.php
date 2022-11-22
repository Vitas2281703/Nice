<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class OurClientController extends BaseModuleController
{
    protected $moduleName = 'ourClients';

    protected $titleColumnKey = 'name';

    protected $indexOptions = [
        'permalink' => false,
    ];
}
