<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
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
    return 'Hello World';
});


Route::prefix('hello')->group(function () {
    Route::get('/controller',[HelloController::class,'hello']);
    Route::get('/users', function () {
        return 'user';
        // Matches The "/admin/users" URL
    });

    Route::get('/test',function(){
        return 'test';
    });
});