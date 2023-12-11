<?php
$conn = mysqli_connect("92.246.214.15:3306", "ais_pashina1855_calminside", "ltTIBfOaNBbbE956PPXXe1ce", "ais_pashina1855_calminside");

if (!$conn)
{
    die("Connection fail". mysqli_connect_error());
}

$a = $_COOKIE['login'];
$result = $conn->query("SELECT * FROM `users` WHERE login = '$a'");
$row = $result->fetch_assoc();
$id = $row['id'];
$arr = array();
$i = 0;
$result2 = $conn->query("SELECT * FROM `questionnaire` WHERE id_user = '$id'");
if($result2->num_rows > 0){
    while($row = $result2->fetch_assoc()){
        $arr[] = $row;
    }
}
 echo json_encode($arr);
?>