<?php

if(!isset($_SESSION['auth'])){
    $_SESSION['error'] = "Anda Tidak Login";
    header("Location: /login.php");
    die();
}

function cek_auth(){
    return isset($_SESSION['auth']) ? "Hello {$_SESSION['auth']}" : "Anda Tidak Login";
}

$dataDiri = [
    'nama' => 'noven',
    'tgl_lahir' => '1999-12-12',
];

$pendidikan = [
    [
        'jenjang' => 'SD',
        'instansi' => 'SD 13 Denpasar',
        'tahun_lulus' => 2000,
        'no_ijazah' => 'XXX-XX.XX',
    ],
    [
        'jenjang' => 'SMP',
        'instansi' => 'SMP 1 Denpasar',
        'tahun_lulus' => 2008,
        'no_ijazah' => 'XXXXX.XX',
    ],
];


$organisasi = [
    [
        'nama' => 'Laskar Bali',
        'jabatan' => 'Sekertaris Jendral',
        'tahun_gabung' => 2023,
        'tahun_keluar' => 'Saat ini',
    ],
    [
        'nama' => 'Suka Duka',
        'jabatan' => 'Anggota',
        'tahun_gabung' => 2000,
        'tahun_keluar' => 2010,
    ],
];
