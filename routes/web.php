<?php

use App\Http\Controllers\DBController;
use App\Http\Controllers\LoginController;
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

Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
