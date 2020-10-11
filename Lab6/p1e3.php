<!DOCTYPE html>
<html>
<head>
	<title>Lab6 - Part1 - Exercise 3</title>
</head>
<body>
	<a href="index.html">Back</a>
	
	<form action="p1e3.php" method="post">
		<input type="number" name="radius">
		<input type="submit">
	</form>

	<?php
		// Check whether temp present
		if (isset($_POST["radius"])) {
			$r = $_POST["radius"];
		}
		else {
			$r = 1;
		}

		$pi = 3.14159;
	?>

	<p>
	Diameter is  
	<?php
		print 2 * $r;
	?>
	</p>

	<p>
	Circumference is  
	<?php
		print 2 * $r * $pi;
	?>
	</p>

	<p>
	Area is  
	<?php
		print $pi * $r ** 2;
	?>
	</p>
</body>
</html>