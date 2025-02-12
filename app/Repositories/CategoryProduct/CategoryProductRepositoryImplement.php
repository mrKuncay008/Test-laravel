<?php

namespace App\Repositories\CategoryProduct;

use LaravelEasyRepository\Implementations\Eloquent;
use App\Models\CategoryProduct;

class CategoryProductRepositoryImplement extends Eloquent implements CategoryProductRepository{

    /**
    * Model class to be used in this repository for the common methods inside Eloquent
    * Don't remove or change $this->model variable name
    * @property Model|mixed $model;
    */
    protected $model;

    public function __construct(CategoryProduct $model)
    {
        $this->model = $model;
    }

    // Write something awesome :)
}
