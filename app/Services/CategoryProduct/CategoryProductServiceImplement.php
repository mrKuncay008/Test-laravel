<?php

namespace App\Services\CategoryProduct;

use App\Repositories\CategoryProduct\CategoryProductRepository;
use LaravelEasyRepository\Service;


class CategoryProductServiceImplement extends Service implements CategoryProductService
{
     /**
     * don't change $this->mainRepository variable name
     * because used in extends service class
     */
     protected $mainRepository;

    public function __construct(CategoryProductRepository $mainRepository)
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
    }
}
