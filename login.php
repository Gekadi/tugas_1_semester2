<?php session_start();

if(isset($_SESSION['auth'])){
    header("Location: /");
    die();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anda Tidak Login</title>
</head>
<body>
    <?php if (isset($_SESSION['error'])) : ?>
        <p><?= $_SESSION['error'] ?></p>
        <?php session_unset(); ?>
    <?php endif; ?>
    <form action="auth.php" method="post">
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" id="" placeholder="username">
        </div>
        <div>
            <label for="password">password</label>
            <input type="password" name="password" id="" placeholder="password">
        </div>
        <input type="submit" value="login">
    </form>
</body>
</html>