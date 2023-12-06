<?php
session_start();
require('error.php');
$email = $_POST['email'];
$login = $_POST['login'];
$pass = $_POST['pass'];

$conn = mysqli_connect("92.246.214.15:3306", "ais_pashina1855_calminside", "ltTIBfOaNBbbE956PPXXe1ce", "ais_pashina1855_calminside");

if (!$conn)
{
    die("Connection fail". mysqli_connect_error());
}

if (empty($login) || empty($email) || empty($pass))
{
    setMessage('error', "Заполните все поля"); 
    header('Location: register_page.php'); 
}
else
{
    $result = $conn->query("SELECT * FROM `users` WHERE email = '$email'");

    if ($result->num_rows > 0)
    {
        setMessage('error', "Пользователь с этим email уже существует"); 
        header('Location: register_page.php'); 
    }
    else
    {
        $sql = "INSERT INTO `users` (email, login, password) VALUES ('$email','$login','$pass')";
        
        if ($conn -> query($sql) == TRUE)
        {
            setMessage('error', "Успешная регистрация"); 
            header('Location: auth_page.php'); 
        }
        else
        {
            setMessage('error', "$conn->error"); 
            header('Location: register_page.php'); 
        }
    }
}


?>
