<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\TvController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Appcontroller;
use App\Http\Controllers\ChcategoryController;

Route::get('/', [AuthController::class, 'index']);
Route::get('/register', [AuthController::class, 'registration'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login',[AuthController::class,'loginPost'])->name('login');
Route::get('/home',[Appcontroller::class,'index'])->name('home');

Route::middleware('auth')->prefix('/')->group(function () {
    Route::get('/chcategory',[ChcategoryController::class,'index'])->name('chcategory');
    Route::get('/chcategory/{id}',[ChcategoryController::class,'edit'])->name('idchcategory');
    Route::get('/channels',[TvController::class,'index']);
    Route::post('/logout',[AuthController::class,'logoutPost'])->name('logout');
    Route::get('/dashboard',[TvController::class,'dashboard'])->name('dashboard');
});

Route::get('/nav1', function() {
    return view('test.nav1');
});