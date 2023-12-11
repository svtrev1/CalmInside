<?php

$link = mysqli_connect('92.246.214.15:3306', 'ais_pashina1855_calminside', 'ltTIBfOaNBbbE956PPXXe1ce', 'ais_pashina1855_calminside');

if (!$link)
{
    die("Connection fail". mysqli_connect_error());
}

$tension = $_GET['tension'];
$attentiveness = $_GET['attentiveness'];
$cheerfulness = $_GET['cheerfulness'];
$comment = $_GET['comment'];
$date = date('Y-m-d H:i:s');
$week = date("w", mktime(0,0,0,date("m"),date("d"),date("Y")));
if ($week == 0)
{
    $week = 7;
}
$id = -1;
$radio = $_GET['radio'];
$def_or_aft = $_COOKIE['meditation'];
setcookie('d',$def_or_aft,0,"/");
// $def_or_aft = $_GET['state'];

$sql = mysqli_query($link, "SELECT * FROM `users`");
while ($result = mysqli_fetch_array($sql)) {
    if(strcmp($result['login'], $_COOKIE['login']) == 0){
        $id = $result['id'];
    }
}


if($id <> -1){
    $sql = "INSERT INTO `questionnaire` (id_user, data,  mood, tension, attentiveness, cheerfulness, comment, bef_or_aft, day_week) VALUES ($id, '$date', '$radio', '$tension', '$attentiveness', '$cheerfulness', '$comment', '$def_or_aft', '$week')";
    if ($link -> query($sql) == TRUE)
    {
        if (($_COOKIE['meditation']) == 1)
        {
            setcookie('meditation',0,0,"/");
         
            header('Location: user_profile.php');
        }
        else
        {
            setcookie('meditation',1,0,"/");
        
            header('Location: music.php');
        }
    }
    else
    {
        echo "Ошибка: " . $link->error;
    }
}



?>