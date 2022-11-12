<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\Contracts\WorkerService;
use App\Services\OurClientService;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __construct(
        public WorkerService $workerService,
        public OurClientService $clientService
    )
    {
    }

    public function index(){
        return view('about-us',
            [
                'workers'=>$this->workerService->getWorkers(),
                'clients'=>$this->clientService->getOurClients()
            ]);
    }
}
