<?php

namespace App\Http\Controllers\Api;

use App\Exports\OrderExport;
use App\Exports\UserExport;
use App\Http\Controllers\Controller;
use App\Repositories\OrderRepository;
use App\Services\Contracts\OrderServiceService;
use App\Services\Contracts\RequestService;
use App\Services\Contracts\UserService;
use Illuminate\Http\Request;

class ExportController extends Controller
{
    public function __construct(
        public UserService $userService,
        public OrderRepository $orderRepository
    )
    {
    }

    public function user()
    {
        return (new UserExport(
            $this->userService->getUsers()
        ))->download("Пользователи " . \Carbon\Carbon::now() . ".xlsx");
    }


    public function order()
    {
        return (new OrderExport(
            $this->orderRepository->getOrders()
        ))->download("Заказы " . \Carbon\Carbon::now() . ".xlsx");
    }
}
