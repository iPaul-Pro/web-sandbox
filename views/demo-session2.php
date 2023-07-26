<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Demo Sessions - Page 2</title>
</head>

<body>
	<?php
		// Echo session variables that were set on previous page
		echo "Favorite colour is " . $_SESSION["favcolor"] . ".<br>";
		echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
	?>
	<p>
		Go to <a href="demo-session1.php">Demo Sessions - Page 1</a><br><br>
		Go to <a href="demo-session3.php">Demo Sessions - Page 3</a>
	</p>
</body>
</html>