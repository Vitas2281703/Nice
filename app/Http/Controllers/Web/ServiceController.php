<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\FilterRequest;
use App\Services\Contracts\CategoryService;
use App\Services\Contracts\DeviceService;
use App\Services\Contracts\OrderServiceService;
use App\Services\FabricatorService;

class ServiceController extends Controller
{
    public function __construct(
        public CategoryService $categoryService,
        public OrderServiceService $orderServiceService,
        public DeviceService $deviceService,
        public FabricatorService $fabricatorService,
    )
    {
    }

    public function index(FilterRequest $request){

        $data = $request->validated();
        if(!empty($data)){

            $devices = $this->deviceService->getFilteredDevices($data);

            $fabricators = $this->fabricatorService->list();


            $fabricatorsIds = [];
            $devicesIds = [];
            $dataBuffer = ['serviceCategory'=>$data['serviceCategory']];
            $devicesBuffer = $this->deviceService->getFilteredDevices($dataBuffer);
            foreach ($devicesBuffer as $deviceBuffer) {
                $fabricatorsIds[] = $deviceBuffer->fabricator->id;
            }
//            dd($dataBuffer);
            $devicesModels = $this->deviceService->list();

            foreach ($devices as $device) {
                $devicesIds[] = $device->id;
            }
            if(isset($data['serviceFabricator'])){
                $devicesModels = $devicesModels->where('fabricator_id', $data['serviceFabricator']);
            }

            return view('service', [
                'orderServices' => $this->orderServiceService->getOrderServiceByDevices($devicesIds),
                'categories' => $this->categoryService->getAllCategories(),
                'activeServiceCategory' => $data['serviceCategory'] ?? null,
                'fabricators' => $fabricators->whereIn('id', $fabricatorsIds),
                'activeServiceFabricator' => $data['serviceFabricator'] ?? null,
                'devices' => $devicesModels,
                'activeServiceDevice'=> $data['serviceDevice'] ?? null,
            ]);

        }else{
            return view('service', [
                'orderServices' => $this->orderServiceService->getAllOrderService(),
                'categories' => $this->categoryService->getAllCategories(),
            ]);
        }


//        if (isset($request->serviceService)){
//                return true;
//            }
//            else{
//                if (isset($request->serviceDevice)){
//                    return true;
//                }else{
//                    if (isset($request->serviceFabricator)){
//                        return true;
//                    }else{
//                        if(isset($request->serviceCategory)){
//
//                            return view('service', [
//                                'orderServices'=>$this->orderServiceService->getOrderServiceByDevices($devicesIds),
//                                'categories'=>$this->categoryService->getAllCategories(),
//                                'activeServiceCategory'=> $request->serviceCategory,
//                                'fabricators'=> $fabricators->whereIn('id', $fabricatorsIds),
//                                'devices' => $devices
//                            ]);
//                        }
//                    }
//                }
//            }
    }

}
