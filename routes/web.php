<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/users', [UserController::class,'index']);
Route::get('/users/{user}', [UserController::class,'show']);
Route::get('/redirect', [UserController::class,'redirectRoute']);
Route::get('/createUser', [UserController::class, 'create']);
Route::post('/storeUser', [UserController::class, 'store']);
Route::get('/editUser/{id}', [UserController::class, 'edit']);
Route::post('/updateUser/{id}', [UserController::class, 'update']);
Route::get('/deleteUser/{id}', [UserController::class, 'destroy']);
Auth::routes();

Route::resource('posts', PostController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
