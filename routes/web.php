<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

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

//Route::get('/', function () {
    //return view('welcome');
//});
Route::get('/', [ProductController::class, 'index']);
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add_to_cart');
Route::get('/cart', [CartController::class, 'index'])->name('carts');
Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove_from_cart');
Route::patch('/update-cart', [ProductController::class,'updateCart'])->name('update_cart');
Route::get('/form-add-product', [ProductController::class,'formAddProduct'])->name('form_add_product');
Route::post('/save-product', [ProductController::class, 'saveProduct'])->name('save_product');
