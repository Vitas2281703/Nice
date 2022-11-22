<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\Contracts\NewsService;
use Illuminate\View\View;

class NewsController extends Controller
{
    public function __construct(
        public NewsService $newsService
    )
    {
    }

    /**
     * @return View
     */
    public function allNews(): View
    {
        return view('all-news', ['news'=>$this->newsService->getAllNews()]);
    }
    public function news($slug): View
    {
        return $this->newsService->showNews($slug);
    }
}
