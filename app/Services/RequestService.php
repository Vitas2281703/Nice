<?php

namespace App\Services;



use App\Models\User;
use App\Repositories\Contracts\RequestRepository;
use App\Repositories\Contracts\WorkerRepository;

class RequestService implements Contracts\RequestService
{
    public function __construct(
        private readonly RequestRepository $repository,
    )
    {
    }

    public function createRequest(?User $user, array $data): string {
        if(isset($user)) {
            $name = $user->name;
            $phone = $user->phone;
        } else {
            $name = $data['name'];
            $phone = $data['phone'];
        }

        $this->repository->create([
            'fio' => $name,
            'phone' => $phone,
            'message' => $data['message']
        ]);

        return "Заявка успешно отправлена";
    }
}
