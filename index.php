<?php
session_start();
require_once "data.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= cek_auth() ?></title>
</head>

<body>
    <h1><?= cek_auth() ?></h1>
    <a href="pendidikan.php">Riwayat Pendidikan saya</a>
    <br>
    <a href="organisasi.php">Riwayat Organisasi</a>
</body>

</html>