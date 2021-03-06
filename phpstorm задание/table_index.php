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
	<link rel="stylesheet" href="css/table_style.css">


	<title>Задание 15.11.2021</title>
</head>

<?php require_once 'inc/header.php' ?>
<body>
	<div class="wrapper">
		<!--		<caption align="top">Таблица Менделеева</caption>-->
		<div class="wrapper_container">
			<table style="border: 1px solid black">
				<div class="wrapper_content">
					<tr>
						<td rowspan="2">Периоды</td>
						<td rowspan="2">Ряды</td>
						<td colspan="4">Группа элементов</td>
					</tr>
				</div>
				<div class="wrapper_content_2">
					<tr>
						<td>I</td>
						<td>II</td>
						<td>III</td>
						<td>IV</td>
					</tr>

				</div>
				<div class="wrapper_content_3">
					<tr>
						<td>I</td>
						<td>1</td>
						<td>
							<table class="table1" style="background:green" ;>

								<tr>
									<th>1</th>
									<td class="boredr0" rowspan="3" style="font-size: 20px;">H</td>
									<td class="boredr0">Водород</td>
								</tr>
								<tr>
									<td class="boredr0" rowspan="2"></td>
									<td class="boredr0">1s<sup>1</sup><sup></sup></td>
								</tr>
								<tr>
									<td class="boredr0">1,008</td>
								</tr>
							</table>
						</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</div>
				<tr>
					<td>II</td>
					<td>2</td>

					<td>
						<table class="table1">
							<tr>
								<th>3</th>
								<td class="boredr0" rowspan="3" style="font-size: 20px;">Li</td>
								<td class="boredr0">Литий</td>
							</tr>
							<tr>
								<td class="boredr0" rowspan="2"></td>
								<td class="boredr0">2s<sup>1</sup></td>
							</tr>
							<tr>
								<td class="boredr0">6,941</td>
							</tr>
						</table>
					</td>

					<td>
						<table class="table1" style="background:#f1f165">

							<tr>
								<th>4</th>
								<td class="boredr0" rowspan="3" style="font-size: 20px;">Be</td>
								<td class="boredr0">Берилий</td>
							</tr>
							<tr>
								<td class="boredr0" rowspan="2"></td>
								<td class="boredr0">2s<sup>2</sup></td>
							</tr>
							<tr>
								<td class="boredr0">9,0122</td>
							</tr>
						</table>
					</td>
					<td>
						<table class="table1" style="background: #9EE5D4">
							<tr>
								<th>5</th>
								<td class="boredr0" rowspan="3" style="font-size: 20px;">B</td>
								<td class="boredr0">Бор</td>
							</tr>
							<tr>
								<td class="boredr0" rowspan="2"></td>
								<td class="boredr0">2s<sup>2</sup>2p<sup>1</sup></td>
							</tr>
							<tr>
								<td class="boredr0">10,81</td>
							</tr>
						</table>
					</td>
					<td>
						<table class="table1" style="background: #8CED8C">

							<tr>
								<th>6</th>
								<td class="boredr0" rowspan="3" style="font-size: 20px;">Cr</td>
								<td class="boredr0">Углерод</td>
							</tr>
							<tr>
								<td class="boredr0" rowspan="2"></td>
								<td class="boredr0">2s<sup>2</sup>2p<sup>2</sup></td>
							</tr>
							<tr>
								<td class="boredr0">12,011</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td>III</td>
					<td>3</td>
					<td>
						<table class="table1">

							<tr>
								<th>11</th>
								<td class="boredr0" rowspan="3" style="font-size: 20px;">Na</td>
								<td class="boredr0">Натрий</td>
							</tr>
							<tr>
								<td class="boredr0" rowspan="2"></td>
								<td class="boredr0">3s<sup>1</sup></td>
							</tr>
							<tr>
								<td class="boredr0">22,9898</td>
							</tr>
						</table>
					</td>
					<td>
						<table class="table1" style="background: #f1f165">

							<tr>
								<th>12</th>
								<td class="boredr0" rowspan="3" style="font-size: 20px;">Mg</td>
								<td class="boredr0">Магний</td>
							</tr>
							<tr>
								<td class="boredr0" rowspan="2"></td>
								<td class="boredr0">3s<sup>2</sup></td>
							</tr>
							<tr>
								<td class="boredr0">24,305</td>
							</tr>
						</table>
					</td>
					<td>
						<table class="table1" style="background: #ACDEFC">

							<tr>
								<th>13</th>
								<td class="boredr0" rowspan="3" style="font-size: 20px;">Al</td>
								<td class="boredr0">Алюминий</td>
							</tr>
							<tr>
								<td class="boredr0" rowspan="2"></td>
								<td class="boredr0">3s<sup>2</sup>3p<sup>1</sup></td>
							</tr>
							<tr>
								<td class="boredr0">26,9815</td>
							</tr>
						</table>
					</td>
					<td>
						<table class="table1" style="background: #9EE5D4">

							<tr>
								<th>14</th>
								<td class="boredr0" rowspan="3" style="font-size: 20px;">Si</td>
								<td class="boredr0">Кремний</td>
							</tr>
							<tr>
								<td class="boredr0" rowspan="2"></td>
								<td class="boredr0">3s<sup>2</sup>3p<sup>2</sup></td>
							</tr>
							<tr>
								<td class="boredr0">28,0855</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td>IV</td>
					<td>4</td>
					<td>
						<table class="table1">

							<tr>
								<th>19</th>
								<td class="boredr0" rowspan="3" style="font-size: 20px;">K</td>
								<td class="boredr0">Калий</td>
							</tr>
							<tr>
								<td class="boredr0" rowspan="2"></td>
								<td class="boredr0">4s<sup>1</sup></td>
							</tr>
							<tr>
								<td class="boredr0">39,0983</td>
							</tr>
						</table>
					</td>
					<td>
						<table class="table1" style="background: #f1f165">

							<tr>
								<th>20</th>
								<td class="boredr0" rowspan="3" style="font-size: 20px;">Ca</td>
								<td class="boredr0">Кальций</td>
							</tr>
							<tr>
								<td class="boredr0" rowspan="2"></td>
								<td class="boredr0">4s<sup>2</sup></td>
							</tr>
							<tr>
								<td class="boredr0">40,08</td>
							</tr>
						</table>
					</td>
					<td>
						<table class="table1" style="background: #fac5b7">

							<tr>
								<th>21</th>
								<td class="boredr0" rowspan="3" style="font-size: 20px;">Sc</td>
								<td class="boredr0">Скандий</td>
							</tr>
							<tr>
								<td class="boredr0" rowspan="2"></td>
								<td class="boredr0">3d<sup>1</sup>4s<sup>2</sup></td>
							</tr>
							<tr>
								<td class="boredr0">44,9559</td>
							</tr>
						</table>
					</td>
					<td>
						<table class="table1" style="background: #fac5b7">

							<tr>
								<th>22</th>
								<td class="boredr0" rowspan="3" style="font-size: 20px;">Ti</td>
								<td class="boredr0">Титан</td>
							</tr>
							<tr>
								<td class="boredr0" rowspan="2"></td>
								<td class="boredr0">3d<sup>2</sup>4s<sup>2</sup></td>
							</tr>
							<tr>
								<td class="boredr0">47,88</td>
							</tr>
						</table>
					</td>
				</tr>

			</table>
		</div>

		</div>
	</div>

</body>
<?php require_once 'inc/footer.php' ?>
</html>

