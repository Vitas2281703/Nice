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
            $email = $user->email;
        } else {
            $name = $data['name'];
            $email = $data['email'];
        }

        $this->repository->create([
            'fio' => $name,
            'email' => $email,
            'message' => $data['message']
        ]);

        return "Заявка успешно отправлена";
    }
}
