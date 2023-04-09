<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Order;
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
        $user = Auth::user();
        $orders = Order::query()
            ->where('user_id', $user->id)
            ->where('status', '!=', 'Создан')
            ->paginate(5);
        if(Auth::user()) {
            return view('account', [
                'user'=> $user,
                'orders' => $orders
            ]);
        }else{
            return redirect()->route('home');
        }
    }
}
