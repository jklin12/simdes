<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataPendudukController;
use App\Http\Controllers\DataSuratController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RefJenisSuratController;
use App\Http\Controllers\RefKolomSuratController;
use App\Http\Controllers\SuratMasukController;
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
    Route::resource('/data_surat', DataSuratController::class);
    Route::resource('/surat_masuk', SuratMasukController::class);
    Route::put('/surat_masuk/{id}/tanggapi', [SuratMasukController::class,'tanggapi'])->name('surat_masuk.tanggapi');
    Route::put('/surat_masuk/{id}/tanggapan', [SuratMasukController::class,'tanggapan'])->name('surat_masuk.tanggapan');
    Route::put('/surat_masuk/{id}/riview', [SuratMasukController::class,'riview'])->name('surat_masuk.riview');
    Route::resource('/penduduk', DataPendudukController::class);
    Route::resource('/ref_jenis_surat', RefJenisSuratController::class);
    Route::resource('/ref_kolom_surat', RefKolomSuratController::class);
});
