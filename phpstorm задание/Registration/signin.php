<?php
session_start();
require_once 'connect.php';

$name = $_POST['name'];
$pass = md5($_POST['pass']);

$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `name` = '$name' AND `pass` = '$pass'");
//Считаем сколько строк мы нашли в строке name и pass
if (mysqli_num_rows($check_user) > 0) {
} else {
    $_SESSION['message'] = 'Неверный логин или пароль';
    header('Location: ../authorization.php');
}
if (mysqli_num_rows($check_user) > 1) {
} else {
    $_SESSION['message'] = 'Вы авторизовались!';
    header('Location: ../authorization.php');
}

