<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\Contracts\CategoryService;
use App\Services\Contracts\DeviceService;
use App\Services\Contracts\OrderServiceService;
use App\Services\FabricatorService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ServiceController extends Controller
{
    public function __construct(
        public CategoryService $categoryService,
        public OrderServiceService $orderServiceService,
        public DeviceService $deviceService,
        public FabricatorService $fabricatorService
    )
    {
    }

    public function index(Request $request){

            if (isset($request->serviceService)){

                return true;
            }
            else{
                if (isset($request->serviceDevice)){
                    return true;
                }else{
                    if (isset($request->serviceFabricator)){
                        return true;
                    }else{
                        if(isset($request->serviceCategory)){
                            $devices = $this->deviceService->getDevicesByCategory($request->serviceCategory);
                            $fabricators = $this->fabricatorService->list();
                            $fabricatorsIds = [];
                            foreach ($devices as $device) {
                                $fabricatorsIds[] = $device->fabricator->id;
                            }

                            return view('service', [
                                'orderServices'=>$this->orderServiceService->getAllOrderService(),
                                'categories'=>$this->categoryService->getAllCategories(),
                                'activeServiceDirectory'=> $request->serviceCategory,
                                'fabricators'=> $fabricators->whereIn('id', $fabricatorsIds),
                                'devices' => $devices
                            ]);
                        }
                    }
                }
            }

            return view('service', [
                'orderServices'=>$this->orderServiceService->getAllOrderService(),
                'categories'=>$this->categoryService->getAllCategories(),
            ]);
    }

}
