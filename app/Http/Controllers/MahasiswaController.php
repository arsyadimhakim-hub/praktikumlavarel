<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index() {
    $mahasiswa = Mahasiswa::all();
    return view('mahasiswa.index', compact('mahasiswa'));
}

public function create() { return 'create: form tambah mahasiswa'; }
public function store(Request $request)
{
$nama = $request->input('nama');
$nim = $request->input('nim');
return "Data yang diterima -> NIM: {$nim}, Nama: {$nama}";
}
public function show(Mahasiswa $mahasiswa)
{
    return view('mahasiswa.show', compact('mahasiswa'));
}

public function edit($id) { return "edit: form edit mahasiswa id {$id}"; }
public function update(Request $request, $id) { return "update: perbarui data id {$id}"; }
public function destroy($id) { return "destroy: hapus data id {$id}"; }
// Pastikan method ini ada di dalam MahasiswaController.php
    public function ujiEagerLoading()
    {
        // Mengaktifkan log query
        DB::enableQueryLog();

        // Uji tanpa Eager Loading (bisa diganti dengan with('nilai') untuk membandingkan)
        $mahasiswa = Mahasiswa::all(); 
        foreach ($mahasiswa as $mhs) {
            $mhs->nilai->count(); 
        }

        // Menampilkan hasil log query ke layar
        dd(DB::getQueryLog());
    }
} // <-- Kurung kurawal penutup class Controller

