<?php

namespace App\Services;

use App\Repositories\Contracts\PromotionRepository;

class PromotionService implements Contracts\PromotionService
{
    public function __construct(
        public PromotionRepository $repository,
    ) {
    }

    /** @inheritDoc */
    public function getPromotions(): array {
        $promotions = $this->repository->get();
        $promotionOptions = [];
        foreach($promotions as $promotion) {
            $promotionOptions[] = ['label' => $promotion->title, 'value' => $promotion->id];
        }
        return $promotionOptions;
    }
}
