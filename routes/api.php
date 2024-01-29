<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PtypeController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Get all producttypes
Route::get('ptype', [PtypeController::class, 'index']);
// Get a specific producttype by ID
Route::get('ptype/{id}', [PtypeController::class, 'show']);
// Create a new producttype
Route::post('ptype', [PtypeController::class, 'store']);
// Update an existing producttype by ID
Route::put('ptype/{id}', [PtypeController::class, 'update']);
// Delete a producttype by ID
Route::delete('ptype/{id}', [PtypeController::class, 'destroy']);


// Get all products
Route::get('product', [ProductController::class, 'index']);
// Get a specific product by ID
Route::get('product/{id}', [ProductController::class, 'show']);
// Create a new product
Route::post('product', [ProductController::class, 'store']);
// Update a product by its ID
Route::put('product/{id}', [ProductController::class, 'update']);
// Delete product 
Route::delete('product/{id}', [ProductController::class, 'destroy']);

Route::apiResource('/ptype', PtypeController::class);
Route::apiResource('/product', ProductController::class);
