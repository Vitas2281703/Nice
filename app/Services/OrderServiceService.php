<?php

namespace App\Services;



use App\Models\User;
use App\Repositories\Contracts\OrderServiceRepository;
use App\Repositories\OrderPointRepository;
use App\Repositories\OrderRepository;
use Illuminate\Support\Facades\Auth;

class OrderServiceService implements Contracts\OrderServiceService
{
    public function __construct(
        public OrderServiceRepository $repository,
        public OrderPointRepository $orderPointRepository,
        public OrderRepository $orderRepository
    ) {
    }

    public function getAllOrderService()
    {
        return $this->repository->getAllOrderService();
    }

    public function getOrderServiceByDevices($devicesIds){
        return $this->repository->getOrderServiceByDevices($devicesIds);
    }


    public function addOrder(User|null $user, $serviceId, $amount = null)
    {
        if(isset($user)) {
            $order = $this->orderRepository->model
                ->newQuery()
                ->where('user_id', $user->id)
                ->where('status', 'Создан')
                ->first();
        } else {
            return new \Exception("Соси хуйца", 401);
        }
        if(isset($order)) {

            $point = $this->orderPointRepository
                ->model
                ->newQuery()
                ->where('order_id', $order->id)
                ->where('order_service_id', $serviceId)
                ->first();
            if(isset($point)) {
                $point->update([
                    'amount' => $amount ?? $point->amount + 1,
                ]);
            } else {
                $this->orderPointRepository->create([
                    'user_id' => $user->id,
                    'order_service_id' => $serviceId,
                    'amount' => 1,
                    'order_id' => $order->id
                ]);
            }
        } else {

            $order = $this->orderRepository->create([
                'user_id' => $user->id
            ]);

            $this->orderPointRepository->create([
                'user_id' => $user->id,
                'order_service_id' => $serviceId,
                'amount' => 1,
                'order_id' => $order->id
            ]);
        }
    }

    public function getOrder($order_id) {
        return $this->orderRepository
            ->model
            ->newQuery()
            ->where('id', $order_id)
            ->where('user_id', Auth::user()->id)
            ->first();
    }

    public function getOrderByUser(int|null $userId) {
        return $this->orderRepository
            ->model
            ->newQuery()
            ->where('user_id', $userId)
            ->where('status', 'Создан')
            ->first();
    }
}
