<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\Contracts\WorkerService;
use App\Services\OurClientService;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function __construct(

    )
    {
    }

    public function account(){
        if(Auth::user()) {
            return view('account', ['name'=>auth()->user()->name]);
        }else{
            return redirect()->route('home');
        }
    }
}
