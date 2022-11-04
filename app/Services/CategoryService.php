<?php

namespace App\Services;



use App\Repositories\CategoryRepository;
use App\Repositories\Contracts\FabricatorRepository;

class CategoryService implements Contracts\CategoryService
{
    public function __construct(
        public CategoryRepository $repository
    ) {
    }

    /** @inheritDoc */
    public function getCategories(): array {
        $categories = $this->repository->get();
        $categoriesOptions = [];
        foreach($categories as $category) {
            $categoriesOptions[] = ['label' => $category->title, 'value' => $category->id];
        }
        return $categoriesOptions;
    }
}
