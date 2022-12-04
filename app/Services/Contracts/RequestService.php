<?php

namespace App\Services\Contracts;

use App\Models\User;

interface RequestService
{
    public function createRequest(array $data): void;
}

