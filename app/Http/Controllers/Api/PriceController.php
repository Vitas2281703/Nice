<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Contracts\CategoryService;
use App\Services\Contracts\DeviceService;
use App\Services\Contracts\FabricatorService;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function __construct(
        private readonly FabricatorService $fabricatorService,
        private readonly CategoryService $categoryService,
        private readonly DeviceService $deviceService
    )
    {
    }

    public function getFilterDevice($fabricatorId) {

    }
}
