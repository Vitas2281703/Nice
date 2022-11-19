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
        $userPhone = $this->model->newQuery()->where('phone', $data['phone'])->first();
        $userEmail = $this->model->newQuery()->where('email', $data['email'])->first();
        if (isset($userPhone) || isset($userEmail)){
            return true;
        }
        return null;
    }

    public function authorization(array $data) {
        $user = $this->model->newQuery();
        return $user->where('email', $data['email'])->first();
    }
}
