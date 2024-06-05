<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\ParamedikkController;
use App\Http\Controllers\PeriksaController;
use App\Http\Controllers\UnitkerjaController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/biodata', function () {
    return '<h5>Nama: Muhammad Fakhrizal Garnindyo</h5><br><h5>NIM: 01101232880</h5><br><h5>Rombel: SI05</h5>';
});

Route::get('/profil', function () {
    return view('profil',[
        "nama" => "Muhammad Fakhrizal Garnindyo",
        "umur" => 19,
        "email" => "fakhrizal@sample.com",
        "kampus" => "STT terpadu Nurul Fikri",
        "alamat" => "Bogor"

    ]);
});


Route::get('/admin', [AdminController::class, 'index']);

Route::get('/pasien', [PasienController::class, 'index']);
Route::post('/pasien/store', [PasienController::class, 'store']);
Route::get('/pasien/detail/{id}', [PasienController::class, 'show']);
Route::get('/pasien/delete/{id}', [PasienController::class, 'destroy']);
Route::post('/pasien/update/{id}', [PasienController::class, 'update']);
Route::get('/pasien/edit/{id}', [PasienController::class, 'edit']);


Route::get('/kelurahan', [KelurahanController::class, 'index']);
Route::post('/kelurahan/store', [KelurahanController::class, 'store'])->name('kelurahan.store');

Route::get('/unitkerja', [UnitKerjaController::class, 'index']);
Route::post('/unit_kerja/store', [Unit_KerjaController::class, 'store'])->name('unit_kerja.store');

Route::get('/paramedik', [ParamedikController::class, 'index']);
Route::post('/paramedik/store', [ParamedikController::class, 'store'])->name('paramedik.store');


Route::get('/periksa', [PeriksaController::class, 'index']);
Route::post('/periksa/store', [PeriksaController::class, 'store'])->name('periksa.store');