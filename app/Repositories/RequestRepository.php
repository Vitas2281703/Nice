<?php

namespace App\Repositories;


use A17\Twill\Repositories\ModuleRepository;
use App\Models\Request;

class RequestRepository extends ModuleRepository
{
    

    public function __construct(Request $model)
    {
        $this->model = $model;
    }
}
