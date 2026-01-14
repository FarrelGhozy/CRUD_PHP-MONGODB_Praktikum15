<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'koneksi.php'; 
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        }
        .table thead {
            background-color: #0d6efd;
            color: #fff;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="card p-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="mb-0">📋 Data Mahasiswa</h4>
            <a href="tambah.php" class="btn btn-primary">+ Tambah Mahasiswa</a>
        </div>

        <table class="table table-bordered table-hover align-middle">
            <thead>
                <tr>
                    <th style="width:15%">NIM</th>
                    <th style="width:25%">Nama</th>
                    <th style="width:25%">Prodi</th>
                    <th style="width:10%">Umur</th>
                    <th style="width:25%" class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $data = $collection->find();
                foreach ($data as $mhs) {
                ?>
                <tr>
                    <td><?= htmlspecialchars($mhs['nim']) ?></td>
                    <td><?= htmlspecialchars($mhs['nama']) ?></td>
                    <td><?= htmlspecialchars($mhs['prodi']) ?></td>
                    <td><?= htmlspecialchars($mhs['umur']) ?></td>
                    <td class="text-center">
                        <a href="edit.php?nim=<?= urlencode($mhs['nim']) ?>" 
                           class="btn btn-warning btn-sm me-1">Edit</a>
                        <a href="hapus.php?nim=<?= urlencode($mhs['nim']) ?>" 
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

        <?php if ($collection->countDocuments() == 0) { ?>
            <div class="alert alert-info text-center">
                Data mahasiswa belum tersedia.
            </div>
        <?php } ?>
    </div>
</div>

</body>
</html>
