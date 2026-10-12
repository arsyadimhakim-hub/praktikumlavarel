<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;

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

}
