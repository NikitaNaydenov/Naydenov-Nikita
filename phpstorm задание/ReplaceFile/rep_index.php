<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic" rel="stylesheet" />
	<link rel="stylesheet" href="../ReplaceFile/rep_style.css">

	<title>Задание 15.11.2021</title>
</head>

<body>
	< class="wrapper">
		<header class="header">
			<div class="header_container">
				<div class="header_body">
					<a href="../html/index.html" class="header_logo">
						My Header
					</a>
					<div class="header_main"></div>
					<nav class="menu_body">
						<ul class="menu_list">
							<li class="menu_item"><a href="../TableMendeleev/index/table_index.html" class="menu_link">Таблица Менделеева</a></li>
							<li class="menu_item"><a href="../Profile/index/prof_index.html" class="menu_link">Мой профайл</a></li>
							<li class="menu_item"><a href="../ReplaceBackground/rep_index.php" class="menu_link">Смена фона</a></li>
							<li class="menu_item"><a href="../ReplaceFile/rep_index.php" class="menu_link">Rep_background</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<div class="content">
					<?php
						date_default_timezone_set("Asia/Yekaterinburg");
						$hour = (int)date("G");

						if ($hour >=7  && $hour <=16) : ?>
							<img src="../img/morning_forest.jpg">

						<?php elseif ($hour >=17  && $hour <=21) :?>
							<img src="../img/evening_forest.jpg">

						<?php elseif ($hour ==22 || $hour >=1 && $hour<=6) :	?>
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
			<div class="footer_text-main"><a href="../TableMendeleev/index/table_index.html" class="menu_link">Таблица Менделеева</a></li></div>
			<div class="footer_text"><a href="../html/index.html"class="menu_link">Prod by Naydenov Nikita</a></li></div>
			<div class="footer_text-main_2"><a href="../Profile/index/prof_index.html" class="menu_link">Мой профайл</a></li></div>
		</div>
	</footer>
</body>

</html>