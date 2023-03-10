<?php
$services = ['Ремонт телефонов', 'Ремонт компьютеров', 'Ремонт ноутбуков', 'Ремонт телевизоров', 'Ремонт планшетов', 'Продажа комплектующих'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<!-- YOUR FAVICO -->
	<link rel="icon" href="">
	<link rel="stylesheet" type="text/css" href="/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>APS Service</title>

	<!-- Latest compiled and minified CSS -->
	<!-- BOOTSTRAP CDN CSS FILE LINK -->

	<script src="bootstrap.js"></script>
	<style>
		body {
			padding-top: 50px;
		}

		img.center {
			display: block;
			margin: 0 auto;
		}
	</style>
</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Project name</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav"></ul>
			</div>
		</div>
	</nav>

	<div class="container">
		<h1 class="text-center">Услуги</h1>

		<div class="col-sm-3">
			<!-- Таблица, которую вы видете ниже, это элемент 1-го товара. Вам нужно такю сделать для каждого товара -->
			<table class="table table-bordered">
				<tr>
					<td class="text-center" colspan="2">
						<!-- IMAGE 200x200 -->
						<img src="" class="img-thumbnail center">
					</td>
				</tr>
				<tr>
					<td class="text-center" colspan="2">
						<?php echo $services[0] ?>
					</td>
				</tr>
				<tr>
					<td class="text-center">
						<!-- GOODS PRICE -->$
					</td>
					<td class="text-center">
						<!-- GOODS CREATED AT YYYY-MM-DD -->
					</td>
				</tr>
			</table>
		</div>
		<div class="col-sm-3">
			<!-- Таблица, которую вы видете ниже, это элемент 1-го товара. Вам нужно такю сделать для каждого товара -->
			<table class="table table-bordered">
				<tr>
					<td class="text-center" colspan="2">
						<!-- IMAGE 200x200 -->
						<img src="" class="img-thumbnail center">
					</td>
				</tr>
				<tr>
					<td class="text-center" colspan="2">
						<?php echo $services[1] ?>
					</td>
				</tr>
				<tr>
					<td class="text-center">
						<!-- GOODS PRICE -->$
					</td>
					<td class="text-center">
						<!-- GOODS CREATED AT YYYY-MM-DD -->
					</td>
				</tr>
			</table>
		</div>
		<div class="col-sm-3">
			<!-- Таблица, которую вы видете ниже, это элемент 1-го товара. Вам нужно такю сделать для каждого товара -->
			<table class="table table-bordered">
				<tr>
					<td class="text-center" colspan="2">
						<!-- IMAGE 200x200 -->
						<img src="" class="img-thumbnail center">
					</td>
				</tr>
				<tr>
					<td class="text-center" colspan="2">
						<?php echo $services[2] ?>
					</td>
				</tr>
				<tr>
					<td class="text-center">
						<!-- GOODS PRICE -->$
					</td>
					<td class="text-center">
						<!-- GOODS CREATED AT YYYY-MM-DD -->
					</td>
				</tr>
			</table>
		</div>
		<div class="col-sm-3">
			<!-- Таблица, которую вы видете ниже, это элемент 1-го товара. Вам нужно такю сделать для каждого товара -->
			<table class="table table-bordered">
				<tr>
					<td class="text-center" colspan="2">
						<!-- IMAGE 200x200 -->
						<img src="" class="img-thumbnail center">
					</td>
				</tr>
				<tr>
					<td class="text-center" colspan="2">
						<?php echo $services[3] ?>
					</td>
				</tr>
				<tr>
					<td class="text-center">
						<!-- GOODS PRICE -->$
					</td>
					<td class="text-center">
						<!-- GOODS CREATED AT YYYY-MM-DD -->
					</td>
				</tr>
			</table>
		</div>
		<div class="col-sm-3">
			<!-- Таблица, которую вы видете ниже, это элемент 1-го товара. Вам нужно такю сделать для каждого товара -->
			<table class="table table-bordered">
				<tr>
					<td class="text-center" colspan="2">
						<!-- IMAGE 200x200 -->
						<img src="" class="img-thumbnail center">
					</td>
				</tr>
				<tr>
					<td class="text-center" colspan="2">
						<?php echo $services[4] ?>
					</td>
				</tr>
				<tr>
					<td class="text-center">
						<!-- GOODS PRICE -->$
					</td>
					<td class="text-center">
						<!-- GOODS CREATED AT YYYY-MM-DD -->
					</td>
				</tr>
			</table>
		</div>
		<div class="col-sm-3">
			<!-- Таблица, которую вы видете ниже, это элемент 1-го товара. Вам нужно такю сделать для каждого товара -->
			<table class="table table-bordered">
				<tr>
					<td class="text-center" colspan="2">
						<!-- IMAGE 200x200 -->
						<img src="" class="img-thumbnail center">
					</td>
				</tr>
				<tr>
					<td class="text-center" colspan="2">
						<?php echo $services[5] ?>
					</td>
				</tr>
				<tr>
					<td class="text-center">
						<!-- GOODS PRICE -->$
					</td>
					<td class="text-center">
						<!-- GOODS CREATED AT YYYY-MM-DD -->
					</td>
				</tr>
			</table>
		</div>
	</div>



	<!-- Bootstrap core JavaScript
		================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>