@extends('template')

@section('content')
    <h3>Data Karyawan</h3>


    <br><br>
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Kode Pegawai</th>
                <th>Nama Lengkap</th>
                <th>Divisi</th>
                <th>Departemen</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($karyawan as $k)
                <tr>
                    <td>{{ $k->kodepegawai }}</td>
                    <td>{{ strtoupper($k->namalengkap) }}</td> <!-- Upper Case -->
                    <td>{{ $k->divisi }}</td>
                    <td>{{ strtolower($k->departemen) }}</td> <!-- Lower Case -->
                    <td>
                        <a href="/karyawan/hapus/{{ $k->kodepegawai }}" class="btn btn-danger"
                           onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="/karyawan/tambah" class="btn btn-info">+ Tambah Data</a>

    {{ $karyawan->links() }} <!-- Pagination -->
@endsection
