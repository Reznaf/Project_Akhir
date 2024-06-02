<?php

use App\Http\Controllers\DBController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('home');
});
Route::get('index', [DBController::class,'index']);
Route::get('add', [DBController::class,'add']);
Route::post('addsave', [DBController::class,'addsave']);
Route::get('edit/{nama}', [DBController::class,'edit']);
Route::post('editsave', [DBController::class,'editsave']);
Route::get('delete/{nama}', [DBController::class,'delete']);
Route::get('users/export', [DBController::class,'export']);