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
    return view('home');
});
Route::get('link', [\App\Http\Controllers\LController::class, 'link']);
Route::get('tiket', [\App\Http\Controllers\TDController::class,'index']);
Route::get('tiket/download', [\App\Http\Controllers\TDController::class, 'download']);
Route::get('tiket/dw', [\App\Http\Controllers\TDController::class, 'dw']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
