<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;
use App\Services\Contracts\DeviceService;
use App\Services\Contracts\PromotionService;
use App\Services\Contracts\ServiceService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;

class OrderServiceController extends BaseModuleController
{
    public function __construct(
        Application $app,
        Request $request,
        public DeviceService $deviceService,
        public ServiceService $serviceService,
        public PromotionService $promotionService
    )
    {
        parent::__construct($app, $request);
    }


    protected $indexOptions = [
        'permalink' => false,
    ];

    protected function formData($request): array
    {
        return [
            'devices' => $this->deviceService->getDevices(),
            'services' => $this->serviceService->getServices(),
            'promotions' => $this->promotionService->getPromotions()
        ];
    }
}
