<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\Register\RegisterService;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    private $registerService;

    public function __construct(RegisterService $registerService)
    {
        $this->registerService = $registerService;
    }

    public function register(Request $request)
    {
        try {
            $result = $this->registerService->register($request->all());
            return response()->json([
                'message' => '201 Scuccess Create',
                'user' => $result['user'],
                'token' => $result['token']
            ], 201);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 422);
        }
    }
}
