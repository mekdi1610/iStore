<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/',[UserController:: class, 'indexView']);
// Route::get('/', function () {
//     return view('admin-dashboard/index');
// });
Route::get('/', function () {
    return view('index');
});

Route::get('/signup', function () {
    return view('signup');
});
Route::get('/dashboard', function () {
    return view('admin/index');
});
Route::get('/product', function () {
    return view('client/seller/product');
});
Route::get('/dashboard', function () {
    return view('client/seller/product');
});


Route::get('/admin/users',[UserController:: class, 'displayUser']);
Route::get('/product',[ProductController:: class, 'displayProduct']);

Route::get('/admin/stores',[StoreController:: class, 'displayStore']);
Route::get('/profile', [UserController::class, 'signin']);
