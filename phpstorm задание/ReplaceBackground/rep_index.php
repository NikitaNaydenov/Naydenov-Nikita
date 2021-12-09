<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic" rel="stylesheet" />
	<link rel="stylesheet" href="../ReplaceBackground/rep_style.css">

	<title>Задание 15.11.2021</title>
</head>

<body>
	<div class="wrapper">
		<header class="header">
			<div class="header_container">
				<div class="header_body">
					<a href="../html/index.html" class="header_logo">
						My Header
					</a>
					<div class="header_main"></div>
					<nav class="menu_body">
						<ul class="menu_list">
							<li class="menu_item"><a href="../Таблица%20менделеева/index/index.html" class="menu_link">Таблица Менделеева</a></li>
							<li class="menu_item"><a href="../Профайл/index/index.html" class="menu_link">Мой профайл</a></li>
							<li class="menu_item"><a href="../ReplaceBackground/rep_index.php" class="menu_link">Смена фона</a></li>
							<li class="menu_item"><a href="" class="menu_link"></a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<div class="content">
					<?php
						date_default_timezone_set("Asia/Yekaterinburg");
						$hour = (int)date("G");
						$hour = $hour -1;

						if ($hour >=7  && $hour <=16) : ?>
							<img src="../img/morning_forest.jpg">

						<?php elseif ($hour >=17  && $hour <=21) :?>
							<img src="../img/evening_forest.jpg">

						<?php elseif ($hour >=22 || $hour >=1 && $hour<=6) :	?>
							<img src="../img/night_forest.jpg">

					<?php endif; ?>

			<div class="content_container">
				<div class="content_block">
					<?php
					date_default_timezone_set("Asia/Yekaterinburg");
					echo date('d-m-Y G:i:s A');
					?>
				</div>
			</div>
		</div>
	</div>
	<footer class="footer">
		<div class="footer_block_row">
			<div class="footer_text-main">Таблица Менделеева</div>
			<div class="footer_text">Prod by Naydenov Nikita</div>
			<div class="footer_text-main_2">Мой профайл</div>
		</div>
	</footer>
	</div>
</body>

</html>