<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "riiwayat";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Gagal konek ke database: " . mysqli_connect_error());
}

function getAllData($conn)
{
    $sql = "SELECT * FROM pendidikan";
    $result = mysqli_query($conn, $sql);

    $data = [];

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
    }

    return $data;
}

function findPendidikanByID($conn, $id)
{
    $sql = "SELECT * FROM pendidikan WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);


    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            return $row;
        }
    }

    return null;
}

function pendidikanBaru($conn, $data)
{
    $sql = "INSERT INTO pendidikan
    (tahun_lulus, jenjang, instansi, no_ijazah, created_at, updated_at)
    VALUES (
        {$data['tahun_lulus']}, 
        '{$data['jenjang']}', 
        '{$data['instansi']}', 
        '{$data['no_ijazah']}', 
        NOW(), 
        NOW()
    );";

    if (mysqli_query($conn, $sql)) {
        return mysqli_insert_id($conn);
    }

    return null;
}


function findUserByUsername($conn, $data){
    $sql = "SELECT * FROM users WHERE username = '{$data}' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            return $row;
        }
    }

    return null;
}