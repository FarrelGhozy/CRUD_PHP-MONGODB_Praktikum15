<?php
include 'koneksi.php';

// cek NIM dulu
$cek = $collection->findOne(['nim' => $_POST['nim']]);

if ($cek) {
    echo "
    <script>
        alert('NIM sudah terdaftar!');
        window.location.href = 'tambah.php';
    </script>
    ";
    exit;
}

// jika belum ada, baru simpan
$data = [
    'nim'   => $_POST['nim'],
    'nama'  => $_POST['nama'],
    'prodi' => $_POST['prodi'],
    'umur'  => (int) $_POST['umur']
];

$collection->insertOne($data);

header('Location: index.php');
exit;
