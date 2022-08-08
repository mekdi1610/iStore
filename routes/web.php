<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Session;

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

// Route::get('/', function () {
//     Session::forget('user');
//     return view('storeFront/index');
// });
//Home Page
Route::get('/',[StoreController:: class, 'displayMainStore']);
Route::get('/login', function() {
    Session::forget('user');
    return view('index');
});
Route::get('/product',[ProductController:: class, 'displayProduct']);





Route::get('/signup', function () {
    return view('signup');
});
Route::get('/dashboard', function () {
    return view('admin-dashboard/index');
});



Route::get('/admin/users',[UserController:: class, 'displayUser']);
Route::get('/profile', [UserController::class, 'signin']);

Route::get('/category',[CategoryController:: class, 'displayCategory']);
Route::get('/store',[StoreController:: class, 'displayMainStore']);
Route::get('/store/product/{id}',[StoreController:: class, 'displayProduct']);
Route::get('/admin/stores',[StoreController:: class, 'displayStore']);

//Session variables
Route::get('session/get',[SessionController:: class, 'accessSessionData']);
Route::get('session/set',[SessionController:: class, 'storeSessionData']);
Route::get('session/remove',[SessionController:: class, 'deleteSessionData']);



