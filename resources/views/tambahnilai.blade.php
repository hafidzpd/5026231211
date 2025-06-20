<!DOCTYPE html>
<html>

<head>
    <title>Tambah Nilai Baru</title>
</head>

<body>
    <h3>Tambah Nilai</h3>
    <a href="/eas">Kembali</a>
    <br /><br />

    <form action="/eas/store" method="post">
        @csrf

        <label>Nomor Induk Siswa</label><br>
        <input type="text" name="nomorinduksiswa" maxlength="5" required><br><br>

        <label>Nilai Angka</label><br>
        <input type="number" name="nilai_angka" required><br><br>

        <label>SKS</label><br>
        <input type="number" name="sks" required><br><br>

        <input type="submit" value="Simpan Data">
    </form>
</body>

</html>
