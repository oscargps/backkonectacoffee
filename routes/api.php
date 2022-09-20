<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SalesController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Product Router
Route::get('/products', [ProductsController::class, 'getProducts']);
Route::post('/products', [ProductsController::class, 'createProduct']);
Route::put('/products/{id}', [ProductsController::class, 'updateProduct']);
Route::post('/products/delete', [ProductsController::class, 'deleteProduct']);

//Sales Router
Route::post('/sales', [SalesController::class, 'createSale']);
Route::get('/sales', [SalesController::class, 'getSales']);