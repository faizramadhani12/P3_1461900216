<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\JenisBukuController;
use App\Http\Controllers\RakBukuController;
use App\Http\Controllers\UserController;



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
    return view('welcome');
});
Route::resource('/buku', BukuController::class);
Route::resource('/jenis_buku', JenisBukuController::class);
Route::resource('/rak_buku', RakBukuController::class);
Route::resource('/user', UserController::class);
