<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryBuilderDemoController extends Controller
{
    public function tampilkanSemua()
    {
        $data = DB::table('mahasiswas')->get();
        return view('demo.query-builder', compact('data'));
    }

    public function tampilkanFilter()
    {
        $data = DB::table('mahasiswas')
            ->where('semester', '>=', 3)
            ->orderBy('nama')
            ->get();
        return view('demo.query-builder', compact('data'));
    }

    public function statistikProdi()
    {
        $rekap = DB::table('mahasiswas')
            ->select('prodi', DB::raw('count(*) as jumlah'))
            ->groupBy('prodi')
            ->get();
        return view('demo.statistik-prodi', compact('rekap'));
    }

    // Menampilkan form tambah data
    public function formTambah()
    {
        return view('demo.form-tambah');
    }

    // Memproses penyimpanan data baru (INSERT)
    public function prosesInsert(Request $request)
    {
        DB::table('mahasiswas')->insert([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'prodi' => $request->prodi,
            'semester' => $request->semester,
        ]);

        return redirect()->route('mhs.tampil')->with('success', 'Data mahasiswa berhasil ditambahkan!');
    }

    // Contoh Method Update (Mengubah semester mahasiswa berdasarkan NIM)
    public function prosesUpdate($nim)
    {
        DB::table('mahasiswas')
            ->where('nim', $nim)
            ->update(['semester' => '3']);

        return redirect()->route('mhs.tampil')->with('success', 'Semester mahasiswa berhasil di-update!');
    }

    // Contoh Method Delete (Menghapus mahasiswa berdasarkan NIM)
    public function prosesDelete($nim)
    {
        DB::table('mahasiswas')
            ->where('nim', $nim)
            ->delete();

        return redirect()->route('mhs.tampil')->with('success', 'Data mahasiswa berhasil dihapus!');
    }
}