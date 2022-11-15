<?php

namespace App\Services;



use App\Repositories\Contracts\UserRepository;
use App\Repositories\Contracts\WorkerRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserService implements Contracts\UserService
{
    public function __construct(
        private readonly UserRepository $userRepository
    )
    {
    }

    public function registration(array $data) {
        $user = $this->userRepository->getUser($data);
        if(empty(Auth::user())) {
            if(isset($user)) {
                $this->userRepository->create([
                    'phone' => $data['phone'],
                    'email' => $data['email'],
                    'password' => Hash::make($data['password']),
                    'role_id' => 1
                ]);
                return true;
            } else {
                return "Пользователь с такой почтой или телефоном уже существует";
            }
        }
    }
    public function authorization(array $data) {
        $user = $this->userRepository->authorization($data);
        if(isset($user)) {
            Auth::login($user);
            return Auth::user();
        } else {
            return "Логин или пароль введён неправильно";
        }
    }
}
