<?php

namespace App\Repositories;


use A17\Twill\Repositories\ModuleRepository;
use App\Models\JobStep;

class JobStepRepository extends ModuleRepository implements Contracts\JobStepRepository
{


    public function __construct(JobStep $model)
    {
        $this->model = $model;
    }
}
