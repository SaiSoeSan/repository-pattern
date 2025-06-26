<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Route::prefix('products')->group(function () {
//     Route::get('/', [ProductController::class, 'index']);
// });

//resourceful route for products
Route::resource('products', ProductController::class)->except(['create', 'edit']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
