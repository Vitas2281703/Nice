<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\Contracts\CategoryService;
use App\Services\Contracts\DeviceService;
use App\Services\Contracts\OrderServiceService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ServiceController extends Controller
{
    public function __construct(
        public CategoryService $categoryService,
        public OrderServiceService $orderServiceService,
        public DeviceService $deviceService,
    )
    {
    }

    public function index(Request $request){

        if (isset($request)){
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
                            dd($devices->fabricator->unique());
                            return view('service', [
                                'orderServices'=>$this->orderServiceService->getAllOrderService(),
                                'categories'=>$this->categoryService->getAllCategories(),
                                'activeServiceDirectory'=> $request->serviceCategory,
                                'fabricators'=> $devices->fabricator->unique(),
                            ]);
                        }
                    }
                }
            }

        }else{
            return view('service', [
                'orderServices'=>$this->orderServiceService->getAllOrderService(),
                'categories'=>$this->categoryService->getAllCategories(),
            ]);
        }

    }

}
