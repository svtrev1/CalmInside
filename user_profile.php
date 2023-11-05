<?php 
    require('header.php');
    if (empty($_COOKIE['login']))
    {
        header('Location: /CalmInside/main.php');
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Личный кабинет</title>
</head>
<body>
    <h1>
        Поздравляем!!! Вы вошли в свой аккаунт, <?=$_COOKIE['login']?>
    </h1>
    <a href="/CalmInside/logout.php">Выйти</a>
</body>
</html>