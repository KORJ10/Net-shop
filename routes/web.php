<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
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
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('main');
Route::post('/cart-orders', 'CartOrderController@store')->name('cart-orders.store');
Route::resource('cart-orders', 'CartOrderController');
Auth::routes();

Route::resource('products',ProductController::class);
Route::get('/catalog',[ProductController::class,'catalog'])->name('catalog');
Route::get('/cart', [ProductController::class,'cart'])->name('product.cart');
Route::get('/add-to-cart/{id}', [ProductController::class,'addToCart'])->name('products.add-to-cart');
Route::post('/update-cart', [ProductController::class,'addProduct'])->name('products.update-cart');
Route::delete('/remove-from-cart', [ProductController::class,'remove'])->name('products.remove-product');
Route::get('/define_product',[ProductController::class,'showDefineProduct'])->name('product.show-define-product');

//Route::resource('comments',CommentController::class);
//Route::resource('orders',OrderController::class);
//Route::resource('orderHistories',OrderHistoryController::class);
//Route::resource('payments',PaymentController::class);
Route::resource('categories',CategoryController::class);



Route::get('/garanty', function () {
    return view('garanty');
})->name('garanty');

Route::middleware(['role:admin'])->prefix('admin_panel')->group(function(){
    Route::get('/',[\App\Http\Controllers\Admin\HomeController::class,'index']);
});


