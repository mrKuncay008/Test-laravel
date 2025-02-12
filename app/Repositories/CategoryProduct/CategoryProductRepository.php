<?php

namespace App\Repositories\CategoryProduct;

use LaravelEasyRepository\Repository;

interface CategoryProductRepository extends Repository{
    public function getAll();
    public function getById($id);
    public function create($data);
    public function update($id, array $data);
    public function delete($id);
}
