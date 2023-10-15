<?php 
$login = $_POST['login'];
$pass = $_POST['pass'];

$conn = mysqli_connect("localhost", "svtrev", "123321", "CalmInside");

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