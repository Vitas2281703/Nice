<?php

namespace App\Repositories;


use A17\Twill\Repositories\ModuleRepository;
use App\Models\Device;

class DeviceRepository extends ModuleRepository
{
    

    public function __construct(Device $model)
    {
        $this->model = $model;
    }
}
