<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdoptionController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\SharesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrderController;

//---index---//
Route::get('/',function (){    return view('welcome');})->name('root');

//---User---//
Route::get('/login',[UsersController::class, 'login_index'])->name('login');
Route::get('/logout',[UsersController::class, 'logout'])->name('logout');
Route::post('login',[UsersController::class, 'login'])->name('login.store');
Route::post('register',[UsersController::class, 'register'])->name('register.store');

//---profile---//
Route::resource('profile',ProfileController::class,);
//Route::get('/profile',[ProfileController::class, 'profile_index'])->name('profile');
//Route::post('update_information',[ProfileController::class, 'update_information'])->name('update_information');
//Route::post('update_password',[ProfileController::class, 'update_password'])->name('update_password');

//---how_to_care_cat---//
Route::get('/how_to_care_cat',function (){    return view('how_to_care_cat');})->name('care');

//---share---//
Route::resource('shares', SharesController::class);
Route::get('/self_share_history',[SharesController::class, 'sharesHistory'])->name('self_share_history');
Route::get('/share',[SharesController::class, 'index'])->name('share');

//---adoption---//
Route::resource('adoptions',AdoptionController::class);
Route::get('/adoption_index',[AdoptionController::class, 'index'])->name('adoption.index');
Route::get('/adoption_history',[AdoptionController::class, 'adoptionHistory'])->name('self_adoption_history');
//Route::get('/adoption',function (){    return view('adoption/adoption');})->name('adoption');
//Route::get('/adoption_show', [AdoptionController::class,'show'])->name('adoptions.show');
//Route::post('adoption',[AdoptionController::class, 'store'])->name('adoption.store');


//---cart----//
Route::get('products.list', [ProductController::class, 'productList'])->name('products.list');
Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
Route::post('store', [CartController::class, 'cartStore'])->name('cart.order.store');


//---order---//
Route::get('order_list', [OrderController::class, 'order_list'])->name('order_list');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


