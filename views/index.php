<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<?php
		require('../controllers/Cars.php');
		$cars_controller = new Cars();
		$car1 = $cars_controller->get_car();
	?>
<title>Index Page</title>
</head>

<body>
	<?php echo "Hello World!<br><br>My name is Paul.<br>"; ?>
	<p>
		Car make: <?php echo $car1->get_make() ?><br>
		Car model: <?php echo $car1->get_model() ?><br>
		Car colour: <?php echo $car1->get_colour() ?><br>
	</p>
</body>
</html>