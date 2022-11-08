<?php

namespace App\Services;

use App\Repositories\Contracts\JobStepRepository;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class JobStepService implements Contracts\JobStepService
{
    public function __construct(
        public JobStepRepository $repository
    )
    {
    }

    /** @inheritDoc */
    public function getSteps(): LengthAwarePaginator
    {
        return $this->repository->get();
    }
}
