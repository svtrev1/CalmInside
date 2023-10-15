<?php 
$email = $_POST['email'];
$login = $_POST['login'];
$pass = $_POST['pass'];

$conn = mysqli_connect("localhost", "svtrev", "123321", "CalmInside");

if (!$conn)
{
    die("Connection fail". mysqli_connect_error());
}

if (empty($login) || empty($email) || empty($pass))
{
    echo "Заполните все поля";
}
else
{
    $sql = "INSERT INTO `users` (email, login, password) VALUES ('$email','$login','$pass')";
    
    if ($conn -> query($sql) == TRUE)
    {
        echo "Успешная регистрация!";
    }
    else
    {
        echo "Ошибка: " . $conn->error;
    }
}


?>