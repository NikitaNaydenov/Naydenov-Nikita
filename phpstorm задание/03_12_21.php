<?php
print_r($_POST);
mail( "first.ru", $_POST['login'], $_POST['text'], "second.ru");
echo  $_POST['name']

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>


<form method="post">


	<p><input type="text" name="login"><br>login</p>
	<p><textarea rows="10" cols="20"  name="text"></textarea></p>
		<p>
		<input type="submit" name="отправить">
		</p>
</form>




</body>
</html>
