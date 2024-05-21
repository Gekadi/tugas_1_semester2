<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Riwayat Pendidikan</title>
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
    <h1>Tambah Riwayat Pendidikan</h1>
    <a href="/pendidikan.php">Kembali ke pendidikan</a>
    <div class="content">

        <form action="pendidikan-store.php" method="post">
            <div>
                <label>Jenjang</label>
                <select name="jenjang">
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA">SMA</option>
                    <option value="SMK">SMK</option>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                </select>
            </div>
            <div>
                <label>Instansi</label>
                <input type="text" name="instansi">
            </div>
            <div>
                <label>Tahun Lulus</label>
                <input type="text" name="tahun_lulus">
            </div>
            <div>
                <label>No. Ijazah</label>
                <input type="text" name="no_ijazah">
            </div>
            <div style="margin-top: 20px;">
                <input type="submit" value="Simpan">
            </div>
        </form>
    </div>

</body>

</html>