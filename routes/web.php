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
Route::get('/', function () {
    return view('client.main.main');
})->name('main');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('products',ProductController::class);
Route::get('/cart', [ProductController::class,'cart'])->name('product.cart');
Route::get('/add-to-cart/{id}', [ProductController::class,'addToCart'])->name('product.cart-to-add');
Route::patch('update-cart', [ProductController::class,'update'])->name('product.update');
Route::delete('remove-from-cart', [ProductController::class,'remove'])->name('product.remove');

Route::resource('comments',CommentController::class);
Route::resource('orders',OrderController::class);
Route::resource('orderHistories',OrderHistoryController::class);
Route::resource('payments',PaymentController::class);
Route::resource('categories',CategoryController::class);




Route::get('/category', function () {
    return view('client.categories.category');
})->name('category');

Route::get('/cart_tovar', function () {
    return view('client.tovary.cart_tovar');
})->name('cart_tovar');

Route::get('/garantii', function () {
    return view('client.garantii.garantii');
})->name('garantii');

Route::middleware(['role:admin'])->prefix('admin_panel')->group(function(){
    Route::get('/',[\App\Http\Controllers\Admin\HomeController::class,'index']);
});


