<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KursiController extends Controller
{
    // Menampilkan semua data kursi
    public function index()
    {
        $kursi = DB::table('kursi')->paginate();
        return view('kursi', ['kursi' => $kursi]);
    }

    // Menampilkan form tambah kursi
    public function tambah()
    {
        return view('tambahkursi');
    }

    // Menyimpan data kursi baru
    public function store(Request $request)
    {
        DB::table('kursi')->insert([
            'number' => $request->number,
            'merkkursi' => $request->merkkursi,
            'hargakursi' => $request->hargakursi,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);

        return redirect('/kursi');
    }

    // Menampilkan form edit kursi
    public function edit($number)
    {
        $kursi = DB::table('kursi')->where('number', $number)->get();
        return view('editkursi', ['kursi' => $kursi]);
    }

    // Mengupdate data kursi
    public function update(Request $request)
    {
        DB::table('kursi')->where('number', $request->number)->update([
            'merkkursi' => $request->merkkursi,
            'hargakursi' => $request->hargakursi,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);

        return redirect('/kursi');
    }

    // Menghapus data kursi
    public function hapus($number)
    {
        DB::table('kursi')->where('number', $number)->delete();
        return redirect('/kursi');
    }

    // Mencari data kursi berdasarkan merk
    public function cari(Request $request)
    {
        $cari = $request->cari;

        $kursi = DB::table('kursi')
            ->where('merkkursi', 'like', "%" . $cari . "%")
            ->paginate();

        return view('index', ['kursi' => $kursi]);
    }
}
