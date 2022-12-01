<?php

namespace App\Services\Contracts;

use Illuminate\Http\Client\RequestException;

interface DeviceService
{
    /**
     * @return array
     */
    public function getDevices(): array;

    public function getDevicesByCategory($categoryID);

    public function list();

    public function getFilteredDevices($data);

}

