<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Worker;

class WorkerRepository extends ModuleRepository implements Contracts\WorkerRepository
{
    use HandleMedias;

    public function __construct(Worker $model)
    {
        $this->model = $model;
    }
}
