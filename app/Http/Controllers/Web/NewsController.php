<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class NewsController extends Controller
{
    public function __construct(
    )
    {
    }

    /**
     * @return View
     */
    public function allNews(): View
    {
        return view('all-news');
    }
    public function news(): View
    {
        return view('news');
    }
}
