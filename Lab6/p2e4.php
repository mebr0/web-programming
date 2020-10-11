<!DOCTYPE html>
<html>
<head>
	<title>Lab6 - Part2 - Exercise 4</title>
</head>
<body>
	<a href="index.html">Back</a>
	
	<form action="p2e4.php" method="post">
		<input type="number" name="first">
		<select name="operator">
			<option selected="selected" value="+">+</option>
			<option value="-">-</option>
			<option value="*">*</option>
			<option value="/">/</option>
			<option value="%">%</option>
		</select>
		<input type="number" name="second">
		<input type="submit">
	</form>
	<p>
	<?php
		if (isset($_POST["first"])) {
			$first = $_POST["first"];
		}
		else {
			$first = 0;
		}

		if (isset($_POST["operator"])) {
			$operator = $_POST["operator"];
		}
		else {
			$operator = "+";
		}

		if (isset($_POST["second"])) {
			$second = $_POST["second"];
		}
		else {
			$second = 0;
		}

		switch ($operator) {
			case '+':
				print $first + $second;
				break;
			case '-':
				print $first - $second;
				break;
			case '*':
				print $first * $second;
				break;
			case '/':
				if ($second != 0) {
					print $first / $second;
				}
				else {
					print "error: cannot divide by 0";
				}
				break;
			case '%':
				if ($second != 0) {
					print $first % $second;
				}
				else {
					print "error: cannot divide by 0";
				}
				break;
			default:
				print $first + $second;
				break;
		}
	?>
	</p>
</body>
</html>