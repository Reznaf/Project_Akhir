<?php

use App\Http\Controllers\DBController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('home');
});
Route::get('/history', [DBController::class,'history']);
Route::get('/show/{id_table}', [DBController::class,'show']);
Route::get('/new-table', [DBController::class,'newtable']);
Route::post('/add-table', [DBController::class,'addtable']);
Route::get('/new-input/{id_table}', [DBController::class,'newinput']);
Route::post('/add-input/{id_table}', [DBController::class,'addinput']);
