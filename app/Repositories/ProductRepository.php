<?php

namespace App\Repositories;

use App\Interface\ProductRepositoryInterface;
use App\Models\Product;

class ProductRepository implements ProductRepositoryInterface
{

    public function all()
    {
        return Product::all();
    }
    public function find($id)
    {
        return Product::find($id);
    }
    public function create(array $data)
    {
        return Product::create($data);
    }
    public function update(array $data, $id)
    {
        $product = Product::find($id);
        if ($product) {
            $product->update($data);
            return $product;
        }
        return null;
    }
    public function delete($id) : bool
    {
        $product = Product::find($id);
        if ($product) {
            $product->delete();
            return true;
        }
        return false;
    }           
}
    