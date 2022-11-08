<?php

namespace App\Services\Contracts;

use Illuminate\Http\Client\RequestException;

interface WorkerService
{
    public function getWorkers();
}

