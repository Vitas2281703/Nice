<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\OurClient;

class OurClientRepository extends ModuleRepository
{
    use HandleMedias;

    public function __construct(OurClient $model)
    {
        $this->model = $model;
    }
}
