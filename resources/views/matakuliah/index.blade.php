<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Akademik</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f2f2f2;
        }

        .header {
            background: #2c3e50;
            color: white;
            padding: 20px;
        }

        .header h1 {
            margin: 0;
        }

        .container {
            width: 90%;
            margin: 30px auto;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .button {
            display: inline-block;
            padding: 10px 15px;
            background: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .button:hover {
            background: #2980b9;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #34495e;
            color: white;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        tr:nth-child(even) {
            background: #f8f8f8;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            padding: 15px;
            color: #666;
        }
    </style>
</head>

<body>

    <div class="header">
        <h1>Data Akademik</h1>
        <p>Manajemen Data Mata Kuliah</p>
    </div>

    <div class="container">

        <div class="card">

            <a href="/matakuliah/create" class="button">
                + Tambah Mata Kuliah
            </a>

            <h2>Daftar Mata Kuliah</h2>

            <table>
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

        </div>

    </div>

    <div class="footer">
        <p>© 2026 Sistem Informasi Akademik</p>
    </div>

</body>
</html>