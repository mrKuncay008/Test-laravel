<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Services\User\UserService;

class UserController extends Controller
{
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    
    public function findByEmail($email)
    {
        $result = $this->userService->getByEmail($email);
        
        return response()->json([
            "Success" => true,
            "Code" => 200,
            "data" => $result,
            // "Message" => "User found"
        ]);
    }
}