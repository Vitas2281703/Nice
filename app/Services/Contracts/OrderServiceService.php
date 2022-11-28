<?php

namespace App\Services\Contracts;

use Illuminate\Http\Client\RequestException;

interface OrderServiceService
{
    public function getAllOrderService();

    public function getOrderServiceByCategory($categoryID);

    public function getOrderServiceByFabricator($fabricatorID);

    public function getOrderServiceByDevice($deviceID);
}

