<?
if (isset($_POST['fact'])) {
   $value = 'Недавно Вы были на сайте FACT';
   $url = 'https://fact.digital/';
   setcookie('recent', $value, time() + 3600 * 24 * 7);
   header ("Location: $url");
}
if (isset($_POST['bitrix'])) {
   $value = 'Недавно Вы были на сайте BITRIX';
   $url = 'https://www.1c-bitrix.ru/';
    setcookie('recent', $value, time() + 3600 * 24 * 7);
   header ("Location: $url");
}
?>
<?php require_once 'inc/header.php' ?>
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

	<title>Authorization</title>
</head>
<?php require_once 'inc/header.php' ?>
<body>
<div class="content">
			<div class="content_container">
				<?php
					$filename = "users.txt";
					define("FIRST",1);
					if(empty($_POST))
					{
						?>
						<form	form action="" method="post">
							<label>Логин</label>
							<input type="text" name="name" placeholder="Введите свой логин">
							<label>Пароль</label>
							<input type="password" name="pass" placeholder="Введите свой пароль">
							<input type="submit" value="Войти"  class="submit">
							<p>
								У вас нет аккаунта? - <a href = "/register.php">зарегистрируйтесь</a>
							</p>	
						</form>		
						<?php
					}
					else
					{
						$arr = file($filename);
						$i = 0;
						$temp = array();
						foreach($arr as $line)
						{
							$data = explode("--",$line);
							$temp['name'][$i]    =$data[0];
							$temp['password'][$i] = $data[1];
							$i++;
						}
						if(!in_array($_POST['name'],$temp['name']))
						{
							exit("<p>Такого пользователя не существует</p> <p><a href='authorization.php'>Назад</a></p>");
						}
						$index = array_search($_POST['name'],$temp['name']);
						if(md5($_POST['pass']) != $temp['password'][$index])
						{
							exit("<p>Введен неверный пароль</p> <p><a href='authorization.php'>Назад</a></p>");
						}
						?>
						<form method="post">

							<p><img src="img/icon_me.png" alt="404 user" width="100"></p>
							<h1><?= $_POST['name']; ?></h1>
							<p>Добро пожаловать!</p>
						</form>
						<? echo '<p style="font-size: 20px;">' . $_COOKIE['recent'] . '</p>';?>
						<form action="authorization.php" method="post">
							<p>
								<button type="submit" value="FACT" name="fact" class="custom_button">
									<img src="img/icon_me.png" style="border-radius: 0px">
								</button>
								<button type="submit" value="BITRIX" name="bitrix" class="custom_button">
									<img src="img/icon_me.png" style="border-radius: 0px">
								</button>
							</p>
						</form>
						<?php
					}
					?>
			</div>				
		
		
	</div>
</body>
<?php require_once 'inc/footer.php' ?>
</html>