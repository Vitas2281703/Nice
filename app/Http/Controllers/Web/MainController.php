<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\Contracts\JobStepService;
use App\Services\OurClientService;
use Illuminate\Support\Collection;
use Illuminate\View\View;

class MainController extends Controller
{
    public function __construct(
        public JobStepService $stepService,
        public OurClientService $clientService
    )
    {
    }

    /**
     * @return View
     */
    public function index(): View
    {
        return view('main', [
            'steps' => $this->stepService->getSteps(),
            'clients' => $this->clientService->getOurClients(),
        ]);
    }
}
