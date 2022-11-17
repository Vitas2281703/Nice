<?php

namespace App\Repositories;


use A17\Twill\Repositories\ModuleRepository;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserRepository extends ModuleRepository implements Contracts\UserRepository
{

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function getUser(array $data) {
        $user = $this->model->newQuery();
        return $user->where('phone', $data['phone'])->where('email', $data['email'])->first();
    }

    public function authorization(array $data) {
        $user = $this->model->newQuery();
        return $user->where('email', $data['email'])->first();
    }
}
