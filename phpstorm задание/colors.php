<?
session_start();
if (!isset($_SESSION['color'])) {
$_SESSION['color'] = $_POST['colors'];
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
	<link rel="stylesheet" href="css/rep_style.css">
        
    <title>Color</title>
</head>
<body style="background-color: <? echo $_SESSION['color']; ?>">
    <div class="main_content" align="center">
        <p>Цвет фона</p>
        <form action="colors.php" method="post">
            <select name="colors">
                <option>Blue</option>
                <option>Blue</option>
                <option>Green</option>
                <option>Orange</option>
            </select>
            <input type="submit" value="Применить">
        </form>
    </div>
</body>
<?php require_once 'inc/footer.php' ?>
</html>
