<?php

use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PenumpangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransportasiController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TiketController;
use App\Models\Role;

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
    return view('admin.dashboard');
})->name('dashboard');

//transportasi
Route::get('/transportasi', [TransportasiController::class,'index'])->name('transportasi');
Route::get('/transportasi/create',[TransportasiController::class, 'create'])->name( 'transportasi.create');
Route::post('/transportasi/store',[TransportasiController::class, 'store'])->name( 'transportasi.store');
Route::get('/transportasi/destroy/{id}',[TransportasiController::class, 'destroy'])->name('transportasi.destroy');
Route::get('/transportasi/Edit/{id}',[TransportasiController::class, 'edit'])->name( 'transportasi.edit');
Route::put('/transportasi/update',[TransportasiController::class, 'update'])->name( 'transportasi.update');
//pemesanan
Route::get('/pemesanan', [PemesananController::class,'index'])->name('pemesanan');
Route::get('/pemesanan/create',[PemesananController::class, 'create'])->name('pemesanan.create');
Route::post('/pemesanan/store',[PemesananController::class, 'store'])->name( 'pemesanan.store');
Route::get('/pemesanan/destroy/{id}',[PemesananController::class, 'destroy'])->name('pemesanan.destroy');
Route::get('/pemesanan/Edit/{id}',[PemesananController::class, 'edit'])->name( 'pemesanan.edit');
Route::put('/pemesanan/update',[PemesananController::class, 'update'])->name( 'pemesanan.update');
Route::get('/pemesanan-export',[PemesananController::class, 'exportpdf'])->name( 'pemesanan.export');
//pegawai
Route::get('/User', [PegawaiController::class, 'index'])->name('pegawai');
Route::get('/User/create',[PegawaiController::class, 'create'])->name( 'user.create');
Route::post('/User/create/store', [PegawaiController::class, 'store'])->name('user.store');
Route::get('/User/destroy/{id}',[PegawaiController::class, 'destroy'])->name('user.destroy');
Route::get('/User/Edit/{id}',[PegawaiController::class, 'edit'])->name( 'user.edit');
Route::put('/User/update',[PegawaiController::class, 'update'])->name( 'user.update');


//penumpang
Route::get('/Penumpang', [PenumpangController::class,'index'])->name('penumpang');
Route::get('/Penumpang/create', [PenumpangController::class,'create'])->name('penumpang.create');
Route::post('/Penumpang/store', [PenumpangController::class,'store'])->name('penumpang.store');
Route::get('/Penumpang/destroy/{id}',[PenumpangController::class, 'destroy'])->name('penumpang.destroy');
Route::get('/Penumpang/Edit/{id}',[PenumpangController::class, 'edit'])->name( 'penumpang.edit');
Route::put('/Penumpang/update',[PenumpangController::class, 'update'])->name( 'penumpang.update');
Route::get('/Penumpang-export',[PenumpangController::class, 'exportpdf'])->name( 'penumpang.export');
//kota
Route::get('/Kota', [KotaController::class, 'index'])->name('kota');
Route::get('/Kota/create',[KotaController::class, 'create'])->name( 'Kota.create');
Route::post('/Kota/create/store',[KotaController::class, 'store'])->name( 'Kota.store');
Route::get('/Kota/destroy/{id}',[KotaController::class, 'destroy'])->name( 'Kota.destroy');
Route::get('/Kota/Edit/{id}',[KotaController::class, 'edit'])->name( 'Kota.edit');
Route::put('/Kota/update',[KotaController::class, 'update'])->name( 'Kota.update');
//jadwal
Route::get('/Jadwal', [JadwalController::class, 'index'])->name('jadwal');
Route::get('/Jadwal/create',[JadwalController::class, 'create'])->name('jadwal.create');
Route::post('/Jadwal/store',[JadwalController::class, 'store'])->name( 'jadwal.store');
Route::get('/Jadwal/destroy/{id}',[JadwalController::class, 'destroy'])->name( 'jadwal.destroy');
Route::get('/Jadwal/Edit/{id}',[JadwalController::class, 'edit'])->name( 'jadwal.edit');
Route::put('/Jadwal/update',[JadwalController::class, 'update'])->name( 'jadwal.update');
Route::get('/Jadwal-export',[JadwalController::class, 'exportpdf'])->name( 'jadwal.export');
//tiket
Route::get('/Tiket', [TiketController::class, 'index']) -> name('tiket');
Route::get('/Tiket/create',[TiketController::class, 'create'])->name('tiket.create');
Route::post('/Tiket/create/store',[TiketController::class, 'store'])->name('tiket.store');
Route::get('/Tiket/destroy/{id}',[TiketController::class, 'destroy'])->name( 'tiket.destroy');
Route::get('/Tiket/Edit/{id}',[TiketController::class, 'edit'])->name( 'tiket.edit');
Route::put('/Tiket/update',[TiketController::class, 'update'])->name( 'tiket.update');
Route::get('/Tiket-export',[TiketController::class, 'exportpdf'])->name( 'tiket.export');

//Role
Route::get('/Role', [RoleController::class, 'index']) -> name('Role');
Route::get('/Role/create',[RoleController::class, 'create'])->name('Role.create');
Route::post('/Role/create/store',[RoleController::class, 'store'])->name('Role.store');
Route::get('/Role/destroy/{id}',[RoleController::class, 'destroy'])->name( 'Role.destroy');
Route::get('/Role/Edit/{id}',[RoleController::class, 'edit'])->name( 'Role.edit');
Route::put('/Role/update',[RoleController::class, 'update'])->name( 'Role.update');
Route::get('/Role-export',[RoleController::class, 'exportpdf'])->name( 'Role.export');



