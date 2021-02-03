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
    return view('welcome');
});
// Route::get('/','FrontendController@welcome');
Route::get('createUser','App\Http\Controllers\FrontendController@createUser');
Route::get('makeTransaction','App\Http\Controllers\FrontendController@makeTransaction');
Route::get('transactionHistory','App\Http\Controllers\FrontendController@transactionHistory');
