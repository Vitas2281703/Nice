<?php

namespace App\Services\Contracts;

use App\Models\User;
use Illuminate\Http\Client\RequestException;

interface OrderServiceService
{
    public function getAllOrderService();

    public function getOrderServiceByDevices($devicesIds);

    public function addOrder(User|null $user, $serviceId, $amount = null);

    public function getAdminOrder($order_id);

    public function getOrder($order_id);

    public function getOrderByUser(int $userId);

    public function orderRegistration($servicesId, $amounts, $userId, int $bonuses = null);
}

