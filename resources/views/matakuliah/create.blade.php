<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Mata Kuliah</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            margin: 0;
        }

        .header {
            background: #2c3e50;
            color: white;
            padding: 20px;
        }

        .container {
            width: 500px;
            max-width: 90%;
            margin: 30px auto;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        button {
            padding: 10px 20px;
            background: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .back {
            display: inline-block;
            margin-top: 15px;
            color: #3498db;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <div class="header">
        <h1>Data Akademik</h1>
    </div>

    <div class="container">

        <div class="card">

            <h2>Tambah Mata Kuliah</h2>

            <form action="/matakuliah" method="POST">

                @csrf

                <label>Kode Mata Kuliah</label>
                <input type="text" name="kode_mk" required>

                <label>Nama Mata Kuliah</label>
                <input type="text" name="nama_mk" required>

                <label>SKS</label>
                <input type="number" name="sks" min="1" max="4" required>

                <label>Semester</label>
                <input type="number" name="semester" min="1" max="8" required>

                <label>Dosen Pengampu</label>

                <select name="dosen_id" required>
                    <option value="">-- Pilih Dosen --</option>

                    @foreach ($dosen as $item)
                        <option value="{{ $item->id }}">
                            {{ $item->name }}
                        </option>
                    @endforeach

                </select>

                <button type="submit">
                    Simpan
                </button>

            </form>

            <a href="/matakuliah" class="back">
                ← Kembali ke Data Mata Kuliah
            </a>

        </div>

    </div>

</body>
</html>