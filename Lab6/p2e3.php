<!DOCTYPE html>
<html>
<head>
	<title>Lab6 - Part2 - Exercise 3</title>
</head>
<body>
	<a href="index.html">Back</a>
	
	<?php
		$limit = 32767;
	?>

	<h1>Fibonacci numbers less than short (FOR)</h1>
	<p>
	<?php
		$first = 0;
		$second = 0;

		for ($third = 1; $third < $limit; $first = $second, $second = $third, $third = $first + $second) {
			print $third . "\n";
		}
	?>
	</p>

	<h1>Fibonacci numbers less than short (WHILE)</h1>
	<p>
	<?php
		$first = 0;
		$second = 0;
		$third = 1;

		while ($third < $limit) {
			print $third . "\n";

			$first = $second;
			$second = $third;
			$third = $first + $second;
		}
	?>
	</p>
</body>
</html>