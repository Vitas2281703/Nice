<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class NewsController extends BaseModuleController
{
    protected $moduleName = 'news';

    protected $previewView = 'news';

    protected $indexOptions = [
        'permalink' => false,
    ];

    protected function previewData($item)
    {
        return [
            'news' => $item
        ];
    }
}
