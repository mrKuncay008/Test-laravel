<?php

namespace App\Services\CategoryProduct;

use LaravelEasyRepository\BaseService;

interface CategoryProductService extends BaseService{
    public function getAll();
    public function getById($id);
    public function create($data);
    public function update($id, array $data);
    public function delete($id);
}
