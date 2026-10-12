<?php

use Illuminate\Support\Facades\Route;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\SapaController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\QueryBuilderDemoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa', function () {
$data = Mahasiswa::all();
return view('mahasiswa.index', compact('data'));
});

Route::get('/artikel', function () {
    return view('halaman artikel');
});

#Route::resource('mahasiswa', MahasiswaController::class);
Route::get('/mahasiswa/{nim}', [MahasiswaController::class, 'show'])
    ->where('nim', '[0-9]+')
    ->name('mahasiswa.show');

Route::get('/halo', function () {
    return view('halo, ini adalah route saya');
});

Route::get('/matakuliah/create', [MatakuliahController::class, 'create']);
Route::post('/matakuliah', [MatakuliahController::class, 'store']);

Route::get('/matakuliah', [MatakuliahController::class, 'index']);


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return 'Dashboard Admin';
    })->name('dashboard');
});
Route::get('/sapa', function () {
    return view('sapa', ['nama' => 'Ahmad Fauzi']);
});
Route::get('/sapa-closure', function () {
$nama = 'Ahmad Fauzi';
$pesan = "Halo, {$nama}! Ini ditulis langsung di route.";
return $pesan;
});
// routes/web.php
Route::get('/sapa-controller', [SapaController::class, 'index']);
Route::get('/mahasiswa-uji', function () {
return view('mahasiswa.form-uji');
});
Route::post('/mahasiswa-uji', [MahasiswaController::class, 'store']);

// Route untuk menampilkan semua data
Route::get('/mahasiswa', [QueryBuilderDemoController::class, 'tampilkanSemua'])->name('mhs.tampil');

// Route untuk menampilkan data dengan filter
Route::get('/mahasiswa/filter', [QueryBuilderDemoController::class, 'tampilkanFilter']);

// Route untuk statistik prodi
Route::get('/mahasiswa/statistik', [QueryBuilderDemoController::class, 'statistikProdi'])->name('mhs.statistik');

// Route untuk form insert & proses simpan
Route::get('/mahasiswa/tambah', [QueryBuilderDemoController::class, 'formTambah'])->name('mhs.create');
Route::post('/mahasiswa/store', [QueryBuilderDemoController::class, 'prosesInsert'])->name('mhs.store');

// Route untuk uji update & delete berdasarkan NIM tertentu
Route::get('/mahasiswa/update/{nim}', [QueryBuilderDemoController::class, 'prosesUpdate'])->name('mhs.update');
Route::get('/mahasiswa/delete/{nim}', [QueryBuilderDemoController::class, 'prosesDelete'])->name('mhs.delete');