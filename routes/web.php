<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
Route::get('/admin/users', function () {
    return view('admin/users');
});
Route::get('/admin/stores', function () {
    return view('admin/stores');
});
// Route::get('/signin', function () {
//     return view('signin');
// });
Route::get('/profile', [UserController::class, 'signin']);
