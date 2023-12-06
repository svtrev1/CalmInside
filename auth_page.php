<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Главная</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/main.css">
</head>
<?php 
    require('header.php');
    session_start();
    require('error.php');
?>
<body style="background-color: beige;">
    <div class="position-absolute top-50 start-50 translate-middle text-center container-sm" style="outline: 1px solid black; border-radius: 20px; margin-top: 20px; max-width: 500px; background-color: white;">
        <div class="mb-5 mt-5">
            <div class="row">
                <p style="font-size: 34px; font-weight: 900; color: #214E41">Авторизация</p>
            </div>
            <div class="row">
                <img src="assets/images/logo_CI.png" style="width: 10rem; margin-top: 1rem;" class="mx-auto d-block"> 
            </div>
            <?php if (hasMessage('error')): ?>
                <div style="padding: 10px; border-radius: 6px; margin: 20px 0; border: 2px solid #762c2c; background: #f3d3d3; color: #762c2c;"><?php echo getMessage('error') ?> </div>
            <?php endif; ?>
        </div>
        <form action="BDauth.php" method="post">
            <div class="input-group input-group-sm mx-auto mb-5 w-75 row">
                <input type="text" class="justify-content-center form-control reg_place" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="логин" name="login">
            </div>
            <div class="input-group input-group-sm mx-auto mb-5 w-75 row">
                <input type="text" class="justify-content-center form-control reg_place" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="пароль" name="pass">
            </div>
            <div class="text-center" style="margin-bottom: 2rem;">
            <button type="submit" class="btn btn-primary w-50 btn-lg btn-dark row mb-3" style="border-radius: 27px; font-weight: 900; background-color: #214E41; color: white;">Войти</button>
        </div>
        </form>
        <div class="row">
            <div class="col-6" style="text-align: end;">
                <p style="color: #214E41;">Нет аккаунта?</p>
            </div>
            <div class="col-6" style="text-align: start;">
                <a style="color: #214E41;" href="register_page.php">Регистрация</a>
            </div>
        </div>
    </div>
</body>
</html>