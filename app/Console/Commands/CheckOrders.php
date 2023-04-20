<?php

namespace App\Console\Commands;

use App\Models\Order;
use App\Models\User;
use Illuminate\Console\Command;
use YooKassa\Common\Exceptions\ApiException;
use YooKassa\Common\Exceptions\BadApiRequestException;
use YooKassa\Common\Exceptions\ExtensionNotFoundException;
use YooKassa\Common\Exceptions\ForbiddenException;
use YooKassa\Common\Exceptions\InternalServerError;
use YooKassa\Common\Exceptions\NotFoundException;
use YooKassa\Common\Exceptions\ResponseProcessingException;
use YooKassa\Common\Exceptions\TooManyRequestsException;
use YooKassa\Common\Exceptions\UnauthorizedException;

class CheckOrders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check:orders';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $client = new \YooKassa\Client();
        $client->setAuth(config('app.yoocassa_login'), config('app.yoocassa_password'));
        $orders = Order::query()
            ->where('status','Готов к выдаче')
            ->where('payment_id', '!=', null)
            ->where('status_payment','!=', 'Оплачено')
            ->get();
        foreach ($orders as $order) {
            try {
                $payment = $client->getPaymentInfo($order->payment_id);
            } catch (\Exception $e) {
                continue;
            }

            if ($payment->status == 'succeeded') {
                $order->update(['status_payment' => 'Оплачен']);
                $user = User::find(User::find(26)->referer_id);
                $user->update([
                   'bonus' => $user->bonus + 500,
                ]);
            }
        }
    }
}
