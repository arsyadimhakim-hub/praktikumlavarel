<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use App\Models\User;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    public function index()
    {
        $data = Matakuliah::with('dosen')->get();

        return view('matakuliah.index', compact('data'));
    }

    public function create()
    {
        $dosen = User::all();

        return view('matakuliah.create', compact('dosen'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_mk' => 'required|unique:matakuliahs,kode_mk',
            'nama_mk' => 'required',
            'sks' => 'required|integer|min:1|max:4',
            'semester' => 'required|integer|min:1|max:8',
            'dosen_id' => 'required|exists:users,id',
        ]);

        Matakuliah::create([
            'kode_mk' => $request->kode_mk,
            'nama_mk' => $request->nama_mk,
            'sks' => $request->sks,
            'semester' => $request->semester,
            'dosen_id' => $request->dosen_id,
        ]);

        return redirect('/matakuliah')->with('success', 'Mata kuliah berhasil ditambahkan!');
    }
}