<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\Contracts\WorkerService;
use App\Services\OurClientService;

class AccountController extends Controller
{
    public function __construct(

    )
    {
    }

    public function account(){
        return view('account');
    }
}
