<?php 
    require('modalRegister.php');
    require('modalAuth.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О нас</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/main.css">
    <link rel="stylesheet" href="assets/about_us.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/modalquestionaire.css">
</head>
<?php 
    require('header.php');
?>
<body>
    
    <div class="green-fon w-100" style="display: flex; justify-content: center;">
        <div style="text-align: center; display: flex; padding: 1.5rem; padding-top: 7rem; padding-bottom: 7rem;">
            <p style="color: #FFF; font-size: 1.5rem; max-width: 870px; margin: auto;">
                Добро пожаловать в раздел "О нас"! Мы рады представить вам нашу 
                организацию и поделиться информацией о нашей миссии, ценностях и философии.
            </p>
        </div>
    </div>

    <div style="background-color: #E3EEED;">
        <div class="row gy-5" style="text-align: center; display: flex; padding: 2rem; padding-top: 6rem; padding-bottom: 6rem;">
            <div class="col-12 col-xl-5" style="padding-top: 2rem; margin: auto;">
                <img class="img-fluid" src="assets/images/Logo_big.png" alt="logo" style="width: 25rem; height: auto;">
            </div>
            <div class="col-12 col-xl-7"  style="display: flex;">
                <p style="color: #214E41; font-size: 1.5rem; margin: auto;">
                    CalmInside – команда преданных и опытных практикующих медитации, 
                    которые стремятся помочь людям обрести внутренний покой, гармонию и осознанность. 
                    Наша цель состоит в том, чтобы создать пространство, где каждый человек может 
                    практиковать медитацию, независимо от своего уровня опыта или религиозных убеждений.
                </p>
            </div>
        </div>
    </div>

    <div class="girl-fon" style="display: flex; justify-content: center;">
        <div style="text-align: center; display: flex; align-items: flex-end; padding: 10px;">
            <p style="color: #FFF; font-size: 1.5rem; max-width: 1290px; margin-bottom: 55px;">
                Мы верим, что медитация – это неотъемлемая часть здорового образа жизни и ключ к 
                достижению внутреннего равновесия. Мы стремимся предоставить нашим посетителям 
                инструменты и знания, необходимые для освоения практики медитации и ее интеграции 
                в повседневную жизнь.
            </p>
        </div>
    </div>

    <div style="background-color: #E3EEED; padding: 2rem; padding-top: 6rem; padding-bottom: 6rem;">
        <div class="row">
            <div class="col-12 col-xl-7" style="text-align: center; display: flex;">
                <p style="color: #214E41; font-size: 1.5rem; margin: auto;">
                    Мы приглашаем вас присоединиться к нашему медитационному центру и начать 
                    свое путешествие к гармонии и осознанности. Независимо от того, являетесь ли 
                    вы новичком или опытным практикующим, у нас найдется программа, которая 
                    подойдет именно вам. Мы будем рады помочь вам на вашем пути к внутреннему 
                    преображению и благополучию.
                </p>
            </div>
            <div class="col-12 col-xl-5" style="text-align: center; display: flex; justify-content: center;">
                <img class="img-fluid" src="assets/images/lotos.png" alt="flower">
            </div>
        </div>
    </div>


    <footer style="width: 100%;">
        <div class="row" style="background-color: #214E41; margin: 0;">
            <div class="col-1"></div>
            <div class="col-10" style="text-align: center;">
                <p style="font-size: 1.5rem; color: #E3EEED; border-bottom: 2px solid #E3EEED;">CalmInside</p>
            </div>
            <div class="col-1"></div>
        </div>
    </footer>
    <?php
        require('SESSIONmqb.php');
        require('modalquestionnaire.php');
        session_destroy();
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</body>
</html>