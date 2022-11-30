<?php

namespace App\Repositories\Contracts;

use Illuminate\Http\Client\RequestException;

interface OrderServiceRepository
{
    public function getAllOrderService();

    public function getOrderServiceByDevices($devicesIds);

}

