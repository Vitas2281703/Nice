<?php

namespace App\Services\Contracts;


use Illuminate\Pagination\LengthAwarePaginator;

interface JobStepService
{
    /**
     * @return LengthAwarePaginator
     */
    public function getSteps(): LengthAwarePaginator;
}

