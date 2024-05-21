<?php
require_once "data.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organisasi</title>
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
    <h1>Riwayat Organisasi</h1>

    <a href="/">Kembali ke home</a>

    <br>
    <br>

    <table>
        <thead>
            <tr>
                <th>Tahun Gabung</th>
                <th>Nama</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($organisasi as $k => $v) : ?>
                <tr>
                    <td><?= $v['tahun_gabung'] ?></td>
                    <td><?= $v['nama'] ?></td>
                    <td><a href="<?= "/organisasi-detail.php?id={$k}" ?>">Detail</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>