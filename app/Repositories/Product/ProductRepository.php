<?php

namespace App\Repositories\Product;

use LaravelEasyRepository\Repository;

interface ProductRepository extends Repository{
    public function getAll();
    public function getById($id);
    public function create($data);
    public function update($id, array $data);
    public function delete($id);
}
