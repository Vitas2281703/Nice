<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\News;

class NewsRepository extends ModuleRepository implements Contracts\NewsRepository
{
    use HandleSlugs, HandleMedias;

    public function __construct(News $model)
    {
        $this->model = $model;
    }

    public function getOneNews($slug)
    {
        return $this->model->newQuery()
            ->whereRelation('slugs', 'slug', '=', $slug)->first();
    }

}
