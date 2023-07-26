<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Demo Session - Page 2</title>
</head>

<body>
	<?php
		// Echo session variables that were set on previous page
		echo "Favorite colour is " . $_SESSION["favcolor"] . ".<br>";
		echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
	?>
</body>
</html>