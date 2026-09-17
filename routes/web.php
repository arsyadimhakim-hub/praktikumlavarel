<?php

use Illuminate\Support\Facades\Route;
use App\Models\Mahasiswa;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa', function () {
$data = Mahasiswa::all();
return view('mahasiswa.index', compact('data'));
});