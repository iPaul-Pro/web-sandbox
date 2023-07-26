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
	<p>
		Hello World!<br><br>My name is Paul.<br><br>
		My new car is a <?php echo $car1->get_make() ." ". $car1->get_model() ." in ". $car1->get_colour() ."." ?><br><br>
		Go to <a href="car-form.php">Car form</a><br><br>
		Go to <a href="demo-session1.php">Demo Sessions</a>
	</p>
</body>
</html>