<?php

namespace App\Services\Contracts;

use Illuminate\Http\Client\RequestException;

interface DeviceService
{
    /**
     * @return array
     */
    public function getDevices(): array;
}

