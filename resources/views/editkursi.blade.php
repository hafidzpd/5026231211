<!DOCTYPE html>
<html>

<head>
    <title>Edit Data Kursi</title>
</head>

<body>

    <h3>Edit Kursi</h3>

    <a href="/kursi"> Kembali</a>
    <br /><br />

    @foreach ($kursi as $k)
        <form action="/kursi/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $k->number }}"> <br />
            Merk Kursi <input type="text" required="required" name="merk" value="{{ $k->merkkursi }}"> <br />
            Harga <input type="text" required="required" name="harga" value="{{ $k->hargakursi }}"> <br />

            Tersedia
            <select name="tersedia">
                <option value="1" {{ $k->tersedia == 1 ? 'selected' : '' }}>Ya</option>
                <option value="0" {{ $k->tersedia == 0 ? 'selected' : '' }}>Tidak</option>
            </select> <br />

            Berat <input type="text" required="required" name="berat" value="{{ $k->berat }}"> <br />

            <input type="submit" value="Simpan Data">
        </form>
    @endforeach

</body>

</html>
