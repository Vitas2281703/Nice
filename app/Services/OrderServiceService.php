<?php

namespace App\Services;



use App\Repositories\Contracts\OrderServiceRepository;

class OrderServiceService implements Contracts\OrderServiceService
{
    public function __construct(
        public OrderServiceRepository $repository
    ) {
    }

    public function getAllOrderService()
    {
        return $this->repository->getAllOrderService();
    }

    public function getOrderServiceByDevices($devicesIds){
        return $this->repository->getOrderServiceByDevices($devicesIds);
    }

}
