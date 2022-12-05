<?php

namespace App\Services;



use App\Models\Order;
use App\Models\OrderPoint;
use App\Models\User;
use App\Repositories\Contracts\OrderServiceRepository;
use App\Repositories\Contracts\UserRepository;
use App\Repositories\OrderPointRepository;
use App\Repositories\OrderRepository;
use Illuminate\Support\Facades\Auth;

class OrderServiceService implements Contracts\OrderServiceService
{
    public function __construct(
        public OrderServiceRepository $repository,
        public OrderPointRepository $orderPointRepository,
        public OrderRepository $orderRepository,
        public UserRepository $userRepository
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
            $order = Order::query()
                ->where('user_id', $user->id)
                ->where('status', 'Создан')
                ->first();
        } else {
            return new \Exception("Соси хуйца", 401);
        }
        if(isset($order)) {

            $point = OrderPoint::query()
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
        return Order::query()
            ->where('id', $order_id)
            ->where('user_id', Auth::user()->id)
            ->first();
    }

    public function getOrderByUser(int|null $userId) {
        return Order::query()
            ->newQuery()
            ->where('user_id', $userId)
            ->where('status', 'Создан')
            ->first();
    }

    public function orderRegistration($servicesId, $amounts,  $userId, int $bonuses = null) {
        $services = OrderPoint::query()->whereIn('id', $servicesId)->get();

        foreach ($services as $key => $value) {
            $value->update(['amount' => $amounts[$key]]);
        }
        $order = $this->getOrderByUser($userId);

        $user = User::query()->where('id', $userId)->first();
        if(($bonuses !== null) && ($user->bonus >= $bonuses)) {
            $order->update(['bonuses' => $bonuses]);
            $user->update(['bonus' => $user->bonus - $bonuses]);
        }
        $order->update(['status' => 'Принят']);
    }
}
