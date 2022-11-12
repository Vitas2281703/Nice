<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class ServiceController extends Controller
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
        return view('service');
    }
}
