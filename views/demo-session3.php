<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
		// to change a session variable, just overwrite it
		$_SESSION["favcolor"] = "yellow";
		//print_r($_SESSION);
		// Echo session variables that were set on previous page
		echo "Favorite colour is " . $_SESSION["favcolor"] . ".<br>";
		echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
	?>
</body>
</html>