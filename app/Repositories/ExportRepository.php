<?php

namespace App\Repositories;


use A17\Twill\Repositories\ModuleRepository;
use App\Models\Export;

class ExportRepository extends ModuleRepository
{
    

    public function __construct(Export $model)
    {
        $this->model = $model;
    }
}
