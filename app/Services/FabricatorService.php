<?php

namespace App\Services;



use App\Repositories\Contracts\FabricatorRepository;

class FabricatorService implements Contracts\FabricatorService
{
    public function __construct(
        public FabricatorRepository $repository
    ) {
    }

    /** @inheritDoc */
    public function getFabricators(): array {
        $fabricators = $this->repository->get();
        $fabricatorsOptions = [];
        foreach($fabricators as $fabricator) {
            $fabricatorsOptions[] = ['label' => $fabricator->title, 'value' => $fabricator->id];
        }
        return $fabricatorsOptions;
    }
}
