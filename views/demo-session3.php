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
		print_r($_SESSION);
	?>
</body>
</html>