<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Services\ProductService;

class ProductController extends Controller
{

    public function __construct(protected ProductService $productService)
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'data' => $this->productService->all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
        ]);
        $product = $this->productService->create($request->all());
        return response()->json(['data' => $product], 201); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $product = $this->productService->find($product->id);
        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }
        return response()->json([
            'data' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $updatedProduct = $this->productService->update($request->all(), $product->id);
        if (!$updatedProduct) {
            return response()->json(['message' => 'Product not found'], 404);
        }
        return response()->json(['data' => $updatedProduct]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $deleted = $this->productService->delete($product->id);
        if (!$deleted) {
            return response()->json(['message' => 'Product not found'], 404);
        }
        return response()->json(['message' => 'Product deleted successfully'], 204);
    }
}
