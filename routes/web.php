<?php

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

Route::get('panel', function () {
    return view('admin.adminpanel');
});
Route::get('dashboard', function () {
    return view('admin.dashboard');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



//Route::get('AdminPanel',[\App\Http\Controllers\HomeController::class,'index']);


Route::resource('products', \App\Http\Controllers\ProductController::class);
Route::resource('contacts', \App\Http\Controllers\ContactController::class);
//
Route::resource('cosmatics', \App\Http\Controllers\CosmeticController::class);
Route::resource('products1', \App\Http\Controllers\Product1Controller::class);

//




//front
Route::get('layout', function () {
    return view('layout.layout');
});

Route::get('about', function () {
    return view('content.about');
});

Route::get('checkout', function () {
    return view('content.checkout');
});



//
Route::get('/', [\App\Http\Controllers\CartController::class, 'productList'])->name('products.list');
Route::get('cart', [\App\Http\Controllers\CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [\App\Http\Controllers\CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [\App\Http\Controllers\CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [\App\Http\Controllers\CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [\App\Http\Controllers\CartController::class, 'clearAllCart'])->name('cart.clear');
//
Route::get('productDetail/{id}', [\App\Http\Controllers\CartController::class, 'productDetail'])->name('productDetail');
Route::get('checkout', [\App\Http\Controllers\CartController::class,'checkout']);



//
Route::get('/stripe', [\App\Http\Controllers\StripeController::class, 'index']);
Route::post('/transaction', [\App\Http\Controllers\StripeController::class, 'makePayment'])->name('make-payment');
