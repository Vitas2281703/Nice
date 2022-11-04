<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Fabricator;

class FabricatorRepository extends ModuleRepository implements Contracts\FabricatorRepository
{
    use HandleSlugs, HandleMedias;

    public function __construct(Fabricator $model)
    {
        $this->model = $model;
    }
}
