<?php

namespace App\Repositories\Contracts;

use Illuminate\Http\Client\RequestException;

interface OrderServiceRepository
{
    public function getAllOrderService();

    public function getOrderServiceByCategory($categoryID);

    public function getOrderServiceByFabricator($fabricatorID);

    public function getOrderServiceByDevice($deviceID);
}

