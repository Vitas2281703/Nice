<?php

namespace App\Services;



use App\Models\User;
use App\Repositories\Contracts\UserRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserService implements Contracts\UserService
{
    public function __construct(
        private readonly UserRepository $userRepository
    )
    {
    }

    public function registration(array $data, ?int $ref_id) {
        $user = $this->userRepository->getUser($data);
        if(!Auth::user()) {
            if(!isset($user)) {
                $newUser = $this->userRepository->create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'phone' => $data['phone'],
                    'password' => Hash::make($data['password']),
                    'role_id' => 1,
                    'referer_id' => $ref_id ?? null,
                ]);
                if (isset($ref_id)) {
                    $ref_user = $this->userRepository->find($ref_id);
                    if ($ref_user) {
                        $ref_user->update([
                            'bonus' => $ref_user->bonus + 200,
                        ]);
                    } else {
                        return view('registration', ['error'=>"Пользователь с таким рефферальным id не существует"]);
                    }
                }
                /**
                 * @var User $newUser
                 */
                Auth::login($newUser);
                return redirect()->route('account');
            } else {
                return view('registration', ['error'=>"Пользователь с таким email или телефоном уже существует"]);
            }
        } else {
            return view('registration', ['error'=>"Вы уже авторизированны"]);
        }
    }
    public function authorization(array $data) {
        $user = $this->userRepository->authorization($data);
        if(isset($user)) {
            if(Hash::check($data['password'], $user->password)) {
                Auth::login($user);
                return redirect()->route('account');
            }
            else {
                return view('login', ['error'=>"Пароль введён неправильно"]);
            }
        } else {
            return view('login', ['error'=>"Email не найден"]);
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }

    public function getUsers()
    {
        return $this->userRepository->getAllUsers();
    }
}
