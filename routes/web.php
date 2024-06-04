<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\DokterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\HitungController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PerawatController;
use App\Http\Controllers\RuanganController;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/dashboard', [dashboardController::class, 'index'])->middleware('auth');

Route::middleware(['auth'])->group(function () {
    Route::resource('dokter', DokterController::class);
    Route::resource('perawat', PerawatController::class);
    Route::resource('pasien', PasienController::class);
    Route::resource('ruangan', RuanganController::class);
});

Route::get('/', function () {
    return view('homepage');
});

Auth::routes();


Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginform'])->name('login');
