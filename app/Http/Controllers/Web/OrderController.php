<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddOrderRequest;
use App\Models\User;
use App\Repositories\OrderRepository;
use App\Services\Contracts\OrderServiceService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function __construct(
        public OrderServiceService $service,
        public OrderRepository $repository,
    )
    {
    }

    public function cart()
    {
        /** @var User $user */
        $user = Auth::user();
        if(isset($user)) {
            $order = $this->service->getOrderByUser($user->id);
        } else {
            $order = null;
        }


        return view('cart', [
            'order' => $order,
            'user' => $user
        ]);
    }

    public function order()
    {
        return view('order');
    }

    public function preorder()
    {
        return view('preorder');
    }

    public function addOrder(AddOrderRequest $request)
    {
        $data = $request->validated();
        /** @var User $user */
        $user = Auth::user();

        $amount = $data['amount'] ?? null;

        $this->service->addOrder($user, $data['service_id'], $amount);
        return back();

    }

    public function getOrder(int $order_id) {
        return view('order', [
            'order' => $this->service->getOrder($order_id)
        ]);
    }

    public function orderRegistration(Request $request){

        /** @var User $user */
        $user = Auth::user();

        $services = $request->orderPointsIds;

        $amounts = $request->amounts;

        $bonuses = $request->bonuses;

        $this->service->orderRegistration($services, $amounts, $user->id, $bonuses);

        return redirect()->route('account');
    }

}
