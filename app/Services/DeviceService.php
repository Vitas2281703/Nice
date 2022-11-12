<?php

namespace App\Services;



use App\Repositories\Contracts\DeviceRepository;

class DeviceService implements Contracts\DeviceService
{
    public function __construct(
        public DeviceRepository $repository
    ) {
    }

    /** @inheritDoc */
    public function getDevices(): array {
        $devices = $this->repository->get();
        $deviceOptions = [];
        foreach($devices as $device) {
            $deviceOptions[] = ['label' => $device->title, 'value' => $device->id];
        }
        return $deviceOptions;
    }
}