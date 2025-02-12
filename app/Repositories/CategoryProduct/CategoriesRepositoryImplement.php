<?php

namespace App\Repositories\CategoryProduct;

use LaravelEasyRepository\Implementations\Eloquent;
use App\Models\Categories;

class CategoriesRepositoryImplement extends Eloquent implements CategoryProductRepository{

    /**
    * Model class to be used in this repository for the common methods inside Eloquent
    * Don't remove or change $this->model variable name
    * @property Model|mixed $model;
    */
    protected $model;

    public function __construct(Categories $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        return Categories::all();
    }

    public function getById($id)
    {
        return Categories::findOrFail($id);
    }

    public function create($data)
    {
        return Categories::create($data);
    }

    public function update($id, array $data)
    {
        $category = Categories::findOrFail($id);
        $category->update($data);
        return $category;
    }

    public function delete($id)
    {
        return Categories::destroy($id);
    }
}
