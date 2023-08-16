<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Obat1462100069Controller;
use App\Http\Controllers\Transaksi1462100069Controller;

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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/index', [Obat1462100069Controller::class, 'index'])->name('index');
Route::get('/daftarobat', [Obat1462100069Controller::class, 'create'])->name('daftarobat');
Route::post('/store1', [Obat1462100069Controller::class, 'store1'])->name('store1');
Route::get('/tampilobat', [Obat1462100069Controller::class, 'tampilobat'])->name('tampilobat');
route::get('/edit1/{id}', [Obat1462100069Controller:: class ,'edit1']);
Route::post('/update1/{id}', [Obat1462100069Controller::class, 'update1']);
Route::get('/destroy1/{id}', [Obat1462100069Controller::class, 'destroy1']);
Route::get('/profile', [Obat1462100069Controller::class, 'profile']);
Route::get('/periksa', [Obat1462100069Controller::class, 'periksa']);
Route::get('/obat', [Obat1462100069Controller::class, 'obat']);
Route::get('/konsul', [Obat1462100069Controller::class, 'konsul']);
//

Route::get('/index', [Transaksi1462100069Controller::class, 'index'])->name('index');
Route::get('/transaksi', [Transaksi1462100069Controller::class, 'create'])->name('transaksi');
Route::get('/tampil',[Transaksi1462100069Controller::class, 'tampiltrans'])->name('tampiltransaksi');
Route::post('/store', [Transaksi1462100069Controller::class, 'store'])->name('store');
Route::get('/edit/{id}', [Transaksi1462100069Controller:: class ,'edit']);
Route::post('/update/{id}',[Transaksi1462100069Controller:: class ,'update'])->name('update');
Route::get('/destroy/{id}', [Transaksi1462100069Controller::class, 'destroy']);


