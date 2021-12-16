<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link
		href="https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic"
		rel="stylesheet" />
	<link rel="stylesheet" href="css/authorization_style.css">

	<title>Задание 15.11.2021</title>
</head>
<?php require_once 'inc/header.php' ?>
<body>
		<div class="content">
			<div class="content_container">
				<form action="Registration/signup.php" method="post">
					<p>РЕГИСТРАЦИЯ</p>
						<label>Логин</label>
						<input type="text" name="name" placeholder="Введите свой логин">
						<label>Пароль</label>
						<input type="password" name="pass" placeholder="Введите пароль">
						<input type="submit" value="Зарегистрироваться" class="submit">
						<?php
						$_POST['name'] = trim($_POST['name']);
						$_POST['pass'] = trim($_POST['pass']);
						if(empty($_POST['name'])) exit();
						if(empty($_POST['name'])) exit('<p>Поле "Логин" не заполнено<p>');
						if(empty($_POST['pass'])) exit('<p>Поле "Пароль" не заполнено<p>');
						$filename = "users.txt";
						$arr = file($filename);
						foreach($arr as $line)
						{
							$data = explode("--",$line);
							$temp[] = $data[0];
						}
						if(in_array($_POST['name'], $temp))
						{
							exit("<p>Пользователь с таким именем уже зарегистрирован<p>");
						}
						$fd = fopen($filename, "a");
						if(!$fd) exit("Ошибка при открытии файла данных");
						$str = $_POST['name']."--".
							md5($_POST['pass'])."--"."\r\n";
						fwrite($fd,$str);
						fclose($fd);
               ?>	
				</form>					
			</div>				
		</div>
</body>
<?php require_once 'inc/footer.php' ?>
</html>