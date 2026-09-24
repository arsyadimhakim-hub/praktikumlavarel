<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mata Kuliah</title>
</head>
<body>

    <h1>Daftar Mata Kuliah</h1>

    <a href="/matakuliah/create">Tambah Mata Kuliah</a>

    <br><br>

    <table border="1" cellpadding="8">
        <tr>
            <th>No</th>
            <th>Kode MK</th>
            <th>Nama Mata Kuliah</th>
            <th>SKS</th>
            <th>Semester</th>
            <th>Dosen Pengampu</th>
        </tr>

        @foreach ($data as $matakuliah)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $matakuliah->kode_mk }}</td>
            <td>{{ $matakuliah->nama_mk }}</td>
            <td>{{ $matakuliah->sks }}</td>
            <td>{{ $matakuliah->semester }}</td>
            <td>{{ $matakuliah->dosen->name }}</td>
        </tr>
        @endforeach

    </table>

</body>
</html>