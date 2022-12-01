<?php

namespace App\Services\Contracts;

use Illuminate\Http\Client\RequestException;

interface FabricatorService
{
    /**
     * @return array<int, array{label: string, value: integer}>
     */
    public function getFabricators(): array;

    public function list();
}

