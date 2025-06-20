<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    public function index()
    {
        $nilai = DB::table('nilai')->paginate();
        return view('nilai', ['nilai' => $nilai]);
    }

    public function tambah()
    {
        return view('tambahnilai');
    }

    public function store(Request $request)
    {
        DB::table('nilai')->insert([
            'nomorinduksiswa' => $request->nomorinduksiswa,
            'nilai_angka' => $request->nilai_angka,
            'sks' => $request->sks,
        ]);

        return redirect('/eas');
    }
}
