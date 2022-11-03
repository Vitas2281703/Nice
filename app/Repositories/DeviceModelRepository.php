<?php

namespace App\Repositories;


use A17\Twill\Repositories\ModuleRepository;
use App\Models\DeviceModel;

class DeviceModelRepository extends ModuleRepository
{
    

    public function __construct(DeviceModel $model)
    {
        $this->model = $model;
    }
}
