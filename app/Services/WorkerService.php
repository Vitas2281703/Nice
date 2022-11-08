<?php

namespace App\Services;



use App\Repositories\Contracts\WorkerRepository;

class WorkerService implements Contracts\WorkerService
{
    public function __construct(
        public WorkerRepository $repository
    ) {
    }

    /** @inheritDoc */
    public function getWorkers(){
        return $this->repository->get();
    }
}
