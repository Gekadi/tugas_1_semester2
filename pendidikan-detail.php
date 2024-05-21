<?php
require_once "app.php";

$id = $_GET['id'];

$d = findPendidikanByID($conn, $id);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendidikan</title>
</head>

<body>
    <h1>Riwayat Pendidikan Detail</h1>

    <a href="/pendidikan.php">Kembali ke pendidikan</a>

    <br>
    <br>

    <p>Tahun Lulus : <?= $d['tahun_lulus'] ?></p>
    <p>Jenjang : <?= $d['jenjang'] ?></p>
    <p>Instansi : <?= $d['instansi'] ?></p>
    <p>No. Ijazah : <?= $d['no_ijazah'] ?></p>
    <p>Created At : <?= $d['created_at'] ?></p>
    <p>Updated At : <?= $d['updated_at'] ?></p>

</body>

</html>

<?php
mysqli_close($conn);
?>