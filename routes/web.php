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
    return view('welcome');
});


Route::get('/products', [ProductController::class, 'index'])->name('index');
Route::get('/products/add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('addToCart');

//Cart detail
Route::get('/products/cart', [ProductController::class, 'cartDetail'])->name('cartDetail');
