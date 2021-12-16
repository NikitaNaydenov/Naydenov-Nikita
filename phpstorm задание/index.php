<?php
$hostname = 'localhost';
$username = 'Nikita';
$password = '1245';
$dbname = 'NewCity';

$dbconnect = mysqli_connect($hostname, $username, $password) or die ("-");

mysqli_set_charset($dbconnect, 'utf8');
mysqli_query($dbconnect, "CREATE DATABASE $dbname");
mysqli_select_db($dbconnect, $dbname);
//mysqli_query($dbconnect, "CREATE TABLE people (ID_person int NOT NULL  AUTO_INCREMENT, Name varchar (35), SURNAME varchar (35), Age int, PRIMARY KEY (ID_person))");
//mysqli_query($dbconnect, "INSERT INTO people (ID_person, Name, SURNAME, Age) VALUES (null, 'Mark', 'Wahlberg', 50)" );
//mysqli_query($dbconnect, "INSERT INTO people (ID_person, Name, SURNAME, Age) VALUES (null, 'Tiger' , 'Woods', 45)" );
//mysqli_query($dbconnect, "INSERT INTO people (ID_person, Name, SURNAME, Age) VALUES (null, 'Sidney' , 'Crosby', 34)" );
//
//
//
//mysqli_query($dbconnect, "CREATE TABLE hobbies (ID_hobbies INT NOT NULL AUTO_INCREMENT , NAME varchar (35), Description varchar (200), PRIMARY KEY (ID_hobbies))");
//mysqli_query($dbconnect, "INSERT INTO hobbies (ID_hobbies, Name, Description) VALUES (null, 'Фильмы', 'Сниматься в фильмах')" );
//mysqli_query($dbconnect, "INSERT INTO hobbies (ID_hobbies, Name, Description) VALUES (null, 'Гольф', 'Игра в гольф')" );
//mysqli_query($dbconnect, "INSERT INTO hobbies (ID_hobbies, Name, Description) VALUES (null, 'Хоккей', 'Игра в хоккей')" );


mysqli_query($dbconnect, "CREATE TABLE people_hobbies (ID_record int NOT NULL AUTO_INCREMENT, ID_person INT, ID_hobbies INT, PRIMARY KEY (ID_record), FOREIGN KEY
                            (ID_person) REFERENCES people (ID_person), FOREIGN KEY (ID_hobbies) REFERENCES hobbies (ID_hobbies))");
//mysqli_query($dbconnect, "INSERT INTO people_hobbies (ID_record, ID_person, ID_hobbies)
//VALUES (NULL, '1', '1'), (NULL, '2', '2'), (NULL, '3', '4'), (NULL, '1', '3' ) ");

//mysqli_query($dbconnect, "INSERT INTO People_hobbies (ID_record, ID_person, ID_hobbies) VALUES (null, '1', '1'), (null, '2', '2'), (null, '3', '1'), (null, '2', '1')");

$select= mysqli_query($dbconnect, "SELECT people.name, hobbies.name FROM people JOIN people_hobbies ON people.id_person = people_hobbies.id_person JOIN
hobbies ON people_hobbies.id_hobbies = hobbies.id_hobbies WHERE people.name = 'Tiger'");
$arr_select = mysqli_fetch_all($select,MYSQLI_ASSOC);
echo '<pre>';
var_dump($arr_select);
echo '</pre>';







//$dbconnect = mysqli_connect($hostname, $username, $password, $dbname);
//mysqli_set_charset($dbconnect, 'utf8');
//mysqli_query($dbconnect, "INSERT INTO `person`(`ID_person`, `Name`, `Age`) VALUES (NULL,'Sam','20')");
//$select = mysqli_query($dbconnect, "SELECT * FROM Person");
//$arr_select = mysqli_fetch_all($select, MYSQLI_ASSOC);
//echo '<pre>';
//print_r($arr_select);
//echo '</pre>';
//$select = mysqli_query($dbconnect, "SELECT name FROM person ");
//$arr_select = mysqli_fetch_all($select, MYSQLI_ASSOC);
//echo '<pre>';
//print_r($arr_select);
//echo '</pre>';
//?>

<!--<form action="" method="post" style="padding: 20px; background: #f1f165">-->
<!--	<label>Имя</label>-->
<!--	<input type="text" name="name" placeholder="">-->
<!--	<label>Возраст</label>-->
<!--	<input type="text" name="age" placeholder="">-->
<!--	<input type="submit" value="Отправить"  class="submit">-->
<!--</form>-->
<?//
//if (isset($_POST["Name"])) {
//	$insert = mysqli_query($dbconnect, "INSERT INTO `person`(`ID_person`, `Name`, `Age`) VALUES (NULL, '{$_POST['Name']}','{$_POST['Age']}')");
//
//}
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
	<link rel="stylesheet" href="css/style.css">

	<title>Задание 15.11.2021</title>
</head>
<?php require_once 'inc/header.php' ?>
<body>
	<div class="wrapper">


		<div class="content">
			<div class="container">
				
			</div>
		</div>

		<div class="block">
			<div class="block_row">
				<div class="block_column">
					<div class="flex_items">
						<div class="block_column-one"></div>
						<div class="block_column-figcaption">
							<figcaption>Петергоф</figcaption>
						</div>
					</div>
				</div>
				<div class="block_column">
					<div class="flex_items">
						<div class="block_column-two"></div>
						<div class="block_column-figcaption">
							<figcaption>Петропавловская крепость</figcaption>
						</div>
					</div>
				</div>
				<div class="block_column">
					<div class="flex_items">
						<div class="block_column-three"></div>
						<div class="block_column-figcaption">
							<figcaption>Смольный</figcaption>
						</div>
					</div>
				</div>
				<div class="block_column">
					<div class="flex_items">
						<div class="block_column-four"></div>
						<div class="block_column-figcaption">
							<figcaption>Эрмитаж</figcaption>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>




	</div>
</body>
<?php require_once 'inc/footer.php' ?>
</html>