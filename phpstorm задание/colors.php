<?
session_start();
if (!isset($_SESSION['color'])) {
    $_SESSION['color'] = $_POST['colors'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link
	href="https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic"
	rel="stylesheet" />
	<link rel="stylesheet" href="css/colors_style.css">
	<title>Colors</title>
</head>
<?php require_once 'inc/header.php' ?>
<body style="background-color: <? echo $_SESSION['color']; ?>">
<div class="wrapper">
        <div class="content">
            <div class="container">
                <p>Выберите цвет фона</p>
                <form action="colors.php" method="post">
                    <select name="colors">
                        <option>Red</option>
                        <option>Blue</option>
                        <option>Green</option>
                        <option>Orange</option>
                    </select>
                    <input type="submit" value="Применить">
                </form>
            </div> 
        </div>
</div>  
</body>
<?php require_once 'inc/footer.php' ?>
</html>
