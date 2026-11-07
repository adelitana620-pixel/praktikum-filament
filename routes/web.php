<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PosyanduMapController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/peta', [PosyanduMapController::class, 'index']);
