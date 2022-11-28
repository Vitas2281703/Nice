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

    public function getOrderServiceByCategory($categoryID){
        return $this->repository->getOrderServiceByCategory($categoryID);
    }

    public function getOrderServiceByFabricator($fabricatorID){
        return true;
    }

    public function getOrderServiceByDevice($deviceID)
    {
        return true;
    }

}
