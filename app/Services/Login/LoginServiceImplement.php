<?php

namespace App\Services\Login;

use LaravelEasyRepository\Service;
use App\Repositories\Login\LoginRepository;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;

class LoginServiceImplement extends Service implements LoginService{

     /**
     * don't change $this->mainRepository variable name
     * because used in extends service class
     */
     protected $mainRepository;

    public function __construct(LoginRepository $mainRepository)
    {
      $this->mainRepository = $mainRepository;
    }

    public function login(array $credentials)
    {
        if (!$token = JWTAuth::attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return [
            'user' => Auth::user(),
            'token' => $token,
        ];
    }
    public function logout()
    {
        try {
            $token = JWTAuth::parseToken();
            JWTAuth::invalidate($token);

            return response()->json(['message' => 'Successfully logged out'], 200);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Something an Error logout!',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function refresh()
    {
        return [
            'token' => JWTAuth::refresh(),
            'user' => Auth::user()
        ];
    }
}
