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
Route::get('/add-to-cart/{id}', [ProductController::class,'addToCart'])->name('product.add-to-cart');
Route::patch('update-cart', [ProductController::class,'update'])->name('product.update');
Route::delete('remove-from-cart', [ProductController::class,'remove'])->name('product.remove');

//Route::resource('comments',CommentController::class);
//Route::resource('orders',OrderController::class);
//Route::resource('orderHistories',OrderHistoryController::class);
//Route::resource('payments',PaymentController::class);
//Route::resource('categories',CategoryController::class);

Route::get('/cart_tovar', function () {
    return view('client.tovary.cart_tovar');
})->name('cart_tovar');

Route::get('/garantii', function () {
    return view('client.garantii.garantii');
})->name('garantii');

Route::get('/shop-conditions', function () {
    return view('client.shop-conditions.shop-conditions');
})->name('shop-conditions');

Route::middleware(['role:admin'])->prefix('admin_panel')->group(function(){
    Route::get('/',[\App\Http\Controllers\Admin\HomeController::class,'index']);
});


