<?php

namespace App\Services\Product;

use LaravelEasyRepository\Service;
use App\Repositories\Product\ProductRepository;

class ProductServiceImplement extends Service implements ProductService{

     /**
     * don't change $this->mainRepository variable name
     * because used in extends service class
     */
     protected $mainRepository;

    public function __construct(ProductRepository $mainRepository)
    {
      $this->mainRepository = $mainRepository;
    }

    public function getAll()
    {
        return $this->mainRepository->getAll();
    }

    public function getById($id)
    {
        return $this->mainRepository->getById($id);
    }

    public function create($data)
    {
        return $this->mainRepository->create($data);
    }

    public function update($id, array $data)
    {
        return $this->mainRepository->update($id, $data);
    }

    public function delete($id)
    {
        return $this->mainRepository->delete($id);
    }}
