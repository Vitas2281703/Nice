<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;
use App\Repositories\Contracts\OrderServiceRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;

class OrderPointController extends BaseModuleController
{
    protected $moduleName = 'orderPoints';

    protected $indexOptions = [
        'permalink' => false,
    ];
    public function __construct(Application $app, Request $request, private readonly OrderServiceRepository $serviceRepository)
    {
        parent::__construct($app, $request);
    }

    protected $indexColumns = [
        'title' => [
            'relationship' => 'orderService',
            'field' => 'title',
            'title' => 'Услуга',
        ],
    ];
    /**
     * @param array $scopes
     * @param bool $forcePagination
     * @return \Illuminate\Database\Eloquent\Collection
     */
    protected function getIndexItems($scopes = [], $forcePagination = false)
    {

        return $this->transformIndexItems($this->serviceRepository->get(
            $this->indexWith,
            $scopes,
            $this->orderScope(),
            $this->request->get('offset') ?? $this->perPage ?? 50,
            $forcePagination
        ));
    }

}
