<?php

namespace App\Repositories;

use App\Interface\ProductRepositoryInterface;
use App\Models\Product;

class ProductRepository implements ProductRepositoryInterface
{

    public function getAllProducts()
    {
        return Product::all();
    }
}
