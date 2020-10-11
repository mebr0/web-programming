<!DOCTYPE html>
<html>
<head>
	<title>Lab6 - Part1 - Exercise 2</title>
</head>
<body>
	<a href="index.html">Back</a>
	
	<form action="p1e2.php" method="post">
		<input type="number" name="temp">
		<input type="submit">
	</form>

	<?php
		// Check whether temp present
		if (isset($_POST["temp"])) {
			$f = $_POST["temp"];
		}
		else {
			$f = 59;
		}
	?>

	<p>
	F of 
	<?php
		print $f;
	?>
	 = C of 
	<?php
		print (5 / 9) * ($f - 32);
	?>
	</p>
</body>
</html>