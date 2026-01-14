<?php
include 'koneksi.php';

$collection->updateOne(
    ['nim' => $_POST['nim']],
    ['$set' => [
        'nama'  => $_POST['nama'],
        'prodi' => $_POST['prodi'],
        'umur'  => (int) $_POST['umur']
    ]]
);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Update Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .message-box {
            max-width: 450px;
            margin: 100px auto;
            padding: 30px;
            background: #ffffff;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

<div class="message-box">
    <h4 class="text-success mb-3">✅ Data Berhasil Diperbarui</h4>
    <p>Data mahasiswa dengan NIM <b><?= htmlspecialchars($_POST['nim']) ?></b> telah berhasil diperbarui.</p>
    <a href="index.php" class="btn btn-primary mt-3">Kembali ke Data Mahasiswa</a>
</div>

</body>
</html>
