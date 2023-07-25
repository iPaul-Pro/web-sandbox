<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<?php
		require('../controllers/Cars.php');
		$cars_controller = new Cars();
	?>
<title>Index Page</title>
</head>

<body>
	<?php echo "Hello World!<br><br>My name is Paul.<br><br>"; ?>
	<p>
		Car make: <?php echo $cars_controller->get_car_make() ?><br>
		Car model: <?php echo $cars_controller->get_car_model() ?><br>
		Car colour: <?php echo $cars_controller->get_car_colour() ?><br>
	</p>
</body>
</html>