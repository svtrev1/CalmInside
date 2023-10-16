<?php 
$login = $_POST['login'];
$pass = $_POST['pass'];

$conn = mysqli_connect("92.246.214.15:3306", "ais_pashina1855_calminside", "ltTIBfOaNBbbE956PPXXe1ce", "ais_pashina1855_calminside");

if (!$conn)
{
    die("Connection fail". mysqli_connect_error());
}

if (empty($login) || empty($pass))
{
    echo "Заполните все поля";
}
else 
{
    $result = $conn->query("SELECT * FROM `users` WHERE login = '$login' AND password = '$pass'");

    if ($result->num_rows > 0)
    {
        while ($row = $result->fetch_assoc())
        {
            echo "Добро пожаловать" . $row['login'];
        }
    }
    else
    {
        echo "Нет такого пользователя" . $row['login'] . $row['pass'];
    }
}

?>