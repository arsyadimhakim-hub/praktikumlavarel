<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Query Builder - Mahasiswa</title>
    <!-- Menggunakan Bootstrap 5 untuk styling sederhana -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Daftar Data Mahasiswa</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped align-middle">
                                <thead class="table-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <th>Prodi</th>
                                        <th>Semester</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Menggunakan @forelse untuk menangani data kosong maupun ada --}}
                                    @forelse ($data as $index => $mhs)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $mhs->nim }}</td>
                                            <td>{{ $mhs->nama }}</td>
                                            <td>{{ $mhs->prodi }}</td>
                                            <td>{{ $mhs->semester }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center text-muted py-4">
                                                Tidak ada data mahasiswa yang ditemukan.
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>