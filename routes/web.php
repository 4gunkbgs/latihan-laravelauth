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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::get('/', 'App\Http\Controllers\HomeController@index')->middleware(['auth:sanctum', 'verified'])->name('dashboard');
Route::get('/dashboard', 'App\Http\Controllers\HomeController@index')->middleware(['auth:sanctum', 'verified'])->name('dashboard');
Route::get('/beranda', 'App\Http\Controllers\HomeController@beranda')->middleware(['auth:sanctum', 'verified'])->name('beranda');