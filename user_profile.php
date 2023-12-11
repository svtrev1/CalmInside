<?php 
    require('header.php');
    if (empty($_COOKIE['login']))
    {
        header('Location: /CalmInside/main.php');
        die();
    }
    // require('BD_for_user_profile.php');
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

    <div style="margin: 30px; ">
        <div style="width: 600px;">
            <h4 style="text-align:center">Напряженность/расслабленность</h4>
            <canvas id="myChart1"></canvas> 
        </div>
    </div>
    <div style="margin: 30px; ">
        <div style="width: 600px;">
            <h4 style="text-align:center">Рассеянность/Внимательность</h4>
            <canvas id="myChart2"></canvas> 
        </div>
    </div>
    <div style="margin: 30px; ">
        <div style="width: 600px;">
            <h4 style="text-align:center">Усталось/Бодрость</h4>
            <canvas id="myChart3"></canvas> 
        </div>
    </div>
    

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="grath.js"></script>

    <?php
        $_SESSION['def_or_aft'] = 0;
        require('modalquestionnaire.php');
        
    ?>

    
</body>
</html>