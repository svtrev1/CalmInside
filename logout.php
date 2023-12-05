<?php
setcookie('login', '', -1, '/');
setcookie('meditation', '', -1, '/');
header('Location: /CalmInside/main.php');
session_destroy();
die();
?>