<?php

use Illuminate\Support\Facades\Route;

Route::resource('shares', \App\Http\Controllers\SharesController::class);

#Route::get('/',function (){    return view('welcome');});

Route::get('/',[\App\Http\Controllers\SharesController::class, 'index'])->name('root');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
