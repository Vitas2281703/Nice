<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\Contracts\WorkerService;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __construct(
        public WorkerService $service
    )
    {
    }

    public function index(){
        return view('about-us', ['workers'=>$this->service->getWorkers()]);
    }
}
