<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Calculator;

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

Route::get('/banguntabung',[Calculator::class, 'tabung']);

Route::get('/bangunbola',[Calculator::class, 'bola']);

Route::get('/bangunkerucut',[Calculator::class, 'kerucut']);
