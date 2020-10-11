<!DOCTYPE html>
<html>
<head>
	<title>Lab6 - Part1 - Exercise 6</title>
</head>
<body>
	<a href="index.html">Back</a>
	
	<form action="p1e6.php" method="post">
		<input type="number" name="input">
		<input type="number" name="cost">
		<input type="submit">
	</form>

	<?php
		// Check whether temp present
		if (isset($_POST["input"])) {
			$input = $_POST["input"];
		}
		else {
			$input = 100;
		}

		if (isset($_POST["cost"])) {
			$cost = $_POST["cost"];
		}
		else {
			$cost = 100;
		}
	?>

	<?php
		$costs = array(50, 20, 10, 5, 2, 1);

		$difference = $input - $cost;

		foreach ($costs as $value) {
			$count = (int) ($difference / $value);

			print "<p>Number of " . $value . " cent coins: " . $count . "</p>";

			$difference -= $value * $count;
		}
	?>
	</p>
</body>
</html>