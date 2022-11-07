<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

Route::get('/', [HomeController::class, 'index'])->name('homepage');
Route::get('/product', [HomeController::class, 'product'])->name('product');
Route::get('/news', [HomeController::class, 'news'])->name('news');

Route::get('/dashboard', [AdminController::class, 'showdashboard']);

Route::get('/admin', [AdminController::class, 'index']);





