<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::resource('products', ProductController::class);

Route::get('/product/index', [ProductController::class, 'index'])->name('products.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('products.create');
Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::post('/product', [ProductController::class, 'store'])->name('products.store');
Route::get('/product/show/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
Route::put('product/update/{id}', [ProductController::class, 'update'])->name('products.update');