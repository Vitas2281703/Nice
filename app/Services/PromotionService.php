<?php

namespace App\Services;

use App\Repositories\Contracts\PromotionRepository;
use Illuminate\View\View;

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

    public function getPromo(){
        return $this->repository->get();
    }

    public function showPromo($slug): View {
        return view('promotion', ['promotion'=>$this->repository->getOnePromo($slug)]);
    }


}
