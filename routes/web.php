<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/tabung', function () {
    return view('tabung');
});
Route::get('/bola', function () {
    return view('bola');
});
Route::get('/kerucut', function () {
    return view('kerucut');
});

Route::get('/tabung', 'RumusController@tabung');
Route::get('/bola', 'RumusController@bola');
Route::get('/kerucut', 'RumusController@kerucut');

