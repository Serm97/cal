<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Deligth</title>
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<style>
		#img{
			width: 520PX;
			height: 250PX;
			margin: auto;
		}
	</style>
</head>
<body>
	<?php include "menu.php"; ?>

	<div class="card-group container-fluid">

		<div class="col-6">
			<div class="card  text-white bg-dark" style="width: 40rem;">
				<br>
				<img class="card-img-top" src="images/habitaciones/hab01.jpg" alt="Card image cap" id="img">
				<div class="card-body">
					<h4 class="card-title">Card title</h4>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<a href="#" class="btn btn-danger">Go somewhere</a>
				</div>
			</div>
			
		</div>
		<div class="col-6">
				<div class="card text-white bg-dark" style="width: 40rem;">
					<br>
					<img class="card-img-top" src="images/habitaciones/hab02.jpg" alt="Card image cap" id="img">
					<div class="card-body">
						<h4 class="card-title">Card title</h4>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-danger">Go somewhere</a>
					</div>
				</div>
			</div>
		
	</div>
	
		


	<?php include "pie.php"; ?>
</body>
</html>