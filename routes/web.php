<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\BarangController;
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
    return 'String yang lain';
});

Route::get('/barang',[BarangController::class,'getBarang']);
Route::get('/barang/{id}',[BarangController::class,'getBarangById']);

Route::get('/view',[BarangController::class,'returnView']);
Route::get('/view/{id}',[BarangController::class,'returnView']);
