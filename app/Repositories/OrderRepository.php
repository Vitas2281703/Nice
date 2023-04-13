<?php

namespace App\Repositories;


use A17\Twill\Repositories\ModuleRepository;
use App\Models\Order;

class OrderRepository extends ModuleRepository
{

    public function __construct(Order $model)
    {
        $this->model = $model;
    }

    public function getOrders()
    {
        return $this->model->newQuery()
            ->orderByDesc('created_at')
            ->get();
    }
}
