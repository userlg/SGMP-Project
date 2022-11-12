<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AuthController;

Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('guest');

Route::get('about', [HomeController::class, 'about'])->name('about')->middleware('guest');

Route::get('dashboard',[AuthController::class,'dashboard'])->name('dashboard')->middleware(['auth','verified']);
