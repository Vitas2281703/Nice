<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Http;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('debug', function () {
    $sum = 100;
//    $response = Http::withBasicAuth(
//        '206271',
//        'test_cNS7uv_FgkR0lTKME4m5ULYJKocYLZsAIzbw5tsgGl0')
//        ->withHeaders([
//            'Content-type' => 'application/json',
//            'Idempotence-Key' => uniqid('', true)
//        ])
//        ->post('https://api.yookassa.ru/v3/payments',
//            ['amount' => [
//                'value' => 200.00,
//                'currency' => 'RUB',
//            ],
//            'payment_method_data' => [
//                'type' => 'sbp',
//            ],
//            'confirmation' => [
//                'type' => 'qr',
//            ],
//            'description' => 'Заказ №72',
//            'capture' => true,
//            'test' => true,
//            uniqid('', true)
//        ]);
    $client = new \YooKassa\Client();
    $client->setAuth('206271', 'test_cNS7uv_FgkR0lTKME4m5ULYJKocYLZsAIzbw5tsgGl0');

})->purpose('Display an inspiring quote');
