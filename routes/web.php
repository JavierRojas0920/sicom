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

Route::get('/', [App\Http\Controllers\IndexController::class, 'index']);
Route::get('/television', [App\Http\Controllers\IndexController::class, 'television']);
Route::get('/television/{canal}', [App\Http\Controllers\IndexController::class, 'canal']);
Route::get('/radio', [App\Http\Controllers\IndexController::class, 'radio']);
Route::get('/radio/{slug}', [App\Http\Controllers\IndexController::class, 'radios']);
Route::get('/revista', [App\Http\Controllers\IndexController::class, 'revista']);
