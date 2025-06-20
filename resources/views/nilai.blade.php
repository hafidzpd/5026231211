@extends('template')

@section('content')
    <h3>Data Nilai</h3>

    <a href="/eas/tambah" class="btn btn-info">+ Tambah Nilai Baru</a>
    <br><br>

    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>

        @foreach ($nilai as $n)
            <tr>
                <td>{{ $n->nilai_id }}</td>
                <td>{{ $n->nomorinduksiswa }}</td>
                <td>{{ $n->nilai_angka }}</td>
                <td>{{ $n->sks }}</td>
                <td>
                    @if ($n->nilai_angka >= 81)
                        A
                    @elseif ($n->nilai_angka >= 61)
                        B
                    @elseif ($n->nilai_angka >= 41)
                        C
                    @else
                        D
                    @endif
                </td>
                <td>{{ $n->nilai_angka * $n->sks }}</td>
            </tr>
        @endforeach
    </table>

    {{ $nilai->links() }}
@endsection
