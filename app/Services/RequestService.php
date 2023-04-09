<?php

namespace App\Services;


use App\Models\User;
use App\Repositories\Contracts\RequestRepository;
use Illuminate\Support\Facades\Auth;

class RequestService implements Contracts\RequestService
{
    public function __construct(
        private readonly RequestRepository $repository,
        private readonly \App\Services\Contracts\TelegramService $telegramService,
    )
    {
    }

    public function createRequest(array $data): void {
        /** @var User $user **/
        $user = Auth::user();
        if(isset($user)){
            $name = $user->name;
            $phone = $user->phone;
        }else{
            $name = $data['name'];
            $phone = $data['phone'];
        }

        $newRequest = $this->repository->create([
            'fio' => $name,
            'phone' => $phone,
            'message' => $data['message'],
        ]);

        $message = 'Поступила заявка на консультацию №' . $newRequest->id . PHP_EOL . PHP_EOL
            . 'Имя клиента: ' . $user->name . PHP_EOL
            . 'Телефон клиента: ' . $user->phone . PHP_EOL
            . 'Email клиента: ' . $user->email . PHP_EOL
            . 'Ссылка в админку: '
            . config('app.url') . '/admin/orders/requests/'. $newRequest->id .'/edit';

        $this->telegramService->sendMessage($message);
    }
}
