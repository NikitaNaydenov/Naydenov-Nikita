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
	<link rel="stylesheet" href="css/prof_style.css">


	<title>Задание 15.11.2021</title>
</head>
<?php require_once 'inc/header.php'; ?>
<? require_once 'inc/functions.php' ?>

<body>
	<div class="wrapper">

		<div class="content">

			<div class="container">
				<div class="sidebar">
						<!-- <div class="sidebar_item"><img src="img/pict.jpg" alt="Подпись к картинке"></div> -->
						<div class="sidebar_second"></div>
						<div class = "sidebar_third"></div>
				</div>
				<div class="container_block">
					<div class="container_block_column-one">
						<div class="container_item"><img src="img/icon_me.png" alt="Подпись к картинке">
							<? $str=' 
<h1>Обо мне: </h1>
Окончил университет "Мгту им Носова", имею степень магистра 
по специальности "информационные технологии в образовании"./ 
Работаю на компанию, занимаюсь всем, от рекламы, до сайта(что-то на подобии контент менеджера) 
довольно хорошо знаю CMS Wordpress, на ней и работаю. Самоучка, никаких курсов ранее не посещал, 
но всегда была интересна верстка, по этому и занимался. 
Из увлечений можно выделить спорт и компьютер, если процесс увлекает(например верстка), 
могу сидеть очень долго и решать/исправлять ошибки, для достижения цели.';

$arr = explode("/ " ,$str);
echo '<span style="color: #f1f165">' . $arr[0] . '</span>' . ' ';
echo $arr[1];
?>


						</div>
					</div>
					<div class="container_block_column-two">
						<div class="container_item"><img src="img/icon_oz.png" alt="Подпись к картинке">
<? $str2=' 
<h1>Отзыв на школу Факт:</h1> 
Организация на хорошем уровне, все вовремя, понравилось, что дали напутственные слова, все объяснили, 
все очень вежливо и уважительно к «новобранцам». 
Наш тьютор (Регина) очень приятная девушка, вежливая, тактичная, все очень доходчиво объясняет, 
на лекции не было скучно, не смотря на 3+ часа. Минусов на данном этапе нет, только положительные эмоции. 
Уроки проходят очень увлекательно! 
Очень надеюсь что и дальше все пройдет на такой же хорошей ноте. Так держать - школа Факт!';
//$arr2 = explode(" " ,$str2);
for ($N = 0; $N < 200; $N++) {
if ($N%  2 == 0) {
echo '<span style="color: #f1f165">' . str_in_arr($str2)[$N] . '</span>' . ' ';
}
else
echo str_in_arr($str2)[$N]  . ' ';
}

?>


<div align="center">
<?$arr3 = array_merge(str_in_arr($str),str_in_arr($str2));
$str3 = implode(' ', $arr3);
echo 'Общеее количество слов на странице:' . ' '. count($arr3) .  '<br>';


echo 'Количество гласных букв: '. vowels($str3) .'<br>';

?>
    <?
    $today = time();
    $bday = strtotime("1995-08-18");
    ?>
    <?
    echo 'Дата рождения: 18.08.1995 ' . 'Текущая дата: ' . date('d.m.Y') . '<br>' ;
    echo 'Количество дней: ' . floor(days($today,$bday) / (60 * 60 * 24));
    ?>
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

