<?php

namespace App\Repositories\Contracts;

use Illuminate\Http\Client\RequestException;

interface UserRepository
{
    public function getUser(array $data);

    public function authorization($data);
}

