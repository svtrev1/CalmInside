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
$id = -1;
$radio = $_GET['radio'];
$def_or_aft = $_GET['state'];

$sql = mysqli_query($link, "SELECT * FROM `users`");
while ($result = mysqli_fetch_array($sql)) {
    if(strcmp($result['login'], $_COOKIE['login']) == 0){
        $id = $result['id'];
    }
}


if($id <> -1){
    $sql = "INSERT INTO `questionnaire` (id_user, data,  mood, tension, attentiveness, cheerfulness, comment, bef_or_aft) VALUES ($id, '$date', '$radio', '$tension', '$attentiveness', '$cheerfulness', '$comment', '$def_or_aft')";
    if ($link -> query($sql) == TRUE)
    {
        echo "Анкета заполнена успешно!";
    }
    else
    {
        echo "Ошибка: " . $link->error;
    }
}



?>