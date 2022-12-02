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
        return view('cart');
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

    }

    public function getOrder(int $order_id) {
        return view('order', [
            'order' => $this->service->getOrder($order_id)
        ]);
    }

}
