<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use App\Http\Requests\RegistrationRequest;
use App\Services\UserService;

class AuthController extends Controller
{
    public function __construct(
        public UserService $userService,
    )
    {
    }


    public function login(AuthRequest $request)
    {
        return $this->userService->authorization($request->validated());
    }
    public function registration(RegistrationRequest $request)
    {
        return $this->userService->registration($request->validated());
    }
    public function logout(){
        return $this->userService->logout();
    }
}
