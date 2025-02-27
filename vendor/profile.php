<?php
session_start();
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>profile</title>
</head>

<body>
    <form>
        <h1><?= $_SESSION['user']['name']?></h1>
        <h2><?= $_SESSION['user']['email']?></h2>
        <h3><?= $_SESSION['user']['phone']?></h3>
        <a href="logout.php">выход</a><br>
        <a href="../index.php">назад</a>
    </form>
</body>

</html>