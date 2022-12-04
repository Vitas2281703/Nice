<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Repositories\OrderRepository;
use App\Services\Contracts\WorkerService;
use App\Services\OurClientService;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function __construct(
        public OrderRepository $repository,
    )
    {
    }

    public function account(){
        $orders = $this->repository->get();
        if(Auth::user()) {
            return view('account', [
                'name'=> Auth::user()->name,
                'orders' => $orders
            ]);
        }else{
            return redirect()->route('home');
        }
    }
}
