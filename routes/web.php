<?php

use Illuminate\Support\Facades\Route;

Route::resource('shares', \App\Http\Controllers\SharesController::class);

Route::get('/',function (){    return view('welcome2');});

Route::get('/how_to_care_cat',function (){    return view('how_to_care_cat');})->name('care');

Route::get('/share',[\App\Http\Controllers\SharesController::class, 'index'])->name('share');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
