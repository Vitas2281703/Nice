<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function __construct(
    )
    {
    }

    /**
     * @return View
     */
    public function login(): View
    {
        return view('login');
    }
    public function registration(): View
    {
        return view('registration');
    }
}
