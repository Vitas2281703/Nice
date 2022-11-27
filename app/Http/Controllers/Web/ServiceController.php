<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\Contracts\CategoryService;
use App\Services\Contracts\ServiceService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ServiceController extends Controller
{
    public function __construct(
        public CategoryService $categoryService,
        public ServiceService $serviceService,
    )
    {
    }

    /**
     * @return View
     */
    public function index(): View
    {
        return view('service', [
            'services'=>$this->serviceService->getAllServices(),
            'categories'=>$this->categoryService->getAllCategories(),
        ]);
    }

    public function serviceFilter(Request $request){
        return view('service', [
            'services'=>$this->serviceService->getAllServices(),
            'categories'=>$this->categoryService->getAllCategories(),
            'activeServiceDirectory'=> $request->serviceCategory,

        ]);
    }

}
