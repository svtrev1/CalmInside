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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="assets/modalquestionaire.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    
    <title>Личный кабинет</title>
</head>
<body>
    <h1>
        Поздравляем!!! Вы вошли в свой аккаунт, <?=$_COOKIE['login']?>
    </h1>
    <a href="/CalmInside/logout.php">Выйти</a>
    <!-- Кнопка-триггер модального окна -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#questionnaire">Начать медитацию</button>

    <?php
        require('modalquestionnaire.php');
    ?>

    
</body>
</html>