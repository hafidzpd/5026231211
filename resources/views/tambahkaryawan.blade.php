@extends('template')

@section('content')
    <h3>Tambah Data Karyawan</h3>

    <form action="/karyawan/store" method="POST" class="form-horizontal">
        @csrf
        <div class="form-group row">
            <label for="kodepegawai" class="col-sm-2 col-form-label">Kode Pegawai</label>
            <div class="col-sm-6">
                <input type="text" name="kodepegawai" class="form-control" maxlength="5" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-6">
                <input type="text" name="namalengkap" class="form-control" maxlength="50" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
            <div class="col-sm-6">
                <input type="text" name="divisi" class="form-control" maxlength="5" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="departemen" class="col-sm-2 col-form-label">Departemen</label>
            <div class="col-sm-6">
                <input type="text" name="departemen" class="form-control" maxlength="10" required>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-6 offset-sm-2">
                <button type="submit" class="btn btn-primary">SIMPAN</button>
            </div>
        </div>
    </form>
@endsection
