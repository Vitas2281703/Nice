<?php

namespace App\Repositories;


use A17\Twill\Repositories\Behaviors\HandleTranslations;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserRepository extends ModuleRepository implements Contracts\UserRepository
{
    use HandleTranslations;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function getUser(array $data) {
        $user = $this->model->newQuery();
        return $user->where('phone', $data['phone'])->where('email', $data['phone'])->first();
    }

    public function authorization($data) {
        $user = $this->model->newQuery();
        return $user->where('email', $data['email'])
            ->where('password', Hash::make($data['password']))->first();
    }
}
