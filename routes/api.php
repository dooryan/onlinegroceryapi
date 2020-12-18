<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;


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
Route::get('getAllBestSellers', [ProductsController::class, 'getAllBestSellers']);
Route::get('getAllCategories', [CategoryController::class, 'getAllCategories']);
Route::get('getAllProducts', [ProductsController::class, 'getAllProducts']);


Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);
Route::get('getProfile', [UserController::class, 'getProfile']);



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



