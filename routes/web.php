<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataPendudukController;
use App\Http\Controllers\HomeController;
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
    return view('pages.login');
})->name('login');

Route::post('/doLogin', [AuthController::class, 'doLogin'])->name('doLogin');

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/logout', [AuthController::class, 'doLogout'])->name('logout');
    Route::resource('/penduduk', DataPendudukController::class);
});
