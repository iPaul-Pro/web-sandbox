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
	<p>Go to <a href="demo-session2.php">Demo Session - Page 2</a></p>
</body>
</html>