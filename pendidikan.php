<?php
session_start();
require_once "app.php";

$p = getAllData($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendidikan</title>
    <style>
        table,
        th,
        td {
            border: 1px solid;
            padding: 10px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }
    </style>
</head>

<body>
    <h1>Riwayat Pendidikan</h1>

    <a href="/">Kembali ke home</a>

    <br>

    <a href="/pendidikan-tambah.php">Tambah</a>

    <br>
    <br>

    <?php if (isset($_SESSION['BERHASIL_TAMBAH_PENDIDIKAN'])) : ?>
        <p><?= $_SESSION['BERHASIL_TAMBAH_PENDIDIKAN'] ?></p>
        <?php session_unset(); ?>
    <?php endif; ?>

    <table>
        <thead>
            <tr>
                <th>Tahun</th>
                <th>Jenjang</th>
                <th>Instansi</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($p as $k => $v) : ?>
                <tr>
                    <td><?= $v['tahun_lulus'] ?></td>
                    <td><?= $v['jenjang'] ?></td>
                    <td><?= $v['instansi'] ?></td>
                    <td>
                        <a href="<?= "/pendidikan-detail.php?id={$v['id']}" ?>">Detail</a>
                        <a href="<?= "/pendidikan-edit.php?id={$v['id']}" ?>">Edit</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>

<?php
mysqli_close($conn);
?>