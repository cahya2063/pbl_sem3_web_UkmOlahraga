<?php

use App\Http\Controllers\api\alatController;
use App\Http\Controllers\api\authController;
use App\Http\Controllers\api\divisi;
use App\Http\Controllers\api\jadwal;
use App\Http\Controllers\Api\peminjaman as ApiPeminjaman;
use App\Http\Controllers\api\Pendaftaran;
use App\Http\Controllers\api\pengembalian;
use App\Http\Controllers\JadwalController;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::post('/login', [authController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    //return $request->user();
});

// *** AUTH *** //
Route::post('/register',[authController::class,'register']);
Route::get('/user/view',[authController::class,'viewUser']);
Route::post('/edit/profil/{id}',[authController::class, 'update']);

// *** DIVISI *** //
Route::get('/divisi/view/',[divisi::class, 'index']);
Route::get('/divisi/view/{id}',[divisi::class, 'readId']);
Route::get('/divisi/view/{divisi1}/{divisi2}', [divisi::class, 'getDataAnggota']);

// *** JADWAL *** //
Route::post('/jadwal/tambah',[jadwal::class, 'store']);
Route::get('/jadwal/view',[jadwal::class, 'index']);
//Route::post('/jadwal/view/{id}',[jadwal::class, 'readId']);

// *** PENDAFTARAN *** //
Route::post('/pendaftaran/create', [pendaftaran::class, 'store']);
Route::get('/pendaftaran/view',[pendaftaran::class, 'index']);
Route::get('/pendaftaran/view/{id}',[pendaftaran::class, 'viewByNim']);
Route::get('/user/view',[pendaftaran::class, 'viewUser']);

// *** ALAT ***//
Route::get('stok/alat', [alatController::class, 'index']);

// *** PEMINJAMAN ***//
Route::post('/pinjam/create', [ApiPeminjaman::class, 'store']);
Route::get('/pinjam/view', [ApiPeminjaman::class, 'index']);
Route::get('/pinjam/view/{nim}', [ApiPeminjaman::class, 'readId']);

// *** PENGEMBALIAN ***//
Route::post('pengembalian/create', [pengembalian::class, 'store']);
Route::delete('pengembalian/delete/{id}', [pengembalian::class, 'destroy']);

// });
