<?php
include 'koneksi.php';
$collection->deleteOne(['nim' => $_GET['nim']]);
header('Location: index.php');
