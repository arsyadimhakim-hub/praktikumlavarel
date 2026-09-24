<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Mata Kuliah</title>
</head>
<body>

    <h1>Tambah Mata Kuliah</h1>

    <form action="/matakuliah" method="POST">

        @csrf

        <label>Kode Mata Kuliah</label>
        <br>
        <input type="text" name="kode_mk">
        <br><br>

        <label>Nama Mata Kuliah</label>
        <br>
        <input type="text" name="nama_mk">
        <br><br>

        <label>SKS</label>
        <br>
        <input type="number" name="sks" min="1" max="4">
        <br><br>

        <label>Semester</label>
        <br>
        <input type="number" name="semester" min="1" max="8">
        <br><br>

        <label>Dosen Pengampu</label>
        <br>
        <select name="dosen_id">

            @foreach ($dosen as $dosen)
                <option value="{{ $dosen->id }}">
                    {{ $dosen->name }}
                </option>
            @endforeach

        </select>

        <br><br>

        <button type="submit">Simpan</button>

    </form>

    <br>

    <a href="/matakuliah">Kembali</a>

</body>
</html>