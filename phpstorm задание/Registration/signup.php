<?php
    session_start();
    require_once 'connect.php';

$name = $_POST['name'];
$pass = $_POST['pass'];

$pass = md5($pass);

mysqli_query($connect, "INSERT INTO `users` (`id`, `Name`, `Pass`) VALUES (NULL, '$name', '$pass')");
    $_SESSION['message'] = 'Регастрация прошла успешно!';
    header('Location: ../authorization.php');



