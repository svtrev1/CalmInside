<?php 
    setcookie('LK', 'yes', 0, "/");
    require('header.php');
    if (empty($_COOKIE['login']))
    {
        header('Location: /CalmInside/main.php');
        die();
    }
    $conn = mysqli_connect("92.246.214.15:3306", "ais_pashina1855_calminside", "ltTIBfOaNBbbE956PPXXe1ce", "ais_pashina1855_calminside");
    $login = $_COOKIE['login'];
            
    $id = $conn->query("SELECT id FROM `users` WHERE login = '$login'");
    if ($id->num_rows > 0)
    {
        while ($row = $id->fetch_assoc())
        {
            $newid = $row["id"];
        }
    }
    $date = date('Y-m-d H:i:s');
    $week = date("w", mktime(0,0,0,date("m"),date("d"),date("Y")));
    if ($week == 0)
    {
        $week = 7;
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/main.css">
    <link rel="stylesheet" href="assets/round.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet" />
    
    <link rel="stylesheet" href="assets/modalquestionaire.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    
    <title>Личный кабинет</title>
</head>
<body>
<div class="container-fluid first" style="padding-left: 0; padding-right: 0;">

    <h1 style="text-align: center; color: darkslategray; padding-top: 50px; ">
    Привет, <?=$_COOKIE['login']?>
    </h1>
        
    <div class="container-fluid">
        <div class="row">
            <div class="col-6" style="margin-top: 8%;">
                <h3 style="text-align: center; margin-bottom: 30px;">Уровень осознанности сегодня</h3>
                <div class="container" style="display: flex; justify-content: center;">
                    <div class="circular-progress">
                        <div class="value-container">0%</div>
                    </div>
                </div>
            </div>
            <div class="col-1"></div>
            <div class="col-4" style="margin-top: 8%">
                <h3 style="text-align: center; margin-bottom: 30px;">Твое настроение после медитаций на этой неделе</h3>
                <div class="row" style="text-align: center; background-color: aliceblue; border: 3px; border-color: darkslategrey; border-radius: 20px;">
                    <div class="col" >
                        <p style="margin-top: 8px;">ПН</p>
                        <?php
                            require('table_smiles.php');
                        ?>
                    </div>
                    <div class="col" >
                    <p style="margin-top: 8px;">ВТ</p>
                        <?php
                            require('table_smiles.php');
                        ?>
                    </div>
                    <div class="col" >
                    <p style="margin-top: 8px;">СР</p>
                        <?php
                            require('table_smiles.php');
                        ?>
                    </div>
                    <div class="col">
                    <p style="margin-top: 8px;">ЧТ</p>
                        <?php
                           require('table_smiles.php');
                        ?>
                    </div>
                    <div class="col">
                    <p style="margin-top: 8px;">СБ</p>
                        <?php
                            require('table_smiles.php');
                        ?>
                    </div>
                    <div class="col" >
                    <p style="margin-top: 8px;">ВС</p>
                        <?php
                            require('table_smiles.php');
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-1"></div>
        </div>

    </div>
        <?php
            session_start();
            
            $_SESSION['def_or_aft'] = 0;
            
            $date = date('Y-m-d');
            $result = $conn->query("SELECT tension, attentiveness, cheerfulness FROM `questionnaire` WHERE id_user = '$newid' AND data = '$date' AND bef_or_aft='1'");
            if ($result->num_rows > 0)
            {
                while ($row1 = $result->fetch_assoc())
                {
                    $result1 = $row1["tension"];
                    $result2 = $row1["attentiveness"];
                    $result3 = $row1["cheerfulness"];
        
                }
            }
            $value = ceil(($result1 + $result2 + $result3) / 3);
          
            setcookie('result', $value, 0, "/");
            setcookie('result1', $result1, 0, "/");
            setcookie('result2', $result2, 0, "/");
            setcookie('result3', $result3, 0, "/");
            require('modalquestionnaire.php');
        ?>
    </div>
</div>
<!-- <div style="margin: 30px; ">
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
<script src="grath.js"></script> -->

<script type="text/javascript">
    let progressBar = document.querySelector(".circular-progress");
    let valueContainer = document.querySelector(".value-container");

    let progressValue = 0;
    let progressEndValue = <?php echo $value; ?>;
    let temp = 0;
    let tempValue = 0;
    let c =0;
    if (progressEndValue >= 0 && progressEndValue <=100)
    {
        temp = progressEndValue;
    }
    else if (progressEndValue < 0)
    {
        c = 1;
        temp = progressEndValue;
        progressEndValue = Math.abs(progressEndValue);
    }
    else
    {
        progressEndValue = 100;
        temp = progressEndValue;

    }
    let speed = 50;

    let progress = setInterval(() => {
    if (temp < 0)
    {
        progressValue++;
        tempValue--;
    }
    if (temp == 0)
    {

    }
    if (temp > 0)
    {   
        progressValue++;
        tempValue++;
    }
    valueContainer.textContent = `${tempValue}%`;
    if (c == 0)
    {
        progressBar.style.background = `conic-gradient(
        #08a4a7 ${progressValue * 3.6}deg,
        #cadcff ${progressValue * 3.6}deg)`;
    }
    else 
    {
        progressBar.style.background = `conic-gradient(
        #ff0000 ${progressValue * 3.6}deg,
        #cadcff ${progressValue * 3.6}deg)`;
    }
    if (progressValue == progressEndValue) {
        clearInterval(progress);
    }
    }, speed);
</script>
</body>
</html>