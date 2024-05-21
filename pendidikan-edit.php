<?php
require_once "data.php";
$id = $_GET['id'];
$p = $pendidikan[$id];

function nyelekJenjang($v, $d)
{
    if ($v == $d) {
        return 'selected';
    }

    return '';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Riwayat Pendidikan</title>
    <style>
        select {
            width: 100%;
            padding: 5px;
            border: 1px solid;
        }

        input[type=text] {
            width: 100%;
            border: 1px solid;
            padding: 5px;
        }

        .content {
            padding: 20px;
        }
    </style>
</head>

<body>
    <h1>Edit Riwayat Pendidikan</h1>
    <a href="/pendidikan.php">Kembali ke pendidikan</a>
    <div class="content">

        <form action="pendidikan-store.php" method="post">
            <div>
                <label>Jenjang</label>
                <select name="jenjang">
                    <option <?= nyelekJenjang("SD", $p['jenjang']) ?> value="SD">SD</option>
                    <option <?= nyelekJenjang("SD", $p['jenjang']) ?> value="SD">SMP</option>
                    <option <?= nyelekJenjang("SMA", $p['jenjang']) ?> value="SMA">SMA</option>
                    <option <?= nyelekJenjang("SMK", $p['jenjang']) ?> value="SMK">SMK</option>
                    <option <?= nyelekJenjang("S1", $p['jenjang']) ?> value="S1">S1</option>
                    <option <?= nyelekJenjang("S2", $p['jenjang']) ?> value="S2">S2</option>
                    <option <?= nyelekJenjang("S3", $p['jenjang']) ?> value="S3">S3</option>
                </select>
            </div>
            <div>
                <label>Instansi</label>
                <input type="text" name="instansi" value="<?= $p['instansi'] ?>">
            </div>
            <div>
                <label>Tahun Lulus</label>
                <input type="text" name="tahun_lulus" value="<?= $p['tahun_lulus'] ?>">
            </div>
            <div>
                <label>No. Ijazah</label>
                <input type="text" name="no_ijazah" value="<?= $p['no_ijazah'] ?>">
            </div>
            <div style="margin-top: 20px;">
                <input type="submit" value="Simpan">
            </div>
        </form>
    </div>

</body>

</html>