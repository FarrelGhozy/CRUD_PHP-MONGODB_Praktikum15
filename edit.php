<?php
include 'koneksi.php';
$mhs = $collection->findOne(['nim' => $_GET['nim']]);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .form-card {
            max-width: 450px;
            margin: 80px auto;
            padding: 25px;
            border-radius: 10px;
            background-color: #ffffff;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        .form-title {
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="form-card">
    <h4 class="form-title">Edit Data Mahasiswa</h4>

    <form action="update.php" method="post">
        <input type="hidden" name="nim" value="<?= htmlspecialchars($mhs['nim']) ?>">

        <div class="mb-3">
            <label class="form-label">NIM</label>
            <input type="text" class="form-control" value="<?= htmlspecialchars($mhs['nim']) ?>" disabled>
        </div>

        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" 
                   value="<?= htmlspecialchars($mhs['nama']) ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Program Studi</label>
            <input type="text" name="prodi" class="form-control" 
                   value="<?= htmlspecialchars($mhs['prodi']) ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Umur</label>
            <input type="number" name="umur" class="form-control" 
                   value="<?= htmlspecialchars($mhs['umur']) ?>" required>
        </div>

        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-warning">Update Data</button>
            <a href="index.php" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>

</body>
</html>
