<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/stats', [App\Http\Controllers\StatsController::class, 'index'])->name('stats');
Route::get('/stats/create', [App\Http\Controllers\StatsController::class, 'create'])->name('create');
Route::get('/stats/submit-session', [App\Http\Controllers\StatsController::class, 'store'])->name('store');
Route::get('/edit/{id}', [App\Http\Controllers\StatsController::class, 'edit'])->name('edit');
Route::get('/stats/update/{id}', [App\Http\Controllers\StatsController::class, 'update'])->name('update');
Route::get('/delete/{id}', [App\Http\Controllers\StatsController::class, 'delete'])->name('delete');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
