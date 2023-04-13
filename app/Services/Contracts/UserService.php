<?php

namespace App\Services\Contracts;

use Illuminate\Http\Client\RequestException;

interface UserService
{
    public function registration(array $data, ?int $ref_id);

    public function authorization(array $data);

    public function logout();

    public function getUsers();
}

