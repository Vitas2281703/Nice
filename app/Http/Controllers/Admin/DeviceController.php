<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;
use App\Services\Contracts\CategoryService;
use App\Services\Contracts\FabricatorService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;

class DeviceController extends BaseModuleController
{
    public function __construct(
        Application $app,
        Request $request,
        public FabricatorService $fabricator,
        public CategoryService $category
    )
    {
        parent::__construct($app, $request);
    }

    protected $moduleName = 'devices';

    protected $indexOptions = [
        'permalink' => false,
    ];

    protected function formData($request): array
    {
        return [
            'fabricators' => $this->fabricator->getFabricators(),
            'categories' => $this->category->getCategories(),
        ];
    }

    protected $indexColumns = [
        'title' => [ // field column
            'title' => 'Устройство',
            'field' => 'title',
        ],
        'category' => [
            'title' => 'Категория',
            'field' => 'category_id',
        ],
        'fabricator' => [
            'title' => 'Производитель',
            'field' => 'fabricator_id'
        ],
    ];
}
