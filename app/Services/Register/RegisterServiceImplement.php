<?php

namespace App\Services\Register;

use App\Models\User;
use LaravelEasyRepository\Service;
use App\Repositories\Register\RegisterRepository;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Tymon\JWTAuth\Facades\JWTAuth;

class RegisterServiceImplement extends Service implements RegisterService{

     /**
     * don't change $this->mainRepository variable name
     * because used in extends service class
     */
     protected $mainRepository;

    public function __construct(RegisterRepository $mainRepository)
    {
      $this->mainRepository = $mainRepository;
    }

    public function register($data)
    {
      $validator = Validator::make($data, [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:6|confirmed',
      ]);

      if ($validator->fails()) {
          throw new ValidationException($validator);
      }
      $user = User::create([
          'name' => $data['name'],
          'email' => $data['email'],
          'password' => Hash::make($data['password']),
      ]);

      $token = JWTAuth::fromUser($user);
        return [
            'user' => $user,
            'token' => $token
        ];
    }
}
