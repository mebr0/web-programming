<!DOCTYPE html>
<html>
<head>
	<title>Lab6 - Part1 - Exercise 5</title>
</head>
<body>
	<a href="index.html">Back</a>

	<form action="p1e5.php" method="post">
		<input type="number" name="seconds">
		<input type="submit">
	</form>

	<?php
		// Check whether temp present
		if (isset($_POST["seconds"])) {
			$seconds = $_POST["seconds"];
		}
		else {
			$seconds = 3456;
		}
	?>

	<p>Hours minutes seconds for <? print $seconds; ?> seconds = 
	<?php
		$seconds %= 3600 * 24;

		$hours = (int) ($seconds / 3600);

		print "H:" . $hours . " ";

		$seconds -= 3600 * $hours;

		$minutes = (int) ($seconds / 60);

		print "M:" . $minutes . " ";

		$seconds -= 60 * $minutes;

		print "S:" . $seconds;
	?>
	</p>
</body>
</html>