<?php

namespace App\Services\Contracts;

use Illuminate\Http\Client\RequestException;

interface UserService
{
    public function registration(array $data);

    public function authorization(array $data);

    public function logout();
}

