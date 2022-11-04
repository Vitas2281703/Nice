<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;
use App\Services\Contracts\CategoryService;
use App\Services\Contracts\FabricatorService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;

class CategoryController extends BaseModuleController
{
    public function __construct(Application $app, Request $request)
    {
        parent::__construct($app, $request);
    }

    protected $moduleName = 'categories';

    protected $indexOptions = [
    ];

}
