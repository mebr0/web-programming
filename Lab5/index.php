<!DOCTYPE html>
<html>
<head>
	<title>Lab 5</title>
</head>
<body>
	<h1>Exercise 1</h1>
	<p>7 + 3 * 6 / 2 - 1 = 
	<?=
		7 + 3 * 6 / 2 - 1;
	?>
	</p>

	<p>(3 * 9 * (3 + (4 * 5 / 3))) = 
	<?=
		3 * 9 * (3 + (4 * 5 / 3));
	?>
	</p>

	<p>12.0 + 2 / 5 * 10.0 = 
	<?=
		12.0 + 2 / 5 * 10.0;
	?>
	</p>

	<p>2 / 5 + 10.0 * 3 - 2.5 = 
	<?=
		2 / 5 + 10.0 * 3 - 2.5;
	?>
	</p>

	<h1>Exercise 2</h1>
	<p>Formula C = (5/9)(F - 32)</p>
	<p>F of 59 = C of 
	<?php
		$F = 59;
		print (5 / 9) * ($F - 32);
	?>
	</p>

	<h1>Exercise 3</h1>
	<p>D = 2 * r</p>
	<p>C = 2 * pi * r</p>
	<p>A = pi * r ** 2</p>
	<p>D C A of radius 3 are 
	<?php
		$r = 3;
		$pi = 3.14159;

		print 2 * $r . "   ";
		print 2 * $pi * $r . "   ";
		print $pi * $r ** 2;
	?>
	</p>

	<h1>Exercise 4</h1>
	<p>D = ((x2 - x1) ** 2 + (y2 - y1) ** 2) ** 0.5</p>
	<p>Distance between (1, 2) and (3, 5) = 
	<?php
		$x1 = 1;
		$y1 = 2;
		$x2 = 3;
		$y2 = 5;

		print (($x2 - $x1) ** 2 + ($y2 - $y1) ** 2) ** 0.5;
	?>
	</p>

	<h1>Exercise 5</h1>
	<p>Hours minutes seconds for 4123 seconds = 
	<?php
		$seconds = 4123;

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

	<h1>Exercise 6</h1>
	<?php
		$input = 100;
		$cost = 25;

		$costs = array(50, 20, 10, 5, 2, 1);

		$difference = $input - $cost;

		foreach($costs as $item) {
			$count = (int) ($difference / $item);

			print $item . " " . $count . "\n";

			$difference -= $count * $item;
		}
	?>
</body>
</html>
