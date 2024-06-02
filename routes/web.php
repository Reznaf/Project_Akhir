<?php

use App\Http\Controllers\DBController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('home');
});

Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

//REGISTER
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');
Route::get('/history', [DBController::class,'history']);
Route::get('/show/{id_table}', [DBController::class,'show']);
Route::get('/new-table', [DBController::class,'newtable']);
Route::post('/add-table', [DBController::class,'addtable']);
Route::get('/new-input/{id_table}', [DBController::class,'newinput']);
Route::post('/add-input/{id_table}', [DBController::class,'addinput']);
