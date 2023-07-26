<?php
// Start the session
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Demo Session - Page 1</title>
</head>

<body>
	<?php
		// Set session variables
		$_SESSION["favcolor"] = "green";
		$_SESSION["favanimal"] = "cat";
		echo "Session variables are set.";
	?>
</body>
</html>