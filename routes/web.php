<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/profile', function () {
    $user = Auth::user();
    return view('profile', ['user' => $user]);
})->middleware('auth');

// Define route with correct controller
Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::get('/customer-register', function () {
    return view('customer-register');
})->name('customer-register');

Route::get('/logout', function () {
    return view('welcome');
})->name('logout');