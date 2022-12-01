<?php

namespace App\Repositories;


use A17\Twill\Repositories\ModuleRepository;
use App\Models\OrderPoint;

class OrderPointRepository extends ModuleRepository
{


    public OrderPoint $model;

    public function __construct(OrderPoint $model)
    {
        $this->model = $model;
    }
}
