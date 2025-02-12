<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\Login\LoginService;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    private $loginService;

    public function __construct(LoginService $loginService)
    {
        $this->loginService = $loginService;
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        return response()->json($this->loginService->login($credentials));
    }

    public function logout()
    {
        return $this->loginService->logout();
    }

    public function refresh()
    {
        return response()->json($this->loginService->refresh());
    }
    
    public function me()
    {
        return response()->json(auth()->user());
    }
}
