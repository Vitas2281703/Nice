<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Worker;

class WorkerRepository extends ModuleRepository implements Contracts\WorkerRepository
{
    use HandleFiles;

    public function __construct(Worker $model)
    {
        $this->model = $model;
    }
}