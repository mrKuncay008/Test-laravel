<?php

namespace App\Services\User;

use LaravelEasyRepository\Service;
use App\Repositories\User\UserRepository;
use Illuminate\Support\Facades\Log;

class UserServiceImplement extends Service implements UserService

{
    protected $mainRepository;
    public function __construct(UserRepository $mainRepository)
    {
      $this->mainRepository = $mainRepository;
    }

    public function getByEmail($email)
    {
        try {
            return $this->mainRepository->getByEmail($email);  
          
        } catch (\Exception $e) {
            Log::debug($e->getMessage());
            return[];
        }
    }

    
}
