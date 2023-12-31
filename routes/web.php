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

Auth::routes();

Route::post('/store', [App\Http\Controllers\SiteController::class, 'store'])->name('user.store');
Route::get('/index', [App\Http\Controllers\SiteController::class, 'index'])->name('index');
Route::get('/delete/{id}', [App\Http\Controllers\SiteController::class, 'delete'])->name('delete');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
