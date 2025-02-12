<?php

use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::post('/register', [RegisterController::class, 'register']);
Route::post('/login', [LoginController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout']);
    Route::post('/refresh', [LoginController::class, 'refresh']);
    Route::get('/me', [LoginController::class, 'me']);
});

Route::get("/user/{email}", [UserController::class, "findByEmail"]);

 // Routes untuk CategoryProduct
    Route::get('/categories', [CategoryProductController::class, 'index']); 
    Route::post('/categories', [CategoryProductController::class, 'store']); 
    Route::get('/categories/{id}', [CategoryProductController::class, 'show']); 
    Route::put('/categories/{id}', [CategoryProductController::class, 'update']); 
    Route::delete('/categories/{id}', [CategoryProductController::class, 'destroy']);

    // Routes untuk Product
    Route::get('/products', [ProductController::class, 'index']); 
    Route::post('/products', [ProductController::class, 'store']); 
    Route::get('/products/{id}', [ProductController::class, 'show']);
    Route::put('/products/{id}', [ProductController::class, 'update']);
    Route::delete('/products/{id}', [ProductController::class, 'destroy']); 
