<?php

namespace App\Repositories\Register;

use LaravelEasyRepository\Implementations\Eloquent;
use App\Models\User;

class RegisterRepositoryImplement extends Eloquent implements RegisterRepository{

    /**
    * Model class to be used in this repository for the common methods inside Eloquent
    * Don't remove or change $this->model variable name
    * @property Model|mixed $model;
    */
    protected $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    // Write something awesome :)
}
