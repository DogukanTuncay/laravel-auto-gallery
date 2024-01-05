<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AnaSayfaController;
use App\Http\Controllers\AracController;
use App\Http\Controllers\DashboardController;

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



Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('/dashboard', [DashboardController::class,'index'])->name('admin.dashboard');

    Route::get('anasayfa', [AnaSayfaController::class,'index'])->name('admin.anaSayfa');
    Route::post('anasayfa', [AnaSayfaController::class,'update']);

    Route::get('araclar', [AracController::class,'index'])->name('admin.arac');
    Route::get('araclar/ekle', [AracController::class,'show'])->name('admin.arac.ekle');
    Route::post('araclar/ekle', [AracController::class,'create']);
    Route::delete('araclar/sil', [AracController::class,'destroy'])->name('admin.arac.sil');
    Route::patch('araclar/giderEkle',[AracController::class,'giderEkle'])->name('admin.arac.giderEkle');

});


Route::get('/',[IndexController::class,'show'])->name('index');


Route::get('/login', [LoginController::class,'show'])->name('login');
Route::post('/login', [LoginController::class,'login']);
Route::post('/logout', [LoginController::class,'logout'])->name('logout');

