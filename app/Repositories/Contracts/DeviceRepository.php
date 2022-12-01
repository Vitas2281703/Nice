<?php

namespace App\Repositories\Contracts;

use Illuminate\Http\Client\RequestException;

interface DeviceRepository
{
    public function getFilteredDevices($data);
}

