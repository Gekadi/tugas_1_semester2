<?php
require_once "data.php";

$id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organisasi</title>
</head>

<body>
    <h1>Riwayat Organisasi Detail</h1>

    <a href="/organisasi.php">Kembali ke organisasi</a>

    <br>
    <br>

    <p>Nama Organisasi : <?= $organisasi[$id]['nama'] ?></p>
    <p>Jabatan : <?= $organisasi[$id]['jabatan'] ?></p>
    <p>Tahun gabung : <?= $organisasi[$id]['tahun_gabung'] ?></p>
    <p>Tahun Keluar : <?= $organisasi[$id]['tahun_keluar'] ?></p>

</body>

</html>