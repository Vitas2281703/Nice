<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;
use App\Models\OrderService;
use App\Models\User;
use App\Services\Contracts\DeviceService;
use App\Services\Contracts\OrderServiceService;
use App\Services\Contracts\PromotionService;
use App\Services\Contracts\ServiceService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;

class OrderController extends BaseModuleController
{

    public function __construct(
        Application $app,
        Request $request,
        public readonly OrderServiceService $service
    )
    {
        parent::__construct($app, $request);
    }
    protected $moduleName = 'orders';

    protected $titleColumnKey = 'formatted_title';

    protected $indexColumns = [
        'formatted_title' => [ // field column
            'title' => 'Номер заказа',
            'field' => 'formatted_title',
        ],
        'status' => [
            'title' => 'Статус заказа',
            'field' => 'status'
        ],
        'status_payment' => [
            'title' => 'Статус оплаты',
            'field' => 'status_payment'
        ],
        'created_at' => [
            'title' => 'Дата и время',
            'field' => 'formatted_created_at'
        ]
    ];

    protected $indexOptions = [
        'permalink' => false,
    ];

    protected function formData($request): array
    {
        $order = $this->service->getAdminOrder($this->request->route()->parameters()['order']);

        $user = User::query()->where('id', $order->user_id)->first();
        return [
            'fio' => $user->name,
            'email' => $user->email,
            'phone' => $user->phone,
        ];
    }
}
