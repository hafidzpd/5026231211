@extends('template')

@section('content')
    <h3>Data Kursi</h3>

    <a href="/kursi/tambah" class="btn btn-info"> + Tambah Kursi Baru</a>

    <p>Cari Data Kursi :</p>
    <form action="/kursi/cari" method="GET" class="form-inline">
        <input type="text" name="cari" placeholder="Cari Merk Kursi .." value="{{ old('cari') }}">
        <input type="submit" value="CARI" class="btn btn-primary">
    </form>
    <br />

    <table class="table table-striped">
        <tr>
            <th>Nomor</th>
            <th>Merk Kursi</th>
            <th>Harga</th>
            <th>Tersedia</th>
            <th>Berat (kg)</th>
            <th>Opsi</th>
        </tr>
        @foreach ($kursi as $k)
            <tr>
                <td>{{ $k->number }}</td>
                <td>{{ $k->merkkursi }}</td>
                <td>Rp{{ number_format($k->hargakursi, 0, ',', '.') }}</td>
                <td>{{ $k->tersedia == 1 ? 'Ya' : 'Tidak' }}</td>
                <td>{{ $k->berat }}</td>
                <td>
                    <a href="/kursi/edit/{{ $k->number }}" class="btn btn-success">Edit</a>
                    <a href="/kursi/hapus/{{ $k->number }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $kursi->links() }} <!-- Link pagination -->
@endsection
