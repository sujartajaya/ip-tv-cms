<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\TvController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    //return view('welcome');
    // $ip = request()->ip();
    // $hostname = request()->getHost();
    // $data['ip'] = $ip;
    // $data['host'] = $hostname;
    // return response()->json($data,200);
});

Route::get('/register', [AuthController::class, 'registration'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login',[AuthController::class,'loginPost'])->name('login');

Route::middleware('auth')->prefix('/')->group(function () {
    Route::get('/channels',[TvController::class,'index']);
});
