@extends('template')

@section('content')

    <h3>Data Pegawai</h3>

    <a href="/pegawai"> Kembali</a>

    <br />
    <br />
    {{-- action mengarah ke pegawai/store untuk dilakukan routing --}}
    <form action="/pegawai/store" method="post">
        {{ csrf_field() }}
        <div class="row p-1 mb-1">
            <div class="col-2">
                    <label class="control-label">Nama</label>
                    <input type="text" class="form-control" name="nama" required="required">
                </div>
            </div>
        <div class="row p-1 mb-1">
            <div class="col-2">
                    <label class="control-label">jabatan</label>
                    <input type="text" class="form-control" name="jabatan" required="required">
                </div>
            </div>
        <div class="row p-1 mb-1">
            <div class="col-2">
                    <label class="control-label">umur</label>
                    <input type="number" class="form-control" name="umur" required="required">
                </div>
            </div>
        <div class="row p-1 mb-1">
            <div class="col-2">
                    <label class="control-label">alamat</label>
                    <textarea name="alamat" required="required"></textarea>
                </div>
            </div>

        <input type="submit" value="Simpan Data">
    </form>

</body>
@endsection
</html>
