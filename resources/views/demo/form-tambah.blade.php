<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Tambah Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="col-md-6 offset-md-3">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4>Tambah Mahasiswa Baru</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('mhs.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">NIM</label>
                            <input type="text" name="nim" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Program Studi</label>
                            <input type="text" name="prodi" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Semester</label>
                            <input type="number" name="semester" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-success">Simpan Data</button>
                        <a href="{{ route('mhs.tampil') }}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>