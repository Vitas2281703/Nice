<?php

namespace App\Repositories;


use A17\Twill\Repositories\ModuleRepository;
use App\Models\OrderService;

class OrderServiceRepository extends ModuleRepository
{
    

    public function __construct(OrderService $model)
    {
        $this->model = $model;
    }
}
