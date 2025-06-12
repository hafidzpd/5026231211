<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    // Menampilkan semua data karyawan
    public function index()
    {
        $karyawan = DB::table('karyawan')->paginate();
        return view('karyawan', ['karyawan' => $karyawan]);
    }

    // Menampilkan form tambah karyawan
    public function tambah()
    {
        return view('tambahkaryawan');
    }

    // Menyimpan data karyawan baru
    public function store(Request $request)
    {
        DB::table('karyawan')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);

        return redirect('/karyawan');
    }

    // Menampilkan form edit karyawan
    public function edit($kodepegawai)
    {
        $karyawan = DB::table('karyawan')->where('kodepegawai', $kodepegawai)->get();
        return view('editkaryawan', ['karyawan' => $karyawan]);
    }

    // Mengupdate data karyawan
    public function update(Request $request)
    {
        DB::table('karyawan')->where('kodepegawai', $request->kodepegawai)->update([
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);

        return redirect('/karyawan');
    }

    // Menghapus data karyawan
    public function hapus($kodepegawai)
    {
        DB::table('karyawan')->where('kodepegawai', $kodepegawai)->delete();
        return redirect('/karyawan');
    }

    // Mencari data karyawan berdasarkan nama lengkap
    public function cari(Request $request)
    {
        $cari = $request->cari;

        $karyawan = DB::table('karyawan')
            ->where('namalengkap', 'like', "%" . $cari . "%")
            ->paginate();

        return view('karyawan', ['karyawan' => $karyawan]);
    }
}
