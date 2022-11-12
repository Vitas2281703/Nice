<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\Contracts\JobStepService;
use App\Services\OurClientService;
use Illuminate\View\View;

class PromotionController extends Controller
{
    public function __construct(
    )
    {
    }

    /**
     * @return View
     */
    public function index(): View
    {
        return view('promotion');
    }
}
