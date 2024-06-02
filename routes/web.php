<?php

use App\Http\Controllers\DBController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DBController::class,'history'])->name('login')->middleware('auth');

Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');

Route::get('/history', [DBController::class,'history']);
Route::get('/show/{id_table}', [DBController::class,'show']);
Route::get('/new-table', [DBController::class,'newtable']);
Route::post('/add-table', [DBController::class,'addtable']);
Route::get('/export-table', [DBController::class,'export']);
Route::get('/new-input/{id_table}', [DBController::class,'newinput']);
Route::post('/add-input/{id_table}', [DBController::class,'addinput']);
Route::get('/edit-table/{id_table}', [DBController::class,'edittable']);
Route::get('/edit-input/{id_table}', [DBController::class,'editinput']);
Route::post('/update-table/{id_table}', [DBController::class,'updatetable']);
Route::post('/update-input/{id_table}/{nama}', [DBController::class,'updateinput']);
Route::get('/delete-table/{id_table}', [DBController::class,'deletetable']);
Route::get('/delete-input/{id_table}/{nama}', [DBController::class,'deleteinput']);

