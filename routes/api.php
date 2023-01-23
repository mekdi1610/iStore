<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\StoreController;

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
//User
Route::get('/user/all',[UserController:: class, 'index']);
Route::get('/user/{id}', [UserController::class, 'show']);
Route::post('/user/store',[UserController:: class, 'store']);
Route::post('/user/login',[UserController:: class, 'login']);
Route::post('/admin/users',[UserController:: class, 'login']);
Route::get('/user/update/{id}',[UserController:: class, 'update']);
Route::put('/user/update',[UserController:: class, 'update']);
Route::delete('/user/delete/{id}',[UserController:: class, 'destroy']);

//Profile
Route::get('/profile/all',[ProfileController:: class, 'index']);
// Route::get('/profile/update/{id}',[ProfileController:: class, 'update']);

Route::get('/profile/{id}', [ProfileController::class, 'show']);
Route::post('/profile/store',[ProfileController:: class, 'store']);
Route::put('/profile/update/{id}',[ProfileController:: class, 'update']);
Route::delete('/profile/delete/{id}',[ProfileController:: class, 'destroy']);

//Category
Route::get('/category/all',[CategoryController:: class, 'index']);
Route::get('/category/{id}', [CategoryController::class, 'show']);
Route::post('/category/store',[CategoryController:: class, 'store']);
Route::put('/category/update',[CategoryController:: class, 'update']);
Route::delete('/category/delete/{id}',[CategoryController:: class, 'destroy']);

//Location
Route::get('/location/all',[LocationController:: class, 'index']);
Route::get('/location/{id}', [LocationController::class, 'show']);
Route::post('/location/store',[LocationController:: class, 'store']);
Route::put('/location/update/{id}',[LocationController:: class, 'update']);
Route::delete('/location/delete/{id}',[LocationController:: class, 'destroy']);

//Order
Route::get('/order/all',[OrderController:: class, 'index']);
Route::get('/order/{id}', [OrderController::class, 'show']);
Route::post('/order/store',[OrderController:: class, 'store']);
Route::post('/order/update',[OrderController:: class, 'update']);
Route::delete('/order/delete/{id}',[OrderController:: class, 'destroy']);

//Product
Route::get('/product/all',[ProductController:: class, 'index']);
Route::get('/product/{id}', [ProductController::class, 'show']);
Route::post('/product/store',[ProductController:: class, 'store']);
Route::put('/product/update',[ProductController:: class, 'update']);
Route::post('/product/delete',[ProductController:: class, 'destroy']);

//Sale
Route::get('/sale/all',[SaleController:: class, 'index']);
Route::get('/sale/{id}', [SaleController::class, 'show']);
Route::post('/sale/store',[SaleController:: class, 'store']);
Route::put('/sale/update/{id}',[SaleController:: class, 'update']);
Route::delete('/sale/delete/{id}',[SaleController:: class, 'destroy']);

//Stock
Route::get('/stock/all',[StockController:: class, 'index']);
Route::get('/stock/{id}', [StockController::class, 'show']);
Route::post('/stock/store',[StockController:: class, 'store']);
Route::put('/stock/update/{id}',[StockController:: class, 'update']);
Route::delete('/stock/delete/{id}',[StockController:: class, 'destroy']);

//Store
Route::get('/store/all',[storeController:: class, 'index']);
Route::get('/store/{id}', [storeController::class, 'getAllProducts']);
Route::post('/store/store',[storeController:: class, 'store']);
Route::get('/store/getOrder/{id}', [storeController::class, 'getOrderList']);
Route::put('/store/update',[storeController:: class, 'update']);
Route::delete('/store/delete/{id}',[storeController:: class, 'destroy']);
