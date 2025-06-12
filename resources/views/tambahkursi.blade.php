<!DOCTYPE html>
<html>

<head>
    <title>Tambah Kursi Baru</title>
</head>

<body>

    <h3>Tambah Kursi</h3>

    <a href="/kursi"> Kembali</a>
    <br /><br />

    <form action="/kursi/store" method="post">
        {{ csrf_field() }}

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Number</label>
                <input type="text" class="form-control" name="number" required="required">
            </div>
        </div>

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Merk Kursi</label>
                <input type="text" class="form-control" name="merkkursi" required="required">
            </div>
        </div>

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Harga</label>
                <input type="text" class="form-control" name="hargakursi" required="required">
            </div>
        </div>

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Tersedia</label>
                <select name="tersedia" class="form-control">
                    <option value="1">Ya</option>
                    <option value="0">Tidak</option>
                </select>
            </div>
        </div>

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Berat (kg)</label>
                <input type="text" class="form-control" name="berat" required="required">
            </div>
        </div>

        <input type="submit" value="Simpan Data">
    </form>

</body>

</html>
