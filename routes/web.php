<?php

use App\Http\Controllers\DaftarController;
use App\Http\Controllers\PasienBaruController;
use App\Http\Controllers\PasienLamaController;
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
Route::get('/daftar', [DaftarController::class, 'index'])->name('daftar');
Route::get('/pasienbaru', [DaftarController::class, 'pasienbaru'])->name('pasienbaru');
Route::get('/pasienlama', [DaftarController::class, 'pasienlama'])->name('pasienlama');
Route::get('/pasienbpjs', [DaftarController::class, 'pasienbpjs'])->name('pasienbpjs');

//post form
Route::post('/pasienbaru', [PasienBaruController::class, 'pasienbaruinput'])->name('pasienbaruinput'); 
Route::post('/pasienlama', [PasienLamaController::class, 'pasienlamainput'])->name('pasienlamainput'); 