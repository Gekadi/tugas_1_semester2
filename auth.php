<?php
require_once "app.php";
session_start();

$n = findUserByUsername($conn, $_POST['username']);
mysqli_close($conn);


if (is_null($n)) {
    $_SESSION['error'] = "Username atau Password anda salah";
    header("Location: /login.php");
    die();
}

if($n['password'] != $_POST['password']){
    $_SESSION['error'] = "Username atau Password anda salah";
    header("Location: /login.php");
    die();
}

$_SESSION['auth'] = $n['username'];
header("Location: /index.php");
die();