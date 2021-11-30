<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic"
        rel="stylesheet" />
    <link rel="stylesheet" href="../mass_css/style.css">
    <title>Задание 15.11.2021</title>
</head>

<body>
	<div class="wrapper">
		<?
		$arr8 = [];
		$n = 10;
		for ($i=0; $i<=$n; $i++) {
			$arr8[$i+1] = mt_rand(0, 100);

		if ($i%2==0){
			echo"<b>$arr8[$i]</b>". '<br>'; }
			else echo $arr8[$i]. '<br>';
		}

		?>

		<?
		$brands = array(
			'Японский автопром'=>array('Acura', 'Nissan', 'Mitsubishi','Toyota'),
			'Немецкий автопром'=>array('Audi', 'BMW', 'Mercedes','Volkswagen' ),

		);
		echo "<h2> Марка автомобиля начинающаяся с буквы А </h2>";

			foreach ($brands as $key => $car)
				foreach ($car as $auto){
			if (mb_substr($auto,0,1)==="A")
				print_r ($auto. "<br>") ;
			else
				print_r ("<br>");
		}
		?>


		<?
		$arr10 = array (
			"Массив 1"=>array('8','4','6','7','8','3'),
			"Массив 2"=>array('39','12','22','26','78','65'),
		);
		echo "<h2> Вывести общее количество массива </h2>";

		$num = 0;
		foreach($arr10 as $key) $num += count($key);
		echo $num  . ' ';
		echo "<h2> Вывести общее количество массива с функцией COUNT_RECURSIVE </h2>";
		echo '<pre>';
		echo (count($arr10,COUNT_RECURSIVE)) . ' ';
		echo '<pre>';

		echo "<h2> Вывести отдельное количество элементов массива </h2>";
		foreach ($arr10 as $key=>$value){
			echo '<pre>';
			echo (count($value)). ' ';
			}


		?>
	</div>
</body>

</html>
