<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Category;

class CategoryRepository extends ModuleRepository implements Contracts\CategoryRepository
{
    use HandleSlugs, HandleMedias;

    public function __construct(Category $model)
    {
        $this->model = $model;
    }

}
