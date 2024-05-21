<?php
require_once "app.php";
session_start();

$n = pendidikanBaru($conn, $_POST);

mysqli_close($conn);

if (is_null($n)) {
    $_SESSION['BERHASIL_TAMBAH_PENDIDIKAN'] = "Gagal Menambah Data";
} else {
    $_SESSION['BERHASIL_TAMBAH_PENDIDIKAN'] = "Berhasil menambah data jenjang: {$_POST['jenjang']}, instansi: {$_POST['instansi']}, tahun lulus: {$_POST['tahun_lulus']}, No. Ijazah: {$_POST['no_ijazah']}";
}

header("Location: /pendidikan.php");
die();
