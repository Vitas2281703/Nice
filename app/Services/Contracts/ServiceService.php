<?php

namespace App\Services\Contracts;

use Illuminate\Http\Client\RequestException;

interface ServiceService
{
    /**
     * @return array<int, array{label: string, value: integer}>
     */
    public function getServices(): array;

}

