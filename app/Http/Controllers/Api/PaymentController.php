<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function redirectPaymentLink(int $id) {
        $client = new \YooKassa\Client();
        $client->setAuth(config('app.yoocassa_login'), config('app.yoocassa_password'));
        $order = Order::query()
            ->where('id', $id)
            ->where('user_id', Auth::user()->id)
            ->first();
        $cast = 0;
        foreach ($order->orderPoints as $orderPoint) {
            $cast += $orderPoint->orderService->price * $orderPoint->amount;
        }
        $payment = $client->createPayment(
            array(
                'amount' => array(
                    'value' => $cast,
                    'currency' => 'RUB',
                ),
                'payment_method_data' => array(
                    'type' => 'bank_card',
                    "saved" => false,
                ),
                'confirmation' => array(
                    'type' => 'redirect',
                    'return_url' => 'https://www.example.com/return_url',
                ),
                'capture' => true,
                'save_payment_method' => false,
                'description' => 'Заказ №72',
            ),
            uniqid('', true)
        );
        $order->update(['payment_id' => $payment->id]);

        return redirect($payment->confirmation->getConfirmationUrl());
    }
}
