<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\Contracts\JobStepService;
use Illuminate\Support\Collection;
use Illuminate\View\View;

class MainController extends Controller
{
    public function __construct(
        public JobStepService $stepService,
    )
    {
    }

    /**
     * @return View
     */
    public function getSteps(): View
    {

        return view('main', [
            'steps' => $this->stepService->getSteps()
        ]);
    }
}
