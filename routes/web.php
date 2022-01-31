<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('main');
});

Route::get('products',[ProductController::class, 'index'])->name('product.index');

// create.product

Route::get('create',[ProductController::class, 'create'])->name('create.product');
// product store data 
Route::post('store/product',[ProductController::class, 'store_product'])->name('store.product');


// edit product
Route::get('edit/product/{id}',[ProductController::class, 'edit_product'])->name('edit.product');

// update product 
Route::post('update/product/{id}',[ProductController::class, 'update_product'])->name('update.product');

Route::get('delete/product/{id}', [ProductController::class,'delete_product'])->name('delete.product');
//show product 
Route::get('show/product/{id}', [ProductController::class,'show_product'])->name('show.product');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
