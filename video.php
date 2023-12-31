
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Видео-обучение</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/video.css">
    <link rel="stylesheet" href="assets/modalquestionaire.css">
</head>
<?php 
setcookie('LK', '', -1, "/");
$LK = '';
    require('header.php');
    require('error.php');
    
?>
<body>

    <div class="container-fluid first" style="padding-left: 0; padding-right: 0;">

        <div class="row">
            <div class="col-lg-7 col-md-12" style=" min-height: 400px; display: flex; padding-left: 0px; padding-right: 0px;">
                <div style="margin: auto; padding-left: 2rem; padding-right: 2rem;">
                    <p style="color: #214E41; font-size: 2.25rem; font-weight: bold;">Если вы новичок, видео-медитации - это наилучший вариант!</p>
                    <p style="border-bottom: 2px solid #214E41;"></p>
                    <p style="color: #214E41; font-size: 1.625rem;">Но поскольку вы не можете видеть инструктора, вы должны попытаться выполнить шаги в меру своего понимания.<br>Вы можете смотреть видео-инструкцию и узнать правильную позу, время и то, как выполняется медитация.</p>
                </div>
            </div>
            <div class="col-lg-5 col-md-12" style="display: flex; padding: 0">
                <img style="margin: auto;" class="w-100 img-fluid img1" src="assets/images/video-women.png" alt="#">
            </div>
        </div>
        
        <div class="row" style="font-size: 1.25rem; font-weight: bold; text-align: center; padding-bottom: 60px; margin-left: 8rem; margin-right: 8rem;">
            <div class="col-lg-6 col-md-12 col-sm-12" style="margin-bottom: 50px;">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/spbwnQ0B8yQ?si=rMkXt0AFFd8UDcPp" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12" style="margin-bottom: 50px;">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/CO2behcu9Go?si=Z_zOY8S9ZrbwVcHb" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12" style="margin-bottom: 50px;">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/DkRoHarW4X4?si=nQu-KEZN5-LZh8O2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12" style="margin-bottom: 50px;">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/GOGww2lDytU?si=XTIbU4UwRxmULA0P" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>

    </div>

    <footer>
        <div class="row" style="background-color: #214E41; margin: 0;">
            <div class="col-1"></div>
            <div class="col-10" style="text-align: center;">
                <p style="font-size: 1.5rem; color: #E3EEED; border-bottom: 2px solid #E3EEED;">CalmInside</p>
            </div>
            <div class="col-1"></div>
        </div>
    </footer>
    <?php
        $_SESSION['def_or_aft'] = 0;
        require('modalquestionnaire.php');
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>