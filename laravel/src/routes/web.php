<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\TvController;

Route::get('/', function () {
    //return view('welcome');
    $ip = request()->ip();
    $hostname = request()->getHost();
    $data['ip'] = $ip;
    $data['host'] = $hostname;
    return response()->json($data,200);
});

Route::get('/channels',[TvController::class,'index']);