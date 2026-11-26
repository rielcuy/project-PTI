<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('home');
});

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // CRUD Kategori (Bagian Ariel)
    Route::resource('categories', CategoryController::class)->except(['show']);

    // Nanti Zulfa menambahkan Route::resource untuk shoes, customers, dan orders di sini
});