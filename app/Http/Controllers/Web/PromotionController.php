<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Request;
use App\Services\Contracts\PromotionService;
use Illuminate\View\View;

class PromotionController extends Controller
{
    public function __construct(
        public PromotionService $promotionService,
    )
    {
    }

    /**
     * @return View
     */
    public function index($slug): View
    {
        return $this->promotionService->showPromo($slug);
    }

}
