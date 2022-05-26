<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
Route::get('/',function (){    return view('welcome2');});

Route::resource('shares', \App\Http\Controllers\SharesController::class);
Route::get('/self_share_history',[\App\Http\Controllers\SharesController::class, 'sharesHistory'])->name('self_share_history');

Route::get('/how_to_care_cat',function (){    return view('how_to_care_cat');})->name('care');

Route::get('/share',[\App\Http\Controllers\SharesController::class, 'index'])->name('share');

Route::get('products.list', [ProductController::class, 'productList'])->name('products.list');
Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


