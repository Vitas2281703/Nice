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

    public function afterSave($object, $fields): void
    {
        if(isset($fields['service_id']) || isset($fields['device_id'])) {
            $object->update(['service_id' => $fields['service_id'], 'device_id' => $fields['device_id']]);
        }

        if(isset($fields['promotion_id'])) {
            $object->update(['promotion_id' => $fields['promotion_id']]);
        }
    }
}
