<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
}); 

Route::get('/register',[AuthController::class,'showRegister'])->name('show.register');
Route::get('/login',[AuthController::class,'showLogin'])->name('show.login');
Route::post('/register',[AuthController::class,'register'])->name('register');
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::post('/logout',[AuthController::class,'logout'])->name('logout');

Route::get('/products',[ProductController::class,'index'])->middleware('auth');
Route::get('/products/{id}',[ProductController::class,'show']);
Route::post('/products', [ProductController::class,'store']);
Route::get('/products/{id}',[ProductController::class,'edit_page'])->name('product.edit');
Route::put('/products/{id}',[ProductController::class,'update'])->name('product.update');
Route::delete('/products/{id}', [ProductController::class,'destroy'])->name('product.destroy');
