<?php 
    session_start();
    setcookie('meditation',0,0,"/");
require('error.php');
$login = $_POST['login'];
$pass = $_POST['pass'];
$error = '';

$conn = mysqli_connect("92.246.214.15:3306", "ais_pashina1855_calminside", "ltTIBfOaNBbbE956PPXXe1ce", "ais_pashina1855_calminside");

if (!$conn)
{
    die("Connection fail". mysqli_connect_error());
}

if (empty($login) || empty($pass))
{
    setMessage('error', "Заполните все поля"); 
    header('Location: auth_page.php'); 
}
else 
{
 
    $result = $conn->query("SELECT password FROM `users` WHERE login = '$login'");

    if ($result->num_rows > 0)
    {
        while ($row = $result->fetch_assoc())
        {
            $newpass = $row["password"];
        }
        if (password_verify($pass, $newpass))
        {
 
            $_SESSION['def_or_aft'] = 1;
            setcookie('login', $login, 0, "/");
           
            header('Location: user_profile.php');
            die();
         
        }
        else
        {
            setMessage('error', "Пароль неверный"); 
            header('Location: auth_page.php'); 
        }
    }
    else
    {
        setMessage('error', "Нет такого пользователя"); 
        header('Location: auth_page.php'); 
    }
}

?>