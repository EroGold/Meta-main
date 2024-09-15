<?php

use App\Http\Controllers\WidgetController;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

use App\Http\Controllers\PagesController;
use App\Http\Controllers\Auth\LoginController;


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
Route::group(['middleware' => 'auth.check'], function(){
    Route::get('/admin.html', [AdminController::class, 'admin']);
    Route::get('/admin2.html', [AdminController::class, 'admin2']);
    Route::get('/admin3.html', [AdminController::class, 'admin3'])->name('product.index');
});
// Login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');


// Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('user/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('user/{id}', [UserController::class, 'destroy'])->name('users.destroy');

Route::get('/products/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/products', [ProductController::class, 'store'])->name('product.store');
Route::delete('product/{prod_id}', [ProductController::class, 'destroy'])->name('product.destroy');
Route::get('/product/{id}', [ProductController::class, 'getProduct']);
Route::post('/product/update', [ProductController::class, 'updateProduct']);

