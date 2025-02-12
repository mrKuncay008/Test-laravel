<?php

namespace App\Services\Register;

use LaravelEasyRepository\BaseService;

interface RegisterService extends BaseService{
    public function register($request);
}
