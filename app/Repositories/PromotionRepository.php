<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Promotion;
/**
 * @extends ModuleRepository<Promotion>
 */

class PromotionRepository extends ModuleRepository implements Contracts\PromotionRepository
{
    use HandleSlugs, HandleMedias;

    public function __construct(Promotion $model)
    {
        $this->model = $model;
    }

    public function getOnePromo($slug)
    {
        return $this->model->newQuery()
            ->whereRelation('slugs', 'slug', '=', $slug)->first();
    }

}
