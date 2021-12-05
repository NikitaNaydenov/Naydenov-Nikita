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

	<title>Задание 15.11.2021</title>
</head>
<?php require_once 'inc/header.php' ?>
<body>
			<div class="content">
					<?php
						date_default_timezone_set("Asia/Yekaterinburg");
						function times($hour){
						if ($hour >=7  && $hour <=16) { 
							echo '<img src="img/morning_forest.jpg">';

						} 	elseif ($hour >=17  && $hour <=21) {
							echo '<img src="img/evening_forest.jpg">';

						} 	elseif ($hour ==22 || $hour >=1 && $hour<=6) {
							echo '<img src="img/night_forest.jpg">';
						}
						return $hour;
                        }
                    $hour = (int)date("G");
					?>
				<div class="content_container">
					<div class="content_block">
						<?php
						date_default_timezone_set("Asia/Yekaterinburg");
						echo date('d-m-Y G:i:s A');
						?>
					</div>
						<form action="rep_index.php" method="post">
							<div class="block_button">
								<div class="button_morning">Утренняя тема</div>
								<div class="button_evening">Вечерняя тема</div>
								<div class="button_night">Ночная тема</div>
							</div>
						</form>	
					
				</div>
					
			</div>
		
	</div>
</body>
<?php require_once 'inc/footer.php' ?>
</html>