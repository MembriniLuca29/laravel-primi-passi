<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    return view('home');
});
Route::get('/contacts', function () {
    return view('contacts');
});
Route::get('/info', function () {
    return view('info');
});
Route::get('/saluti', function () {
    return view('saluti');
});
Route::get('/passion', function () {
    return view('passion');
});
Route::get('/game', function () {
    return view('game');
});