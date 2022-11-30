<?php

namespace App\Services;



use App\Repositories\Contracts\FabricatorRepository;
use App\Repositories\Contracts\ServiceRepository;

class ServiceService implements Contracts\ServiceService
{
    public function __construct(
        public ServiceRepository $repository
    ) {
    }

    /** @inheritDoc */
    public function getServices(): array {
        $services = $this->repository->get();
        $serviceOptions = [];
        foreach($services as $service) {
            $serviceOptions[] = ['label' => $service->title, 'value' => $service->id];
        }
        return $serviceOptions;
    }

    public function getAllServices(){
        return $this->repository->get();
    }

}
