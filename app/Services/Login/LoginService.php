<?php

namespace App\Services\Login;

use LaravelEasyRepository\BaseService;

interface LoginService extends BaseService{

    public function login(array $credentials);
    public function logout();
    public function refresh();
}
