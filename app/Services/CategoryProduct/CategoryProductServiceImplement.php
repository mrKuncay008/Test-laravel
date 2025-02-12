<?php

namespace App\Services\CategoryProduct;

use LaravelEasyRepository\Service;
use App\Repositories\CategoryProduct\CategoryProductRepository;

class CategoryProductServiceImplement extends Service implements CategoryProductService{

     /**
     * don't change $this->mainRepository variable name
     * because used in extends service class
     */
     protected $mainRepository;

    public function __construct(CategoryProductRepository $mainRepository)
    {
      $this->mainRepository = $mainRepository;
    }

    // Define your custom methods :)
}
