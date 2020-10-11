<!DOCTYPE html>
<html>
<head>
	<title>Lab6 - Part2 - Exercise 2</title>
</head>
<body>
	<a href="index.html">Back</a>
	
	<form action="p2e2.php" method="post">
		<input type="number" name="x0">
		<input type="number" name="x1">
		<input type="number" name="x2">
		<input type="number" name="x3">
		<input type="number" name="x4">
		<input type="number" name="x5">
		<input type="number" name="x6">
		<input type="number" name="x7">
		<input type="number" name="x8">
		<input type="number" name="x9">
		<input type="submit">
	</form>

	<?php
		$names = array('x0' => PHP_INT_MIN, 'x1' => PHP_INT_MIN, 'x2' => PHP_INT_MIN, 'x3' => PHP_INT_MIN, 'x4' => PHP_INT_MIN, 
			'x5' => PHP_INT_MIN, 'x6' => PHP_INT_MIN, 'x7' => PHP_INT_MIN, 'x8' => PHP_INT_MIN, 'x9' => PHP_INT_MIN);

		foreach ($names as $key => $value) {
			if (isset($_POST[$key])) {
				$names[$key] = $_POST[$key];
			}
		}
		
		$max = PHP_INT_MIN;

		foreach ($names as $key => $value) {
			if ($value > $max) {
				$max = $value;
			}
		}

		if ($max == PHP_INT_MIN) {
			print "No numbers present";
		}
		else {
			print "Maximum is " . $max;
		}
	?>
</body>
</html>